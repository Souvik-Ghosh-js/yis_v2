<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Support\Facades\Storage;
use App\Models\Notification;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class ProductController extends Controller
{
    public function PAR(Request $request)
    {
        try {
            // Check if the user is authenticated
            if (Auth::check()) {
                $user_id = Auth::id(); // Fetch the current user's ID

                $validatedData = $request->validate([
                    'name' => 'required',
                    'description' => 'required',
                    'image' => 'required|file|image|mimes:jpeg,png,jpg,gif|max:2048',
                    'status' => 'boolean',
                    'payment_status' => 'boolean',
                ]);

                // Generate product ID in a series (e.g., P0001, P0002, ...)
                $latestProduct = Product::latest()->first();
                $productNumber = $latestProduct ? (int)substr($latestProduct->product_id, 1) + 1 : 1;
                $productID = sprintf("P%04d", $productNumber);

                // Handle image upload to local storage
                if ($request->hasFile('image')) {
                    $image = $request->file('image');
                    $imageName = $this->uploadToLocalStorage($image, 'products', $productID);
                    $validatedData['image'] = $imageName;
                }

                $productData = array_merge($validatedData, [
                    'product_id' => $productID,
                    'user_id' => $user_id,
                    'warehouse_id' => 1,
                ]);

                $product = Product::create($productData);

                Notification::create([
                    'warehouse_id' => 1,
                    'user_id' => $user_id,
                    'self' => 0,
                    'read' => 0,
                    'message' => "Product successfully added with product number: $productID",
                ]);

                return redirect('/user-dashboard');
            } else {
                // User is not authenticated, handle accordingly (e.g., redirect to login)
                return redirect('/login-page')->with('error', 'User not authenticated');
            }
        } catch (\Exception $e) {
            return response()->json(['error' => 'Error creating product', 'message' => $e->getMessage()], 500);
        }
    }


    private function uploadToLocalStorage($file, $folder, $fileName)
    {
        try {
            // Store the file in the specified folder within the "storage/app/public" directory
            $path = $file->storeAs("public/$folder", $fileName.'.'.$file->getClientOriginalExtension());

            // Retrieve the path without the "public/" prefix
            return str_replace('public/', '', $path);
        } catch (\Exception $e) {
            // Log the exception message
            info($e->getMessage());
            throw $e; // Rethrow the exception for Laravel to handle
        }
    }

    public function changestatus(Request $request, $id)
{
    try {
        $user_id = Auth::id(); // Fetch the current user's ID

        $validatedData = $request->validate([
            'name' => 'required',
            'description' => 'required',
            'status' => 'required|in:Received,Shipped,Delivered,Returned,Pending',
            'dimension' => 'nullable',
            'remark' => 'nullable',
            'image' => 'nullable',
        ]);

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = $this->uploadToLocalStorage($image, 'products', $id);
            $validatedData['image'] = $imageName;
        }

        // Fetch the product details
        $product = Product::findOrFail($id);

        // Extract warehouse_id
        $warehouse_id = $product->warehouse_id;

        // Update product fields
        $product->update($validatedData);

        $status = $validatedData['status'];

        Notification::create([
            'warehouse_id' => $warehouse_id,
            'user_id' => $user_id,
            'self' => 1,
            'read' => 0,
            'message' => "Your Product id:$id has been $status"
        ]);

        // Notification::create([
        //     'warehouse_id' => $warehouse_id,
        //     'user_id' => $user_id,
        //     'self' => 0,
        //     'read' => 0,
        //     'message' => "$status product id::$id ",
        // ]);

        return redirect('/warehouse-dashboard');
    } catch (\Exception $e) {
        return response()->json(['error' => 'Error updating product', 'message' => $e->getMessage()], 500);
    }
}


    public function addAddress(Request $request)
    {
        try {
            $user_id = Auth::id(); // Fetch the current user's ID

            // Validate the request data
            $validatedData = $request->validate([
                'productId' => 'required', // Add any validation rules as needed
                'city' => 'required',
                'postalCode' => 'required',
                'landmark' => 'required',
                'country' => 'required',
            ]);
            // Assuming you have a product ID (adjust this according to your form)
            $productId = $validatedData['productId'];
             // Replace with the actual product ID
            // Find the product by ID
            $product = Product::find($productId);

            // Remove productId from validated data to avoid storing it in the address
            unset($validatedData['productId']);

            // Concatenate the address data
            $address = implode(', ', $validatedData);

            // Add the concatenated address to the product's address field
            $product->update(['address' => $address]);
            $product->update(['status' => 'Requested for Dispatch']);
            Notification::create([
                'warehouse_id' => 1,
                'user_id' => $user_id,
                'self' => 0,
                'read' => 0,
                'message' => "Address Has been added for product id:$productId and the product is requested for dispatch",
            ]);

            return redirect("/user-dashboard");
        } catch (\Exception $e) {
            return response()->json(['error' => 'Error adding address', 'message' => $e->getMessage()], 500);
        }
    }

    public function updateStatus(Request $request)
{
    $validator = Validator::make($request->all(), [
        'productId' => 'required|exists:products,product_id',
    ]);

    if ($validator->fails()) {
        return response()->json(['error' => $validator->errors()], 422);
    }

    try {
        // Find the product by ID
        $product = Product::find($request->input('productId'));
        // dd($request->input('productId'));
        if (!$product) {
            return response()->json(['error' => 'Product not found'], 404);
        }

        // Update the product status
        $product->status = 'Accepted';
        $product->days = 0;
        $product->save();

        // Add a notification for the status change
        $notification = new Notification([
            'user_id' => $product->user_id, // Assuming each product is associated with a user
            'warehouse_id' => $product->warehouse_id, // Assuming each product is associated with a warehouse
            'message' => 'Your product status has been changed to ' . 'Accepted',
            'read' => 0,
            'self' => 0,
        ]);
        $notification->save();

        return redirect("/user-dashboard");
    } catch (\Exception $e) {
        \Log::error('Error during status change: ' . $e->getMessage());
        return response()->json(['error' => 'Something went wrong'], 500);
    }
}


public function updateStatus1(Request $request)
{
    $validator = Validator::make($request->all(), [
        'productId' => 'required|exists:products,product_id',
    ]);

    if ($validator->fails()) {
        return response()->json(['error' => $validator->errors()], 422);
    }

    try {
        // Find the product by ID
        $product = Product::find($request->input('productId'));
        // dd($request->input('productId'));
        if (!$product) {
            return response()->json(['error' => 'Product not found'], 404);
        }

        // Update the product status
        $product->status = 'Request for Return';
        $product->save();

        // Add a notification for the status change
        $notification = new Notification([
            'user_id' => $product->user_id, // Assuming each product is associated with a user
            'warehouse_id' => $product->warehouse_id, // Assuming each product is associated with a warehouse
            'message' => 'Your product status has been changed to ' . 'Returned',
            'read' => 0,
            'self' => 0,
        ]);
        $notification->save();

        return redirect("/user-dashboard");
    } catch (\Exception $e) {
        \Log::error('Error during status change: ' . $e->getMessage());
        return response()->json(['error' => 'Something went wrong'], 500);
    }
}

}

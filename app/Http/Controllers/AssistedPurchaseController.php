<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UserAssistedPurchase;
use App\Models\AddedProduct;

use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;

class AssistedPurchaseController extends Controller
{
    public function addProduct(Request $request)
    {
        try {
            $user_id = Auth::id();
            // Validate the form data
            $validator = Validator::make($request->all(), [
                'name' => 'required|string',
                'price' => 'required|numeric',
                'desc' => 'required|string',
                'url' => 'required|string',
                'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048', // Adjust the allowed image types and size
            ]);

            if ($validator->fails()) {
                return response()->json(['errors' => $validator->errors()], 422);
            }

            // Handle image upload
            $imagePath = $request->file('image')->store('product_images', 'public');

            // Create a new record in the user_products table
            UserAssistedPurchase::create([
                'user_id' => $user_id,
                'product_name' => $request->input('name'),
                'price' => $request->input('price'),
                'product_description' => $request->input('desc'),
                'url' => $request->input('url'),
                'image' => $imagePath,
                // Add other fields as needed
            ]);

            return redirect('/user-dashboard');
        } catch (\Exception $e) {
            \Log::error('Error adding user product: ' . $e->getMessage());
            dd($e->getMessage());
            return response()->json(['error' => 'Something went wrong'], 500);
        }
    }

    public function addedProducts(Request $request)
    {
        // Validate the form data
        try
        {
        $request->validate([
            'name' => 'required|string',
            'price' => 'required|numeric',
            'category' => 'required|string',
            'qty' => 'required|numeric',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        // Handle file upload
        $imagePath = $request->file('image')->store('product_images', 'public');

        // Save the product details to the database
        $product = AddedProduct::create([
            'name' => $request->input('name'),
            'price' => $request->input('price'),
            'category' => $request->input('category'),
            'qty' => $request->input('qty'),
            'image' => $imagePath,
        ]);

        return redirect('/admin-products');
        }
        catch (\Exception $e) {
        \Log::error('Error adding  product: ' . $e->getMessage());
        dd($e->getMessage());
        return response()->json(['error' => 'Something went wrong'], 500);
        }
    }

}

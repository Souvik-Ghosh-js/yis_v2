<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cart;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;


class CartController extends Controller
{
    public function addToCart(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'product_id' => 'required|exists:added_products,id',
        ]);

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 422);
        }

        try {
            $user = Auth::user();
            $cart = new Cart();
            $cart->user_id = $user->id;
            $cart->product_id = $request->input('product_id');

            // Generate a random 10-character string for transaction_id
            $transaction_id = Str::random(10);
            $cart->transaction_id =$transaction_id;
            // For example, set quantity, price, etc.

            // Save the cart instance
            $cart->save();
            session(['transaction_id' => $transaction_id]);

            // Optionally, you can redirect the user to their cart page or any other page
            return redirect('/cart');
        } catch (\Exception $e) {
            \Log::error('Error adding product to cart: ' . $e->getMessage());
            dd($e->getMessage());
            // return back()->with('error', 'Failed to add product to cart');
        }
    }

}

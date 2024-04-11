<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CartController extends Controller
{
    public function addToCart(Request $request,$product_id,$product_name,$product_price)
{
    $productId = $product_id;
    $productName = $product_name;
    $productPrice =$product_price;

    // Store the item information in the session
    $request->session()->put('cart.' . $productId, [
        'id' => $productId,
        'name' => $productName,
        'price' => $productPrice,
        // Any other relevant information
    ]);

    $cart = session('cart', []);

    // Pass cart data to the view
    return view('product_view', ['cart' => $cart]);
   
   // view()->share('cart',$cart);

    ///return view('product_view');


    // You can also use Session facade
    // Session::put('cart.' . $productId, [ ... ]);

   /// return redirect()->back()->with('success', 'Item added to cart successfully');
}
}

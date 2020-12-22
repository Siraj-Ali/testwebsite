<?php

namespace App\Http\Controllers\Cart;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\ProductModel;
class CartController extends Controller
{
    public function addoCart() {
        return view('cart');
    }

    public function cart()
    {
        $cart =  session()->get('cart');
        // dd($cart);
        return view('cart');
    }

    public function addToCart(ProductModel $product)
    {
        $cart =  session()->get('cart');
        if (!$cart){
            $cart = [$product->id => $this->sessionData($product)];
            return $this->setSessionAndReturnResponse($cart);
        }
        if (isset($cart[$product->id])){
            $cart[$product->id]['quantity']++;
            return $this->setSessionAndReturnResponse($cart);
        }
        $cart[$product->id] = $this->sessionData($product);
        return $this->setSessionAndReturnResponse($cart);

    }

    public function removeFromCart($id)
    {
        $cart = session()->get('cart');

        if (isset($cart[$id])){
            unset($cart[$id]);
            session()->put('cart', $cart);
        }
        return redirect()->back()->with('success', "Removed from Cart");
    }

    protected function sessionData(ProductModel $product){
        return [
            'name'        => $product->title,
            'name_ar'        => $product->title_ar,
            'quantity'    => 1,
            'price'       => $product->price,
            'image'       => $product->image
        ];
    }

    protected function setSessionAndReturnResponse($cart){
        session()->put('cart', $cart);
        return redirect()->route('cart')->with('success', "Added to Cart");
    }
}

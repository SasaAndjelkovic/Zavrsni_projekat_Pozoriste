<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Article;

class CartController extends Controller
{
    public function cart() {
        var_dump(session('cartItems'));
        return view('cart.cart');
    }

    public function addToCart(Article $article) 
    {
        $cartItems = session()->get('cartItems', []);

        if(isset($cartItems[$article->id])) {
            $cartItems[$article->id]['quantity']++;
        }
        else {
            $cartItems[$article->id] = [
                "image_path" => $article->image_path,
                "name" => $article->name,
                "details" => $article->details,
                "brand" => $article->brand,
                "price" => $article->price,
                "quantity" => 1
            ];
        }
        session()->put('cartItems', $cartItems);
        return redirect()->back();
    }

    public function delete(Article $article) {
        if($article) {
            $cartItems = session()->get('cartItems');

            if(isset($cartItems[$article->id])) {
                unset($cartItems[$article->id]);
                session()->put('cartItems', $cartItems);
            }
        }

        return redirect()->back();
    }
}


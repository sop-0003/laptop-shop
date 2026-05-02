<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function add($id)
    {
        $product = Product::findOrFail($id);

        $cart = session()->get('cart', []);

        // IMAGE FROM public/image
        $image = asset('image/' . $product->image);

        if (isset($cart[$id])) {
            $cart[$id]['quantity']++;
        } else {
            $cart[$id] = [
                'id' => $id,
                'name' => $product->name,
                'price' => $product->price,
                'image' => $image,
                'quantity' => 1
            ];
        }

        session()->put('cart', $cart);


        return response()->json([
            'message' => 'Added to cart',
            'cartCount' => count($cart)
        ]);
    }

    public function index()
    {
        return view('cart', [
            'cart' => session('cart', [])
        ]);
    }

    public function remove($id)
    {
        $cart = session()->get('cart', []);

        if (isset($cart[$id])) {
            unset($cart[$id]);
        }

        session()->put('cart', $cart);

        return redirect()->back()->with('success', 'Item removed');
    }

    public function clear()
    {
        session()->forget('cart');
        return redirect()->back();
    }

    public function count()
    {
        return response()->json([
            'count' => count(session('cart', []))
        ]);
    }
    public function update(Request $request, $id)
    {
        $cart = session()->get('cart', []);

        if (isset($cart[$id])) {
            $qty = max(1, (int)$request->quantity);
            $cart[$id]['quantity'] = $qty;
            session()->put('cart', $cart);
        }

        return redirect()->back();
    }
}
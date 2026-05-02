<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Order;
use SimpleSoftwareIO\QrCode\Facades\QrCode;

class CheckoutController extends Controller
{
    public function index()
    {
        $cart = session('cart', []);

        if (count($cart) == 0) {
            return redirect('/cart')->with('error', 'Cart is empty');
        }


        $total = 0;
        foreach ($cart as $item) {
            $total += $item['price'] * $item['quantity'];
        }

        // Example payment text (you can change to ABA account)
        $paymentText = "Pay to ABA\nAccount: 123456789\nAmount: $" . $total;

        // Generate QR
        $qr = QrCode::size(200)->generate($paymentText);

        return view('checkout', compact('cart', 'total', 'qr'));
    }

public function placeOrder(Request $request)
{
    $request->validate([
        'name' => 'required',
        'phone' => 'required',
        'address' => 'required',
    ]);

    $cart = session('cart', []);

    if (count($cart) == 0) {
        return redirect('/cart')->with('error', 'Cart is empty');
    }

    $total = 0;
    foreach ($cart as $item) {
        $total += $item['price'] * $item['quantity'];
    }

    // Save order
    $order = Order::create([
        'name' => $request->name,
        'phone' => $request->phone,
        'address' => $request->address,
        'total' => $total,
        'items' => json_encode($cart),
    ]);

    session()->forget('cart');

    // Redirect to invoice page
    return redirect()->route('invoice.show', $order->id);
}

    public function invoice($id)
{
    $order = Order::findOrFail($id);
    $items = json_decode($order->items, true);

    return view('invoice', compact('order', 'items'));
}
public function checkout()
{
    $orders = Order::latest()->get();

    return view('dashboard.order', compact('orders'));
}
}

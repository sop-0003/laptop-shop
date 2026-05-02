<x-layout title="Checkout">
    <x-slot:heading>Checkout</x-slot:heading>

    <div class="max-w-6xl mx-auto p-6 grid grid-cols-1 md:grid-cols-2 gap-6">

        <!-- LEFT: FORM -->
        <div>
            <h2 class="text-xl font-bold mb-4">Customer Info</h2>

            <form method="POST" action="/checkout/place-order">
                @csrf

                <input type="text" name="name" placeholder="Name"
                       class="w-full border p-2 mb-3 rounded" required>

                <input type="text" name="phone" placeholder="Phone"
                       class="w-full border p-2 mb-3 rounded" required>

                <textarea name="address" placeholder="Address"
                          class="w-full border p-2 mb-3 rounded" required></textarea>

                <button class="bg-green-500 text-white px-6 py-2 rounded w-full">
                    Confirm Order
                </button>
            </form>
        </div>

        <!-- RIGHT: SUMMARY + QR -->
        <div>
            <h2 class="text-xl font-bold mb-4">Scan to Pay</h2>

            <div class="border rounded p-4 text-center">

                <!-- QR CODE -->

                <!-- OPTIONAL PAYMENT IMAGE -->
                <img src="{{ asset('image/qr.jpg') }}"
                     class="mx-auto w-40 mb-3"
                     onerror="this.style.display='none'">

                <p class="text-gray-600">Scan QR with your banking app</p>

                <hr class="my-3">

                <!-- ORDER SUMMARY -->
                @foreach($cart as $item)
                    <div class="flex justify-between text-sm mb-1">
                        <span>{{ $item['name'] }} x{{ $item['quantity'] }}</span>
                        <span>${{ number_format($item['price'] * $item['quantity'], 2) }}</span>
                    </div>
                @endforeach

                <hr class="my-3">

                <div class="flex justify-between font-bold text-lg">
                    <span>Total</span>
                    <span>${{ number_format($total, 2) }}</span>
                </div>

            </div>
        </div>

    </div>
</x-layout>
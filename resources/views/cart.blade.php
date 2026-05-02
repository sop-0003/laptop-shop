<x-layout title="Cart">
    <x-slot:heading>Your Cart</x-slot:heading>

    <div class="max-w-5xl mx-auto p-6">

        @if(count($cart) == 0)
        <p class="text-gray-500">Cart is empty</p>
        @else

        @php $total = 0; @endphp

        <table class="w-full border-collapse">
            <thead>
                <tr class="border-b text-left bg-gray-100">
                    <th class="p-3">Product</th>
                    <th class="p-3">Price</th>
                    <th class="p-3">Quantity</th>
                    <th class="p-3">Subtotal</th>
                    <th class="p-3">Action</th>
                </tr>
            </thead>

            <tbody>
                @foreach($cart as $id => $item)

                @php
                $subtotal = $item['price'] * $item['quantity'];
                $total += $subtotal;
                @endphp

                <tr class="border-b">

                    <!-- Product -->
                    <td class="p-3 flex items-center gap-4">
                        <img src="{{ $item['image'] }}" class="w-16 h-16 rounded object-cover"
                            onerror="this.src='https://via.placeholder.com/80'" />

                        <span class="font-semibold">{{ $item['name'] }}</span>
                    </td>

                    <!-- Price -->
                    <td class="p-3">
                        ${{ number_format($item['price'], 2) }}
                    </td>

                    <!-- Quantity (AUTO UPDATE) -->
                    <td class="p-3">
                        <form method="POST" action="/cart/update/{{ $id }}">
                            @csrf
                            <input type="number" name="quantity" value="{{ $item['quantity'] }}" min="1"
                                class="w-16 border rounded px-2 py-1 text-center" onchange="this.form.submit()">
                        </form>
                    </td>

                    <!-- Subtotal -->
                    <td class="p-3 font-bold">
                        ${{ number_format($subtotal, 2) }}
                    </td>

                    <!-- Remove -->
                    <td class="p-3">
                        <form method="POST" action="/cart/remove/{{ $id }}">
                            @csrf
                            <button class="text-red-500 hover:underline">
                                Remove
                            </button>
                        </form>
                    </td>

                </tr>

                @endforeach
            </tbody>
        </table>

        <!-- Total -->
        <div class="text-right mt-6 text-xl font-bold">
            Total: ${{ number_format($total, 2) }}
        </div>

        <!-- Clear Cart -->

        <!-- Checkout -->


        <a href="{{ route('checkout') }}" class="bg-green-500 text-white px-6 py-2 rounded hover:bg-green-600">
            Checkout
        </a>

        </form>
    </div>

    @endif

    </div>
</x-layout>
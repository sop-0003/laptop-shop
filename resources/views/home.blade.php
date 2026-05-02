<x-layout title="HomePage">
    <x-slot:heading>Welcome to Home Page</x-slot:heading>

    <!-- Full Screen Hero Banner with Background Image -->
    <section class="relative h-screen flex items-center text-white overflow-hidden">

        <!-- Background Image - Full Screen -->
        <div class="absolute inset-0 z-0">
            <img 
                src="{{ asset('image/home.jpg') }}" 
                alt="Premium ASUS Laptops"
                class="w-full h-full object-cover"
            />
            <!-- Dark gradient overlay -->
            <div class="absolute inset-0 bg-gradient-to-r from-black/75 via-black/55 to-transparent"></div>
            <div class="absolute inset-0 bg-gradient-to-b from-black/30 via-transparent to-black/70"></div>
        </div>

        <!-- Content -->
        <div class="relative z-10 max-w-7xl mx-auto px-6 lg:px-8 w-full pt-16">
            <div class="max-w-2xl">
                <!-- Badge -->
                <div class="inline-flex items-center gap-2 bg-white/10 backdrop-blur-md border border-white/30 px-6 py-3 rounded-3xl text-sm font-medium mb-8">
                    <span class="text-yellow-400">★</span>
                    NEW 2026 COLLECTION
                </div>

                <!-- Main Hero Text -->
                <h2 class="text-5xl md:text-6xl lg:text-7xl font-bold tracking-tighter leading-none mb-6">
                    Next-Level Laptops.<br>
                    <span class="text-amber-400">Unmatched Performance.</span>
                </h2>

                <p class="text-xl md:text-2xl text-gray-200 mb-10 max-w-lg">
                    Experience the power of the latest ASUS ZenBook, Vivobook & ROG series. 
                    Stunning visuals, ultra-fast processors, and long battery life.
                </p>

                <!-- Buttons -->
                <div class="flex flex-wrap gap-4">
                    <a href="/product" 
                       class="inline-flex items-center bg-white text-black px-10 py-5 rounded-3xl font-semibold text-lg hover:bg-gray-100 transition-all shadow-lg">
                        Shop Laptops Now →
                    </a>
                    
                    <a href="/category?type=electronics" 
                       class="inline-flex items-center border-2 border-white hover:border-white px-9 py-5 rounded-3xl font-medium text-lg transition-all">
                        Browse All Products
                    </a>
                </div>

                <!-- Trust signals -->
                <div class="mt-16 flex gap-10 text-sm">
                    <div class="flex items-center gap-3">
                        <span class="text-emerald-400 text-2xl">🚚</span>
                        <div>
                            <p class="font-medium">Free Shipping</p>
                            <p class="text-xs text-gray-300">On orders over $300</p>
                        </div>
                    </div>
                    <div class="flex items-center gap-3">
                        <span class="text-emerald-400 text-2xl">🛡️</span>
                        <div>
                            <p class="font-medium">2-Year Warranty</p>
                            <p class="text-xs text-gray-300">Official ASUS</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Floating Price Badge -->
        <div class="hidden xl:block absolute bottom-16 right-12 bg-white text-black px-8 py-6 rounded-3xl shadow-2xl z-20">
            <div class="flex items-center gap-4">
                <span class="text-4xl">💻</span>
                <div>
                    <p class="text-sm text-gray-500">Starting from</p>
                    <p class="text-3xl font-bold">$699</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Featured Products -->
    <section class="max-w-7xl w-auto mx-auto px-4 py-16 ">
        <h3 class="text-4xl font-bold mb-10">Featured Products</h3>
           <div class="bg-white">
  <div class="mx-auto max-w-7xl px-4 py-16 sm:px-6 lg:px-8">

    <div id="products" class="grid grid-cols-1 gap-x-6 gap-y-10 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4">
      <!-- Products will load here -->
    </div>

  </div>
</div>
    </section>

    <!-- Limited Time Offer - Black, Blue & Red Theme -->
<section class="py-20 text-center mx-4 rounded-3xl overflow-hidden relative">

    <!-- Black, Blue & Red Gradient Background -->
    <div class="absolute inset-0 bg-gradient-to-r from-black via-blue-700 to-red-600"></div>
    
    <!-- Extra glow/shine layer -->
    <div class="absolute inset-0 bg-gradient-to-br from-white/10 via-transparent to-transparent"></div>

    <div class="relative z-10 max-w-2xl mx-auto px-6">
        
        <h3 class="text-5xl font-bold text-white mb-4 tracking-tighter">
            Limited Time Offer!
        </h3>
        
        <p class="text-3xl text-white/90 mb-10">
            Get extra <span class="font-bold text-red-300">20% OFF</span> on selected items
        </p>

        <!-- Coupon Code Box -->
        <div class="inline-flex flex-col sm:flex-row items-center gap-4 bg-black/40 backdrop-blur-xl border border-white/20 px-10 py-6 rounded-3xl">
            <span class="text-white text-lg font-medium">Use Code:</span>
            <span class="font-mono bg-white text-black px-8 py-3 rounded-2xl text-2xl font-bold tracking-widest shadow-md">
                SAVE20
            </span>
        </div>

        <div class="mt-10 flex items-center justify-center gap-8 text-sm text-white/70">
            <div class="flex items-center gap-2">
                <span class="text-red-400">●</span>
                <span>Limited Stock</span>
            </div>
            <div class="flex items-center gap-2">
                <span class="text-blue-400">●</span>
                <span>Ends Soon</span>
            </div>
        </div>
    </div>
</section>

    <!-- Testimonials -->
    <section class="max-w-7xl mx-auto px-4 py-20">
        <h3 class="text-4xl font-bold mb-12 text-center">What Our Customers Say</h3>
        
        <div class="grid md:grid-cols-3 gap-8">
            <div class="bg-white p-8 rounded-3xl shadow-sm">
                <p class="italic text-gray-700">"Great products and fast delivery!"</p>
                <div class="mt-6 flex items-center gap-3">
                    <div class="w-10 h-10 rounded-full bg-gray-200">
                        <img src="{{asset('image/cartoon.png')}}" alt="cartoon">
                    </div>
                    <div>
                        <p class="font-medium text-sm">John Doe</p>
                        <p class="text-xs text-gray-500">Phnom Penh</p>
                    </div>
                </div>
            </div>
            <div class="bg-white p-8 rounded-3xl shadow-sm">
                <p class="italic text-gray-700">"Amazing quality for the price."</p>
                <div class="mt-6 flex items-center gap-3">
                    <div class="w-10 h-10 rounded-full bg-gray-200">
                        <img src="{{asset('image/cartoon.png')}}" alt="cartoon">
                    </div>
                    <div>
                        <p class="font-medium text-sm">Sarah Chen</p>
                        <p class="text-xs text-gray-500">Siem Reap</p>
                    </div>
                </div>
            </div>
            <div class="bg-white p-8 rounded-3xl shadow-sm">
                <p class="italic text-gray-700">"I love this shop! Highly recommended."</p>
                <div class="mt-6 flex items-center gap-3">
                    <div class="w-10 h-10 rounded-full bg-gray-200">
                        <img src="{{asset('image/cartoon.png')}}" alt="cartoon">
                    </div>
                    <div>
                        <p class="font-medium text-sm">Michael Rodriguez</p>
                        <p class="text-xs text-gray-500">Customer</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script>
            function loadProducts() {
                fetch('/api/products')
                    .then(res => res.json())
                    .then(data => {

                        // ✅ shuffle + take only 8 products
                        const random8 = data
                            .sort(() => 0.5 - Math.random())
                            .slice(0, 8);

                        let html = '';

                        random8.forEach(p => {
                            html += `
                    <div class="group border rounded-lg p-4">
                        <img src="${p.image}" class="aspect-square w-full rounded-lg bg-gray-200 object-cover group-hover:opacity-75" />

                        <h3 class="mt-4 text-sm text-gray-700">${p.name}</h3>

                        <p class="mt-2 text-sm text-gray-500">${p.description}</p>

                        <p class="mt-2 text-lg font-medium text-gray-900">$${p.price}</p>

                        <button onclick="addToCart(${p.id})"
                            class="mt-3 w-full bg-black text-white py-2 rounded hover:bg-gray-800">
                            Add to Cart
                        </button>
                    </div>
                `;
                        });

                        document.getElementById('products').innerHTML = html;
                    });
            }

            function addToCart(id) {
    fetch('/cart/add/' + id, {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json',
            'X-CSRF-TOKEN': '{{ csrf_token() }}'
        }
    })
    .then(res => res.json())
    .then(data => {
        document.getElementById('cart-count').innerText = data.cartCount;
    });
}

            loadProducts();
        </script>

</x-layout>
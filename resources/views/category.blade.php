<x-layout title="Categories - MyShop">
    <!-- Hero Banner for Categories -->
    <section class="relative h-[420px] flex items-center text-white overflow-hidden">
        <div class="absolute inset-0">
            <img 
                src="{{ asset('image/category.webp') }}" 
                alt="Categories"
                class="w-full h-full object-cover"
            />
            <div class="absolute inset-0 bg-gradient-to-r from-black/70 to-black/40"></div>
        </div>

        <div class="relative z-10 max-w-7xl mx-auto px-6 lg:px-8">
            <h1 class="text-5xl md:text-6xl font-bold tracking-tight mb-4">
                Shop by Category
            </h1>
            <p class="text-xl text-gray-200 max-w-md">
                Find exactly what you're looking for from our carefully curated collections
            </p>
        </div>
    </section>

    <!-- All Categories Grid -->
    <section class="max-w-7xl mx-auto px-4 py-20">
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-8">

  <!--  -->
<a href="/category/laptop"
   class="group bg-white rounded-3xl overflow-hidden shadow-sm hover:shadow-2xl transition-all duration-300 border border-gray-100">
    <div class="h-64 bg-gradient-to-br from-blue-600 to-indigo-700 flex items-center justify-center relative">
        <img src="{{ asset('image/computer.jpg') }}" class="h-full object-cover">
    </div>
    <div class="p-8">
        <h3 class="text-3xl font-bold mb-2">Laptop</h3>
        <p class="text-gray-600">Laptops</p>
    </div>
</a>

<!-- Desktop -->
<a href="/category/accessories"
   class="group bg-white rounded-3xl overflow-hidden shadow-sm hover:shadow-2xl transition-all duration-300 border border-gray-100">
    <div class="h-64 bg-gradient-to-br from-pink-500 to-rose-600 flex items-center justify-center relative">
        <img src="{{ asset('image/dektoplogo.jpg') }}" class="h-full object-cover">
    </div>
    <div class="p-8">
        <h3 class="text-3xl font-bold mb-2">Desktop</h3>
        <p class="text-gray-600">PC build for gaming</p>
    </div>
</a>

<!-- Hardware -->
<a href="/category/hardware"
   class="group bg-white rounded-3xl overflow-hidden shadow-sm hover:shadow-2xl transition-all duration-300 border border-gray-100">
    <div class="h-64 bg-gradient-to-br from-amber-500 to-orange-600 flex items-center justify-center relative">
        <img src="{{ asset('image/hardware1-logo.webp') }}" class="h-full object-cover">
    </div>
    <div class="p-8">
        <h3 class="text-3xl font-bold mb-2">Hardware</h3>
        <p class="text-gray-600">PC parts</p>
    </div>
</a>

<!-- Accessories -->
<a href="/category/accessories"
   class="group bg-white rounded-3xl overflow-hidden shadow-sm hover:shadow-2xl transition-all duration-300 border border-gray-100">
    <div class="h-64 bg-gradient-to-br from-emerald-500 to-teal-600 flex items-center justify-center relative">
        <img src="{{ asset('image/cypher_1.webp') }}" class="h-full object-cover">
    </div>
    <div class="p-8">
        <h3 class="text-3xl font-bold mb-2">Accessories</h3>
        <p class="text-gray-600">Mouse, Keyboard, Headset</p>
    </div>
</a>
    </section>

    <!-- Popular Categories Banner -->
    <section class="bg-gray-900 py-16 text-white">
        <div class="max-w-7xl mx-auto px-4">
            <div class="text-center mb-12">
                <h2 class="text-4xl font-bold">Popular Right Now</h2>
                <p class="text-gray-400 mt-3">Most loved categories by our customers</p>
            </div>
            
            <div class="flex flex-wrap justify-center gap-4">
                <span class="bg-white/10 hover:bg-white/20 transition-colors px-8 py-4 rounded-3xl text-lg font-medium cursor-pointer">Gaming Laptops</span>
                <span class="bg-white/10 hover:bg-white/20 transition-colors px-8 py-4 rounded-3xl text-lg font-medium cursor-pointer">Wireless Earbuds</span>
                <span class="bg-white/10 hover:bg-white/20 transition-colors px-8 py-4 rounded-3xl text-lg font-medium cursor-pointer">Sneakers</span>
                <span class="bg-white/10 hover:bg-white/20 transition-colors px-8 py-4 rounded-3xl text-lg font-medium cursor-pointer">Smart Watches</span>
            </div>
        </div>
    </section>

</x-layout>
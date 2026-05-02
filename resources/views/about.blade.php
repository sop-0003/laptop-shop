<x-layout title="About Us - MyShop">

    <!-- Story Section -->
    <section class="max-w-7xl mx-auto px-4 py-20">
        <div class="grid lg:grid-cols-2 gap-16 items-center">
            <div>
                <h2 class="text-5xl font-bold tracking-tight mb-6">Our Story</h2>
                <p class="text-lg text-gray-600 leading-relaxed mb-6">
                    Founded in 2024 in Phnom Penh, MyShop was born from a simple idea: 
                    make quality products accessible to everyone in Cambodia and beyond.
                </p>
                <p class="text-lg text-gray-600 leading-relaxed">
                    We believe shopping should be enjoyable, trustworthy, and fast. 
                    Today, we serve thousands of happy customers with electronics, fashion, shoes, 
                    and lifestyle accessories.
                </p>
            </div>
            <div class="rounded-3xl overflow-hidden shadow-2xl">
                <img src="{{ asset('image/asus_poster.jpg') }}" 
                     alt="MyShop Store" 
                     class="w-full h-auto">
            </div>
        </div>
    </section>

    <!-- Values -->
    <section class="bg-gray-100 py-20">
        <div class="max-w-7xl mx-auto px-4">
            <h3 class="text-4xl font-bold text-center mb-12">What We Stand For</h3>
            
            <div class="grid md:grid-cols-3 gap-10">
                <div class="bg-white p-10 rounded-3xl text-center shadow-sm">
                    <div class="text-5xl mb-6">🚚</div>
                    <h4 class="font-semibold text-2xl mb-3">Fast Delivery</h4>
                    <p class="text-gray-600">Same-day delivery in Phnom Penh and next-day nationwide.</p>
                </div>
                <div class="bg-white p-10 rounded-3xl text-center shadow-sm">
                    <div class="text-5xl mb-6">🔒</div>
                    <h4 class="font-semibold text-2xl mb-3">Quality Guarantee</h4>
                    <p class="text-gray-600">Every product is carefully selected and backed by warranty.</p>
                </div>
                <div class="bg-white p-10 rounded-3xl text-center shadow-sm">
                    <div class="text-5xl mb-6">❤️</div>
                    <h4 class="font-semibold text-2xl mb-3">Customer First</h4>
                    <p class="text-gray-600">24/7 support and hassle-free returns.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Team / Why Choose Us -->
    <section class="max-w-7xl mx-auto px-4 py-20">
        <h3 class="text-4xl font-bold text-center mb-12">Why Customers Love Us</h3>
        <div class="max-w-3xl mx-auto text-center text-lg text-gray-600">
            We are more than just an online store. We are your trusted partner for discovering great products with confidence.
        </div>
    </section>

</x-layout>
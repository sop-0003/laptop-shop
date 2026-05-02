<!DOCTYPE html>
<html lang="en" class="bg-gray-50">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title }}</title>

    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

    <script>
    tailwind.config = {
        content: [],
        theme: {
            extend: {
                fontFamily: {
                    sans: ['Inter', 'system-ui', 'sans-serif']
                }
            }
        }
    }
    </script>
</head>

<body class="min-h-screen flex flex-col font-sans">

    @php
    use Illuminate\Support\Facades\Auth;
    @endphp

    <!-- NAVBAR -->
    <nav class="bg-black/70 backdrop-blur-lg border-b border-white/10 sticky top-0 z-50">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">

            <div class="flex h-20 items-center justify-between">

                <!-- LEFT -->
                <div class="flex items-center gap-x-10">
                    <a href="/" class="flex items-center gap-x-3">
                        <img src="image/logo.webp" class="h-9 w-auto" alt="MyShop Logo">
                        <span class="text-2xl font-bold text-white">MyShop</span>
                    </a>

                    <div class="hidden md:flex items-center gap-x-8 text-sm">
                        <a href="/" class="text-gray-200 hover:text-white">Home</a>
                        <a href="/category" class="text-gray-200 hover:text-white">Categories</a>
                        <a href="/product" class="text-gray-200 hover:text-white">Shop</a>
                        <a href="/about" class="text-gray-200 hover:text-white">About</a>
                    </div>
                </div>

                <!-- RIGHT -->
                <div class="flex items-center gap-x-6">

                    <!-- SEARCH -->
                    <div class="hidden md:block relative w-80">
                        <input type="text" placeholder="Search products..."
                            class="w-full bg-white/10 text-white placeholder-gray-300 border border-white/20 rounded-2xl py-3 pl-11 pr-4 text-sm focus:outline-none">

                        <div class="absolute left-4 top-3.5 text-gray-300">
                            <i class="fa-solid fa-magnifying-glass"></i>
                        </div>
                    </div>

                    <!-- AUTH SECTION -->
                    <div class="hidden lg:flex items-center gap-x-5 text-sm">

                        @auth
                        <!-- LOGGED IN USER -->
                        <div class="flex items-center gap-2 text-white bg-white/10 px-4 py-2 rounded-2xl">
                            <i class="fa-solid fa-user"></i>
                            <span>{{ Auth::user()->name }}</span>
                        </div>

                        <!-- LOGOUT -->
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <button class="text-red-400 hover:text-red-300">
                                Logout
                            </button>
                        </form>

                        @else
                        <!-- GUEST -->
                        <a href="{{ route('login') }}" class="text-gray-200 hover:text-white">
                            Sign in
                        </a>

                        <a href="{{ route('register') }}"
                            class="bg-white text-gray-900 px-5 py-2.5 rounded-2xl font-medium hover:bg-gray-100">
                            Create account
                        </a>
                        @endauth

                    </div>

                    <!-- CART -->
                    <a href="/cart" class="flex items-center p-2 text-gray-400 hover:text-white cursor-pointer">

                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" class="size-6">
                            <path
                                d="M15.75 10.5V6a3.75 3.75 0 1 0-7.5 0v4.5m11.356-1.993 1.263 12c.07.665-.45 1.243-1.119 1.243H4.25a1.125 1.125 0 0 1-1.12-1.243l1.264-12A1.125 1.125 0 0 1 5.513 7.5h12.974c.576 0 1.059.435 1.119 1.007ZM8.625 10.5a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Zm7.5 0a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Z"
                                stroke-linecap="round" stroke-linejoin="round" />
                        </svg>

                        <!-- Cart Count Badge -->
                        <span id="cart-count" class="ml-2 text-sm bg-red-500 text-white px-2 py-0.5 rounded-full">
                            0
                        </span>

                    </a>

                    <button class="md:hidden text-gray-200">
                        <i class="fa-solid fa-bars text-2xl"></i>
                    </button>

                </div>

            </div>
        </div>
    </nav>

    <!-- MAIN -->
    <main class="flex-1">
        {{ $slot }}
    </main>

    <!-- FOOTER (unchanged) -->
    <!-- Footer (unchanged) -->
    <footer class="bg-gray-950 text-gray-400">
        <div class="max-w-7xl mx-auto px-4 py-16 grid md:grid-cols-2 lg:grid-cols-12 gap-10">
            <!-- Brand -->
            <div class="lg:col-span-4">
                <div class="flex items-center gap-x-3 mb-6"> <img src="image/logo.webp" class="h-8 w-auto" alt="MyShop">
                    <span class="text-2xl font-bold text-white tracking-tight">MyShop</span> </div>
                <p class="text-gray-500 max-w-xs"> Your trusted destination for quality electronics, fashion, and
                    lifestyle products. </p> <!-- Social Icons -->
                <div class="flex gap-x-5 mt-8"> <a href="#" class="hover:text-white transition-colors"><i
                            class="fa-brands fa-facebook-f text-xl"></i></a> <a href="#"
                        class="hover:text-white transition-colors"><i class="fa-brands fa-instagram text-xl"></i></a> <a
                        href="#" class="hover:text-white transition-colors"><i
                            class="fa-brands fa-tiktok text-xl"></i></a> <a href="#"
                        class="hover:text-white transition-colors"><i class="fa-brands fa-x-twitter text-xl"></i></a>
                </div>
            </div> <!-- Pages -->
            <div class="lg:col-span-2">
                <h4 class="font-semibold text-white mb-6">Shop</h4>
                <ul class="space-y-3">
                    <li><a href="/product" class="hover:text-white transition-colors">All Products</a></li>
                    <li><a href="/category" class="hover:text-white transition-colors">Categories</a></li>
                    <li><a href="#" class="hover:text-white transition-colors">New Arrivals</a></li>
                    <li><a href="#" class="hover:text-white transition-colors">Deals</a></li>
                </ul>
            </div> <!-- Support -->
            <div class="lg:col-span-2">
                <h4 class="font-semibold text-white mb-6">Support</h4>
                <ul class="space-y-3">
                    <li><a href="#" class="hover:text-white transition-colors">Help Center</a></li>
                    <li><a href="#" class="hover:text-white transition-colors">Track Order</a></li>
                    <li><a href="#" class="hover:text-white transition-colors">Shipping Info</a></li>
                    <li><a href="#" class="hover:text-white transition-colors">Returns</a></li>
                </ul>
            </div> <!-- Company -->
            <div class="lg:col-span-2">
                <h4 class="font-semibold text-white mb-6">Company</h4>
                <ul class="space-y-3">
                    <li><a href="/about" class="hover:text-white transition-colors">About Us</a></li>
                    <li><a href="#" class="hover:text-white transition-colors">Careers</a></li>
                    <li><a href="#" class="hover:text-white transition-colors">Blog</a></li>
                    <li><a href="#" class="hover:text-white transition-colors">Contact</a></li>
                </ul>
            </div> <!-- Contact + Newsletter -->
            <div class="lg:col-span-2">
                <h4 class="font-semibold text-white mb-6">Get in touch</h4>
                <p class="text-sm">support@myshop.com</p>
                <p class="text-sm">+855 123 456 78</p> <!-- Simple Newsletter -->
                <div class="mt-8">
                    <p class="text-sm font-medium text-white mb-3">Stay updated</p>
                    <div class="flex"> <input type="email" placeholder="Your email"
                            class="bg-gray-900 border border-gray-700 focus:border-gray-600 rounded-l-2xl px-4 py-3 text-sm flex-1 focus:outline-none">
                        <button
                            class="bg-white text-gray-900 px-6 rounded-r-2xl font-medium hover:bg-gray-100 transition-colors">
                            Join </button> </div>
                </div>
            </div>
        </div> <!-- Bottom Bar -->
        <div class="border-t border-gray-900">
            <div class="max-w-7xl mx-auto px-4 py-6 flex flex-col md:flex-row items-center justify-between text-sm">
                <p>© 2026 MyShop. All rights reserved.</p>
                <div class="flex items-center gap-x-8 mt-4 md:mt-0">
                    <div class="flex gap-x-6 text-xl"> <i class="fa-brands fa-cc-visa"></i> <i
                            class="fa-brands fa-cc-mastercard"></i> <i class="fa-brands fa-cc-paypal"></i> </div>
                    <div class="text-gray-500">Privacy • Terms</div>
                </div>
            </div>
        </div>
    </footer>

</body>

</html>
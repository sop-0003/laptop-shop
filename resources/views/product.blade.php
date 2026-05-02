<x-layout title="Products">
    <!-- Top Bar: Title + Filters -->
    <div class="max-w-7xl mx-auto px-4 py-8">
        <div class="flex flex-col lg:flex-row gap-6 items-start lg:items-center justify-between">
            
            <!-- Page Title -->
            <div>
                <h2 class="text-4xl font-bold tracking-tight">All Products</h2>
                <p class="text-gray-500 mt-1">Discover our latest collection</p>
            </div>

            <!-- Filters -->
            <div class="flex flex-col sm:flex-row gap-4 w-full lg:w-auto">
                <!-- Search -->
                <div class="relative flex-1 min-w-[280px]">
                    <input 
                        type="text" 
                        id="search-input"
                        placeholder="Search products..." 
                        class="w-full bg-white border border-gray-200 focus:border-black rounded-3xl py-4 pl-12 pr-6 text-sm focus:outline-none shadow-sm transition-all">
                    <div class="absolute left-5 top-4 text-gray-400">
                        <i class="fa-solid fa-magnifying-glass"></i>
                    </div>
                </div>

                <!-- Category Filter -->
                <select id="category-filter" 
                        class="bg-white border border-gray-200 focus:border-black rounded-3xl px-6 py-4 text-sm focus:outline-none shadow-sm">
                    <option value="">All Categories</option>
                    <option value="electronics">Electronics</option>
                    <option value="fashion">Fashion</option>
                    <option value="shoes">Shoes</option>
                    <option value="accessories">Accessories</option>
                </select>

                <!-- Sort Filter -->
                <select id="sort-filter" 
                        class="bg-white border border-gray-200 focus:border-black rounded-3xl px-6 py-4 text-sm focus:outline-none shadow-sm">
                    <option value="default">Sort by: Newest</option>
                    <option value="price-low">Price: Low to High</option>
                    <option value="price-high">Price: High to Low</option>
                    <option value="name">Name A-Z</option>
                </select>
            </div>
        </div>
    </div>
<hr>
   <div class="bg-white">
  <div class="mx-auto max-w-7xl px-4 py-16 sm:px-6 lg:px-8">

    <div id="products" class="grid grid-cols-1 gap-x-6 gap-y-10 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4">
      <!-- Products will load here -->
    </div>

  </div>
</div>
<script>
function loadProducts() {
    fetch('/api/products')
        .then(res => res.json())
        .then(data => {
            let html = '';

            data.forEach(p => {
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
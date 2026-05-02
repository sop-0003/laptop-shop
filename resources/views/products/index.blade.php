@extends('layout.master')
@section('title','Dashboard - Products')
@section('content')
    <div class="chart-card">

        <!-- Header -->
        <div class="section-header">
            <h3 class="section-title">
                All Products <span>({{ $products->count() }} items)</span>
            </h3>

            <div class="controls">
                <!-- Search -->
                <form method="GET" action="{{ route('products.index') }}" class="d-flex align-items-center gap-2">
                    <input type="text" name="search" class="form-control" placeholder="Search laptops..."
                        value="{{ $search ?? '' }}" style="width: 280px; max-width: 100%;">



                    <button type="submit" class="btn btn-success px-4">
                        Search
                    </button>

                    @if(!empty($search) ||!empty($brand))
                    <a href="{{ route('products.index') }}" class="btn btn-outline-secondary">
                        Clear
                    </a>
                    @endif
                </form>

                <!-- Add Product -->
                <a href="{{ route('products.create') }}" class="btn-add">
                    + Add New Product
                </a>
            </div>
        </div>

        <!-- Products Table -->
        <div style="overflow-x: auto;">
            <table class="products-table">
                <thead>
                    <tr>
                        <th>Product</th>
                        <th style="text-align: center;">Brand</th>
                        <th style="text-align: center;">Price</th>
                        <th style="text-align: center;">Stock</th>
                        <th style="text-align: center;">Status</th>
                        <th style="text-align: center;">Actions</th>
                    </tr>
                </thead>
                <tbody id="productTable">
                    @forelse($products as $product)
                    <tr>
                        <td>
                            <a href="/products/{{$product->id}}" style="text-decoration: none; color: black;">
                                <div class="product-cell">
                                    <img src="{{ $product->image ? asset('image/'.$product->image) : asset('image/default.jpg') }}"
                                        alt="{{ $product->name }}" class="product-img">
                                    <div>
                                        <p style="font-weight: 600; margin: 0;">{{ $product->name }}</p>
                                        <small style="color: #64748b;">{{ $product->description }}</small>
                                    </div>
                                </div>
                            </a>
                        </td>
                        <td style="text-align: center; font-weight: 700;">{{ $product->brand }}</td>
                        <td style="text-align: center; font-weight: 700;">${{ number_format($product->price, 2) }}</td>
                        <td style="text-align: center; font-weight: 700;">{{ $product->stock }}</td>
                        <td class="text-center">
                            @if($product->stock >= 10)
                            <span class="status-badge in-stock">In Stock</span>
                            @elseif($product->stock > 0)
                            <span class="status-badge low-stock">Low Stock</span>
                            @else
                            <span class="status-badge out-of-stock">No Stock</span>
                            @endif
                        </td>
                        <td style="text-align: center;">
                            <a href="{{ route('products.edit', $product->id) }}" class="action-btn edit-btn">✏️</a>
                            <form action="{{ route('products.destroy', $product->id) }}" method="POST"
                                style="display:inline-block;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" onclick="return confirm('Delete this product?')"
                                    class="action-btn delete-btn">🗑️</button>
                            </form>
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="6" class="text-center py-4">
                            @if(!empty($search))
                            No products found for "<strong>{{ $search }}</strong>"
                            @else
                            No products available yet.
                            @endif
                        </td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
@endsection
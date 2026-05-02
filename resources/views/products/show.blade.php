@extends('layout.master')
@section('title', 'Product Details')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="card border-0 shadow-sm rounded-4 overflow-hidden">
                <div class="row g-0">
                    
                    <!-- Product Image Section -->
                    <div class="col-md-5 bg-white d-flex align-items-center justify-content-center p-4" style="border-right: 1px solid #eee;">
                        <img src="{{ $product->image ? asset('image/'.$product->image) : asset('images/default.jpg') }}" 
                             class="img-fluid rounded shadow-sm" 
                             style="max-height: 400px; object-fit: contain;" 
                             alt="{{ $product->name }}">
                    </div>

                    <!-- Product Details Section -->
                    <div class="col-md-7">
                        <div class="card-body p-5">
                            <div class="d-flex justify-content-between align-items-start mb-3">
                                <div>
                                    <span class="badge bg-primary mb-2">{{ $product->brand }}</span>
                                    <h1 class="fw-bold text-dark">{{ $product->name }}</h1>
                                    <p class="text-muted">Barcode: <strong>{{ $product->barcode }}</strong></p>
                                </div>
                                <div class="text-end">
                                    <h2 class="text-success fw-bold mb-0">${{ number_format($product->price, 2) }}</h2>
                                    @if($product->stock > 10)
                                        <span class="badge bg-success-subtle text-success mt-1">In Stock: {{ $product->stock }}</span>
                                    @else
                                        <span class="badge bg-danger-subtle text-danger mt-1">Low Stock: {{ $product->stock }}</span>
                                    @endif
                                </div>
                            </div>

                            <hr class="my-4">

                            <div class="mb-4">
                                <h5 class="fw-bold mb-3">Description</h5>
                                <p class="text-secondary lh-lg">
                                    {{ $product->description ?? 'No detailed description provided for this product.' }}
                                </p>
                            </div>

                            <div class="row mb-5">
                                <div class="col-6">
                                    <div class="p-3 border rounded bg-light">
                                        <small class="text-uppercase text-muted d-block fw-bold">SKU / Barcode</small>
                                        <span class="text-dark">{{ $product->barcode }}</span>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="p-3 border rounded bg-light">
                                        <small class="text-uppercase text-muted d-block fw-bold">Category</small>
                                        <span class="text-dark">Laptop / Hardware</span>
                                    </div>
                                </div>
                            </div>

                            <!-- Action Buttons -->
                            <div class="d-flex gap-2">
                                <a href="{{ route('products.edit', $product->id) }}" class="btn btn-primary px-4 py-2 shadow-sm">
                                    ✏️ Edit Product
                                </a>
                                
                                <form action="{{ route('products.destroy', $product->id) }}" method="POST" class="d-inline">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-outline-danger px-4 py-2" onclick="return confirm('Are you sure you want to delete this product?')">
                                        🗑️ Delete
                                    </button>
                                </form>

                                <a href="{{ route('products.index') }}" class="btn btn-link text-secondary ms-auto">
                                    ← Back to List
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
    /* Detail Specific Styling */
    .card {
        background-color: #fff;
        transition: transform 0.2s;
    }
    .breadcrumb-item a {
        text-decoration: none;
        color: #6c757d;
    }
    .badge {
        padding: 0.5em 1em;
        font-weight: 500;
    }
    .bg-success-subtle { background-color: #d1e7dd; }
    .bg-danger-subtle { background-color: #f8d7da; }
</style>
@endsection
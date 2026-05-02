@extends('layout.master')
@section('title','Edit Product')
@section('content')
        <form action="{{ route('products.update', $product->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div class="card border-0 shadow-lg rounded-4 overflow-hidden">
                <div class="row g-0">

                    <!-- LEFT: IMAGE -->
                    <div class="col-md-5 bg-light d-flex flex-column align-items-center justify-content-center p-4 border rounded-3"
                         onclick="document.getElementById('productImageUp').click()" style="cursor: pointer;">

                        <img id="previewImageUp" src="{{ asset('image/' . ($product->image ?? 'default.jpg')) }}"
                             class="img-fluid rounded-3 mb-3"
                             style="max-height: 250px; object-fit: contain; width: 100%;">

                        <p class="text-muted small mb-2">Click to change image</p>

                        <input type="file" name="image" id="productImageUp" accept="image/*" hidden>
                    </div>

                    <!-- RIGHT: FORM -->
                    <div class="col-md-7">
                        <div class="card-body p-4">

                            <!-- NAME -->
                            <div class="mb-3">
                                <label class="form-label fw-semibold">Product Name</label>
                                <input type="text" name="name" class="form-control" value="{{ $product->name }}" required>
                            </div>

                            <div class="mb-3">
                                <label class="form-label fw-semibold">Product Brand</label>
                                <input type="text" name="brand" class="form-control" value="{{ $product->brand }}" required>
                            </div>

                            <div class="mb-3">
                                <label class="form-label fw-semibold">Product Barcode</label>
                                <input type="text" name="barcode" class="form-control" value="{{ $product->barcode }}" required>
                            </div>

                            <div class="mb-3">
                                <label class="form-label fw-semibold">Product Stock</label>
                                <input type="text" name="stock" class="form-control" value="{{ $product->stock }}" required>
                            </div>

                            <!-- DESCRIPTION -->
                            <div class="mb-3">
                                <label class="form-label fw-semibold">Description</label>
                                <textarea name="description" class="form-control" rows="4">{{ $product->description }}</textarea>
                            </div>

                            <!-- PRICE -->
                            <div class="mb-3">
                                <label class="form-label fw-semibold">Price ($)</label>
                                <input type="number" step="0.01" name="price" class="form-control"
                                       value="{{ $product->price }}" required>
                            </div>

                            <!-- ACTION BUTTONS -->
                            <div class="d-flex gap-2 mt-4">
                                <button type="submit" class="btn btn-success px-4">
                                    💾 Update
                                </button>

                                <a href="{{ route('products.index') }}" class="btn btn-outline-secondary px-4">
                                    Cancel
                                </a>
                            </div>

                        </div>
                    </div>

                </div>
            </div>
        </form>

    <script>
        // Preview uploaded image
        const inputUp = document.getElementById('productImageUp');
        const previewUp = document.getElementById('previewImageUp');

        inputUp.addEventListener('change', function() {
            const file = this.files[0];
            if (file) {
                const reader = new FileReader();
                reader.onload = e => previewUp.src = e.target.result;
                reader.readAsDataURL(file);
            } else {
                previewUp.src = "{{ asset('image/default.jpg') }}";
            }
        });
    </script>
@endsection
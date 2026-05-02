@extends('layout.master')
@section('title','Create Product')
@section('content')
<div class="card border-0 shadow-lg rounded-4 overflow-hidden">
    <form action="/products" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row g-0">
            <!-- LEFT: IMAGE -->
            <div class="col-md-5 bg-light d-flex flex-column align-items-center justify-content-center p-4 border rounded-3"
                onclick="document.getElementById('productImageCreate').click()" style="cursor: pointer;">

                <img id="previewImageCreate" src="{{ asset('image/default.jpg') }}" class="img-fluid rounded-3 mb-3"
                    style="max-height: 250px; object-fit: contain; width: 100%;">
                <p class="text-muted small mb-2">Click here to upload image</p>

                <input type="file" name="image" id="productImageCreate" accept="image/*" hidden>
            </div>

            <!-- RIGHT: FORM -->
            <div class="col-md-7">
                <div class="card-body p-4">
                    <!-- Name -->
                    <div class="mb-3">
                        <label class="form-label fw-semibold">Product Name</label>
                        <input type="text" name="name" class="form-control" placeholder="Product name" required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label fw-semibold">Product brand</label>
                        <input type="text" name="brand" class="form-control" placeholder="Product brand" required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label fw-semibold">Product barcode</label>
                        <input type="text" name="barcode" class="form-control" placeholder="Product barcode" required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label fw-semibold">Product stock</label>
                        <input type="text" name="stock" class="form-control" placeholder="Product stock" required>
                    </div>

                    <!-- Description -->
                    <div class="mb-3">
                        <label class="form-label fw-semibold">Description</label>
                        <textarea name="description" class="form-control" rows="4"
                            placeholder="Product description"></textarea>
                    </div>

                    <!-- Price -->
                    <div class="mb-3">
                        <label class="form-label fw-semibold">Price ($)</label>
                        <input type="number" step="0.01" name="price" class="form-control" placeholder="0.00" required>
                    </div>

                    <!-- Action Buttons -->
                    <div class="d-flex gap-2 mt-4">
                        <button type="submit" class="btn btn-success px-5">
                            ✅ Create Product
                        </button>
                        <a href="{{ route('products.index') }}" class="btn btn-outline-secondary px-5">
                            Cancel
                        </a>
                    </div>

                </div>
            </div>

        </div>
    </form>
</div>

<script>
// Preview uploaded image
const input = document.getElementById('productImageCreate');
const preview = document.getElementById('previewImageCreate');

input.addEventListener('change', function() {
    const file = this.files[0];
    if (file) {
        const reader = new FileReader();
        reader.onload = e => preview.src = e.target.result;
        reader.readAsDataURL(file);
    } else {
        preview.src = "{{ asset('image/default.jpg') }}";
    }
});
</script>
@endsection
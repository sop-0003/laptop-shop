@extends('layout.master')

@section('title', 'Orders Dashboard')

@section('content')


<div class="card border-0 shadow-sm">
    <!-- Page Header -->
    <div class="d-flex justify-content-between align-items-center mb-4">
        <div>
            <h1 class="h3 fw-bold">📊 Orders Dashboard</h1>
            <p class="text-muted mb-0">Manage and track all customer orders</p>
        </div>
        <div>
            <span class="badge bg-primary fs-6 px-3 py-2">
                Total Orders: <strong>{{ $orders->count() }}</strong>
            </span>
        </div>
    </div>
    <div class="card-body p-0">

        <div class="table-responsive">
            <table class="table table-hover align-middle mb-0">
                <thead class="table-light">
                    <tr>
                        <th class="ps-4">Order ID</th>
                        <th>Image</th>
                        <th>Customer Name</th>
                        <th>Phone</th>
                        <th class="text-end">Total Amount</th>
                        <th>Date & Time</th>
                        <th class="text-center">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($orders as $order)
                    @php
                    $items = json_decode($order->items, true);
                    $firstItem = $items[0] ?? null;
                    @endphp

                    <tr>
                        <td class="ps-4 fw-medium">#{{ str_pad($order->id, 5, '0', STR_PAD_LEFT) }}</td>

                        <!-- Image -->
                        <td>
                            @if($firstItem && isset($firstItem['image']))
                            <img src="{{ asset('image/' . $firstItem['image']) }}" class="order-img rounded border"
                                alt="{{ $firstItem['name'] ?? 'Product' }}">
                            @else
                            <div class="bg-light rounded d-flex align-items-center justify-content-center"
                                style="width: 55px; height: 55px;">
                                <i class="fa-solid fa-image text-muted"></i>
                            </div>
                            @endif
                        </td>

                        <td>
                            <strong>{{ $order->name }}</strong>
                        </td>
                        <td>{{ $order->phone }}</td>
                        <td class="text-end fw-semibold">
                            ${{ number_format($order->total, 2) }}
                        </td>
                        <td>
                            <small class="text-muted">
                                {{ $order->created_at->format('d M Y') }}
                            </small><br>
                            <small>{{ $order->created_at->format('H:i') }}</small>
                        </td>

                        <td class="text-center">
                            <a href="{{ route('invoice.show', $order->id) }}" class="btn btn-primary btn-sm px-4">
                                <i class="fa-solid fa-eye me-1"></i> View Invoice
                            </a>
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="7" class="text-center py-5 text-muted">
                            No orders found yet.
                        </td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>


@endsection
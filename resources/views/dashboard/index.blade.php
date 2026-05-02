@extends('layout.master')

@section('title', 'Dashboard')

@section('content')

    <!-- Main Content -->
    

        <!-- Stats Cards - Now Dynamic -->
        <div class="stats">
            <div class="card">
                <h3>Total Revenue</h3>
                <div class="value">${{ number_format($totalRevenue ?? 0, 2) }}</div>
                <div class="change positive">↑ 12.5% from last month</div>
            </div>
            <div class="card">
                <h3>Total Orders</h3>
                <div class="value">{{ $totalOrders ?? 0 }}</div>
                <div class="change positive">↑ 8.2% from last month</div>
            </div>
            <div class="card">
                <h3>Active Customers</h3>
                <div class="value">{{ $activeCustomers ?? 0 }}</div>
                <div class="change negative">↓ 2.1% from last month</div>
            </div>
            <div class="card">
                <h3>Conversion Rate</h3>
                <div class="value">{{ number_format($conversionRate ?? 0, 1) }}%</div>
                <div class="change positive">↑ 0.6% from last month</div>
            </div>
        </div>

        <div class="content-grid">

            <!-- ✅ Sales  (REPLACED PLACEHOLDER ONLY) -->
            <div class="chart-card">
                <h3>Sales Overview (Last 30 Days)</h3>

                <canvas id="salesChart" height="100"></canvas>

            </div>

            <!-- Recent Orders - Now Dynamic -->
            <div class="chart-card">
                <h3>Recent Orders</h3>
                <table>
                    <thead>
                        <tr>
                            <th>Order ID</th>
                            <th>Customer</th>
                            <th>Amount</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($recentOrders ?? [] as $order)
                            <tr>
                                <td>#{{ str_pad($order->id, 5, '0', STR_PAD_LEFT) }}</td>
                                <td>{{ $order->name }}</td>
                                <td>${{ number_format($order->total, 2) }}</td>
                                <td>
                                    <span class="status delivered">Delivered</span>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="4" class="text-center">No recent orders yet</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>

        </div>


    
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

   
    <script>
        const salesData = @json($salesData ?? []);

        const labels = salesData.map(item => {
            return new Date(item.date).toLocaleDateString();
        });

        const totals = salesData.map(item => item.total);

        const ctx = document.getElementById('salesChart').getContext('2d');

        new Chart(ctx, {
            type: 'line',
            data: {
                labels: labels,
                datasets: [{
                    label: 'Sales ($)',
                    data: totals,
                    borderColor: '#4CAF50',
                    backgroundColor: 'rgba(76, 175, 80, 0.2)',
                    fill: true,
                    tension: 0.4,
                    pointRadius: 4,
                    pointBackgroundColor: '#4CAF50'
                }]
            },
            options: {
                responsive: true,
                plugins: {
                    legend: {
                        display: true
                    }
                },
                scales: {
                    x: {
                        title: {
                            display: true,
                            text: 'Date'
                        }
                    },
                    y: {
                        title: {
                            display: true,
                            text: 'Revenue ($)'
                        },
                        beginAtZero: true
                    }
                }
            }
        });
    </script>

@endsection
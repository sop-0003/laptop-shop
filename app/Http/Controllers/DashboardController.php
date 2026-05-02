<?php

namespace App\Http\Controllers;

use App\Models\Order;

class DashboardController extends Controller
{
    public function dashboard()
    {
        $user = auth()->user();

        // Stats
        $totalRevenue    = Order::sum('total') ?? 0;
        $totalOrders     = Order::count();
        $activeCustomers = Order::select('phone')->distinct()->count();
        $recentOrders    = Order::latest()->take(4)->get();

        $conversionRate  = $totalOrders > 0 
            ? round(($totalOrders / 800) * 100, 1) 
            : 0;

        // ✅ Sales Data (Last 30 Days)
        $salesData = Order::selectRaw('DATE(created_at) as date, SUM(total) as total')
            ->where('created_at', '>=', now()->subDays(30))
            ->groupBy('date')
            ->orderBy('date')
            ->get();

        return view('dashboard.index', compact(
            'user',
            'totalRevenue',
            'totalOrders',
            'activeCustomers',
            'conversionRate',
            'recentOrders',
            'salesData'
        ));
    }
}

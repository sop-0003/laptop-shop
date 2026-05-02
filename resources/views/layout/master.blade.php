<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link href="{{asset('https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css')}}" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('style/dashboard.css')}}">
    <link rel="stylesheet" href="{{asset('style/product.css')}}">
    <link rel="stylesheet" href="{{asset('style/pro-model.css')}}">
</head>

<body>
    <div class="dashboard">

        <!-- Sidebar -->
        <aside class="sidebar">
            <div class="logo">LaptopHub</div>
            <ul class="nav-menu">
                <li class="active"><a href="{{Route('dashboard')}}">📊 Dashboard</a></li>
                <li><a href="{{Route('products.index')}}">📦 Products</a></li>
                <li><a href="{{Route('dashboard.order')}}">🛒 Orders</a></li>
                <li>
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button type="submit" class="border-0 bg-transparent text-white">
                            🚪 Logout
                        </button>
                    </form>
                </li>
            </ul>
        </aside>
        <main class="main-content col-6">

            <div class="header">
                <h1>Dashboard Overview</h1>
                <div class="user-info">
                    <span>Welcome back, <strong>{{ $user->name ?? auth()->user()->name }}</strong></span>
                    <img src="https://i.pravatar.cc/150?img=68" alt="Admin">
                </div>
            </div>
            @yield('content')
        </main>
    </div>

    <script src="{{asset('js/model.js')}}"></script>
    <script src="{{asset('js/editimg.js')}}"></script>
</body>

</html>
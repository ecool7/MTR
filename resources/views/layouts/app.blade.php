<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title', 'Microwave Technology and Research')</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <nav class="navbar">
        <div class="container">
            <div class="navbar-content">
                <a href="{{ route('home') }}" class="logo-link">
                    <img 
                        src="{{ asset('images/logo.png') }}" 
                        alt="MTR Logo" 
                        class="logo"
                        onerror="if (!this.dataset.fallback) { this.dataset.fallback = 'true'; this.src='{{ asset('images/logo.jpg') }}'; }"
                    >
                </a>
                <div class="nav-links">
                    <a href="{{ route('home') }}" class="nav-link {{ request()->routeIs('home') ? 'active' : '' }}">Home</a>
                    <a href="{{ route('about') }}" class="nav-link {{ request()->routeIs('about') ? 'active' : '' }}">About Us</a>
                    <a href="{{ route('products') }}" class="nav-link {{ request()->routeIs('products') ? 'active' : '' }}">Products</a>
                    <a href="{{ route('contacts') }}" class="nav-link {{ request()->routeIs('contacts*') ? 'active' : '' }}">Contacts</a>
                </div>
            </div>
        </div>
    </nav>

    <main class="main-content">
        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        @if(session('errors') && session('errors')->any())
            <div class="alert alert-error">
                <ul>
                    @foreach(session('errors')->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        @yield('content')
    </main>

    <footer class="footer">
        <div class="container">
            <p>&copy; {{ date('Y') }} Microwave Technology and Research. All rights reserved.</p>
        </div>
    </footer>
</body>
</html>


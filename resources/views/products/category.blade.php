@extends('layouts.app')

@section('title', $categoryName . ' - Microwave Technology and Research')

@section('content')
<div class="page-header">
    <div class="container">
        <h1>{{ $categoryName }}</h1>
        <p class="page-subtitle">Explore our range of {{ strtolower($categoryName) }}</p>
    </div>
</div>

<div class="container">
    <div class="breadcrumbs">
        <a href="{{ route('home') }}">Home</a> / 
        <a href="{{ route('products') }}">Products</a> / 
        <span>{{ $categoryName }}</span>
    </div>

    <section class="devices-section">
        <div class="devices-grid">
            @foreach($devices as $device)
            <a href="{{ route('products.device', ['category' => $categorySlug, 'device' => $device['id']]) }}" class="device-card-link">
                <div class="device-card">
                    <div class="device-image-wrapper">
                        <img src="{{ $device['image'] }}" alt="{{ $device['name'] }}" class="device-image" onerror="this.onerror=null; this.src='data:image/svg+xml,%3Csvg xmlns=\'http://www.w3.org/2000/svg\' width=\'200\' height=\'200\'%3E%3Crect width=\'200\' height=\'200\' fill=\'%23F5F5F5\'/%3E%3Ctext x=\'50%25\' y=\'50%25\' text-anchor=\'middle\' dy=\'.3em\' fill=\'%23999\' font-family=\'sans-serif\' font-size=\'14\'%3ENo Image%3C/text%3E%3C/svg%3E';">
                    </div>
                    <h3 class="device-name">{{ $device['name'] }}</h3>
                </div>
            </a>
            @endforeach
        </div>
    </section>

    <div class="back-link">
        <a href="{{ route('products') }}" class="btn-back">← Back to Products</a>
    </div>
</div>
@endsection







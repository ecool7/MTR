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
                        <img src="{{ $device['image'] }}" alt="{{ $device['name'] }}" class="device-image" onerror="this.style.display='none'">
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




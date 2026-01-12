@extends('layouts.app')

@section('title', $device['name'] . ' - ' . $categoryName . ' - Microwave Technology and Research')

@section('content')
<div class="page-header">
    <div class="container">
        <h1>{{ $categoryName }}</h1>
        <p class="page-subtitle">{{ $device['name'] }}</p>
    </div>
</div>

<div class="container">
    <div class="breadcrumbs">
        <a href="{{ route('home') }}">Home</a> / 
        <a href="{{ route('products') }}">Products</a> / 
        @php
            $categoryRoutes = [
                'integrated-circuits' => 'products.integrated-circuits',
                'power-amplifiers' => 'products.power-amplifiers',
                'pulse-interference-generators' => 'products.pulse-interference-generators',
                'circulators' => 'products.circulators',
                'quartz-resonators' => 'products.quartz-resonators',
                'quartz-generators' => 'products.quartz-generators',
            ];
            $categoryRoute = $categoryRoutes[$categorySlug] ?? 'products';
        @endphp
        <a href="{{ route($categoryRoute) }}">{{ $categoryName }}</a> / 
        <span>{{ $device['name'] }}</span>
    </div>

    <section class="device-detail-section">
        <div class="device-detail-wrapper">
            <div class="device-image-section">
                <div class="device-main-image">
                    <img src="{{ $device['image'] }}" alt="{{ $device['name'] }}" class="device-detail-image" onerror="this.style.display='none'">
                </div>
            </div>

            <div class="device-info-section">
                <h2 class="device-detail-title">{{ $device['title'] }}</h2>
                <p class="device-detail-description">{{ $device['description'] }}</p>

                <div class="device-specifications">
                    <h3>Specifications:</h3>
                    <table class="specs-table">
                        @foreach($device['specifications'] as $key => $value)
                        <tr>
                            <td class="spec-label">{{ $key }}:</td>
                            <td class="spec-value">{{ $value }}</td>
                        </tr>
                        @endforeach
                    </table>
                </div>

                <div class="device-actions">
                    <a href="{{ route('contacts') }}" class="btn-contact">Request Information</a>
                </div>
            </div>
        </div>
    </section>

    <div class="back-link">
        @php
            $categoryRoutes = [
                'integrated-circuits' => 'products.integrated-circuits',
                'power-amplifiers' => 'products.power-amplifiers',
                'pulse-interference-generators' => 'products.pulse-interference-generators',
                'circulators' => 'products.circulators',
                'quartz-resonators' => 'products.quartz-resonators',
                'quartz-generators' => 'products.quartz-generators',
            ];
            $categoryRoute = $categoryRoutes[$categorySlug] ?? 'products';
        @endphp
        <a href="{{ route($categoryRoute) }}" class="btn-back">← Back to {{ $categoryName }}</a>
    </div>
</div>
@endsection


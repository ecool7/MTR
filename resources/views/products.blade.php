@extends('layouts.app')

@section('title', 'Products - Microwave Technology and Research')

@section('content')
<div class="page-header">
    <div class="container">
        <h1>Products</h1>
    </div>
</div>

<div class="container">
    <section class="products-section">
        <p class="products-intro">
            Explore our comprehensive range of microwave components and systems. 
            Products are organized by category below. Specific device details will be available soon.
        </p>

        <div class="categories-grid">
            @foreach($categories as $category)
            <div class="category-card">
                <h3 class="category-name">{{ $category['name'] }}</h3>
                <p class="category-description">{{ $category['description'] }}</p>
                @php
                    $routeMap = [
                        'integrated-circuits' => 'products.integrated-circuits',
                        'power-amplifiers' => 'products.power-amplifiers',
                        'pulse-interference-generators' => 'products.pulse-interference-generators',
                        'circulators' => 'products.circulators',
                        'quartz-resonators' => 'products.quartz-resonators',
                        'quartz-generators' => 'products.quartz-generators',
                    ];
                    $routeName = $routeMap[$category['slug']] ?? null;
                @endphp
                @if($routeName)
                    <a href="{{ route($routeName) }}" class="category-button">{{ $category['name'] }}</a>
                @else
                    <div class="category-badge">{{ $category['name'] }}</div>
                @endif
            </div>
            @endforeach
        </div>

        <div class="coming-soon">
            <p>Detailed product specifications and individual device listings will be available soon.</p>
        </div>
    </section>
</div>
@endsection


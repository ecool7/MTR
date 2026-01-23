@extends('layouts.app')

@section('title', 'Home - Microwave Technology and Research')

@section('content')
<div class="hero-section">
    <div class="container">
        <h1 class="hero-title">Microwave Technology and Research</h1>
        <p class="hero-subtitle">Leading manufacturer of microwave components and systems</p>
    </div>
</div>

<div class="container">
    <section class="news-section">
        <h2 class="section-title">Latest News</h2>
        <div class="news-grid">
            @foreach($news as $item)
            <article class="news-card">
                <div class="news-date">{{ date('F d, Y', strtotime($item['date'])) }}</div>
                <h3 class="news-title">{{ $item['title'] }}</h3>
                <p class="news-excerpt">{{ $item['excerpt'] }}</p>
            </article>
            @endforeach
        </div>
    </section>

    <section class="features-section">
        <h2 class="section-title">Our Expertise</h2>
        <div class="features-grid">
            <div class="feature-card">
                <h3>Integrated Circuits</h3>
                <p>High-performance microwave integrated circuits</p>
            </div>
            <div class="feature-card">
                <h3>Power Amplifiers</h3>
                <p>Block and modular type amplifiers</p>
            </div>
            <div class="feature-card">
                <h3>Quartz Components</h3>
                <p>Precision resonators and generators</p>
            </div>
            <div class="feature-card">
                <h3>Testing Equipment</h3>
                <p>Pulse interference generators and circulators</p>
            </div>
        </div>
    </section>
</div>
@endsection







@extends('layouts.app')

@section('title', 'Contacts - Microwave Technology and Research')

@section('content')
<div class="page-header">
    <div class="container">
        <h1>Contacts</h1>
    </div>
</div>

<div class="container">
    <div class="contacts-wrapper">
        <div class="contact-info">
            <h2>Get in Touch</h2>
            <p>We'd love to hear from you. Send us a message and we'll respond as soon as possible.</p>
            
            <div class="contact-details">
                <div class="contact-item">
                    <strong>Email:</strong>
                    <p>info@microwavetech.com</p>
                </div>
                <div class="contact-item">
                    <strong>Address:</strong>
                    <p>715 Kangtai Group Building, No. 222 Kefa Road,<br>Science & Technology Park, Nanshan District,<br>Shenzhen</p>
                </div>
            </div>
        </div>

        <div class="contact-form-wrapper">
            <h2>Send us a Message</h2>
            <form action="{{ route('contacts.submit') }}" method="POST" class="contact-form">
                @csrf
                
                <div class="form-group">
                    <label for="name">Name *</label>
                    <input type="text" id="name" name="name" value="{{ old('name') }}" required>
                </div>

                <div class="form-group">
                    <label for="email">Email *</label>
                    <input type="email" id="email" name="email" value="{{ old('email') }}" required>
                </div>

                <div class="form-group">
                    <label for="subject">Subject *</label>
                    <input type="text" id="subject" name="subject" value="{{ old('subject') }}" required>
                </div>

                <div class="form-group">
                    <label for="message">Message *</label>
                    <textarea id="message" name="message" rows="6" required>{{ old('message') }}</textarea>
                </div>

                <button type="submit" class="btn-submit">Send Message</button>
            </form>
        </div>
    </div>
</div>
@endsection







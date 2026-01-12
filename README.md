# Microwave Technology and Research Website

A Laravel 10 website for Microwave Technology and Research, a manufacturer of microwave components and systems.

## Features

- **Home Page**: Features a hero section and news section
- **About Us**: Company information and product overview
- **Products**: Product categories (Integrated Circuits, Power Amplifiers, Pulse Interference Generators, Circulators, Quartz Resonators, Quartz Generators)
- **Contacts**: Contact form and company information

## Requirements

- PHP 8.2 or higher
- Composer
- Laravel 10

## Installation

1. Install dependencies:
```bash
composer install
```

2. Copy environment file:
```bash
cp .env.example .env
```

3. Generate application key:
```bash
php artisan key:generate
```

4. Configure your database in `.env` file

5. Run migrations (if needed):
```bash
php artisan migrate
```

6. Start the development server:
```bash
php artisan serve
```

Visit `http://localhost:8000` in your browser.

## Color Scheme

- Primary Purple: #6B5B95
- Dark Purple: #5A4A7F
- Light Purple: #8B7BAF
- Muted Purple: #9B8DB5
- White: #FFFFFF

## Structure

- Controllers: `app/Http/Controllers/`
- Views: `resources/views/`
- Routes: `routes/web.php`
- CSS: `public/css/app.css`


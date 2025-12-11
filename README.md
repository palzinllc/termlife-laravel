# TermLife Laravel Application

A Laravel 11 application built with Livewire 3.x, Alpine JS, Tailwind CSS, and Laravel Passport for authentication.

## Stack

- **Laravel 11** - PHP Framework
- **Livewire 3.x** - Full-stack framework for dynamic interfaces
- **Alpine JS** - Lightweight JavaScript framework
- **Tailwind CSS** - Utility-first CSS framework
- **Laravel Passport** - OAuth2 authentication

## Features

- Admin-only authentication (Registration disabled)
- Modern, responsive UI with Tailwind CSS
- Interactive components with Livewire and Alpine JS
- Secure API authentication with Laravel Passport
- SQLite database for easy development

## Installation

1. Clone the repository:
```bash
git clone https://github.com/palzinllc/termlife-laravel.git
cd termlife-laravel
```

2. Install PHP dependencies:
```bash
composer install
```

3. Install Node dependencies:
```bash
npm install
```

4. Copy the environment file:
```bash
cp .env.example .env
```

5. Generate application key:
```bash
php artisan key:generate
```

6. Create the SQLite database:
```bash
touch database/database.sqlite
```

7. Run migrations and seed the database:
```bash
php artisan migrate --seed
```

8. Install Passport:
```bash
php artisan passport:install
```

9. Build frontend assets:
```bash
npm run build
```

## Development

To run the development server:

```bash
# Start Laravel development server
php artisan serve

# In a separate terminal, start Vite dev server
npm run dev
```

Access the application at `http://localhost:8000`

## Default Admin Credentials

- Email: `admin@example.com`
- Password: `password`

**Important:** Change these credentials in production!

## Key Directories

- `app/Http/Controllers/Auth/` - Authentication controllers
- `app/Livewire/` - Livewire components
- `resources/views/` - Blade templates
- `resources/views/livewire/` - Livewire component views
- `resources/css/` - CSS files (Tailwind)
- `resources/js/` - JavaScript files (Alpine JS)

## Authentication

Registration is disabled by design. Only administrators can create new user accounts through the database or seeders.

## License

This project is open-sourced software licensed under the MIT license.

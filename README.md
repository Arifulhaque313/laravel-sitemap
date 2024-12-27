# Laravel Sitemap

A Laravel-based project that dynamically generates sitemaps for your website.

## Installation Guide

### 1. Clone the Repository
```bash
git clone https://github.com/Arifulhaque313/laravel-sitemap.git
```

### 2. Navigate to Project Directory
```bash
cd laravel-sitemap
```

### 3. Install Dependencies
```bash
composer install
```

### 4. Set Up Environment File
```bash
cp .env.example .env
```

### 5. Generate Application Key
```bash
php artisan key:generate
```

### 6. Run Database Migrations and Seed
```bash
php artisan migrate:fresh --seed
```

This will:
- Drop all tables from the database
- Re-run all migrations
- Seed the database with sample data

### 7. Serve the Application
```bash
php artisan serve
```
Access the application at http://127.0.0.1:8000

### 8. Accessing the Sitemap
Navigate to http://127.0.0.1:8000/sitemap.xml

## Troubleshooting
- Verify your .env file configuration and database credentials
- Ensure all required PHP extensions are installed

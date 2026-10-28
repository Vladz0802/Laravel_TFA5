# Laravel POS Foundations (IT0049 - TFA5)

A four-page POS application built with Laravel: Home (`/`), About (`/about`), Customer Accounts (`/customers`), and User Accounts (`/users`). The account pages read from a static PHP array defined in their controller.

## Requirements

- PHP 8.3 or newer (XAMPP for Windows includes PHP)
- Composer (https://getcomposer.org)
- Git

## Setup

1. Clone the repository: `git clone <your-repo-url>` then `cd <project-folder>`
2. Install dependencies: `composer install`
3. Copy the environment file: `copy .env.example .env` (Windows) or `cp .env.example .env`
4. Generate the app key: `php artisan key:generate`
5. Start the development server: `php artisan serve`
6. Open http://127.0.0.1:8000 in your browser.

## Project structure

- `routes/web.php` defines the four routes.
- `app/Http/Controllers/PageController.php` handles the home and about pages.
- `app/Http/Controllers/CustomerController.php` and `UserController.php` each hold a static array of 5 records.
- `resources/views/` contains the Blade layout and the four page views.

## Hosted version

Add your live link here: <your-hosted-url>

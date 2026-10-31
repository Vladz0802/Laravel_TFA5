# Laravel POS with Eloquent (IT0049 - TFA6)

The TFA5 POS app rebuilt with a real database. It has four pages: Home (`/`), About (`/about`), Customer Accounts (`/customers`) and User Accounts (`/users`). The account pages now read from the database through Eloquent models instead of static arrays.

## Requirements

PHP 8.2 or newer, Composer, and Git. The default database is SQLite, so no MySQL setup is needed.

## Setup

1. Clone the repository: `git clone <your-repo-url>` then `cd <project-folder>`
2. Install packages: `composer install`
3. Create the environment file: `copy .env.example .env` on Windows, or `cp .env.example .env`
4. Generate the app key: `php artisan key:generate`
5. Create the tables and sample data: `php artisan migrate:fresh --seed`
6. Start the server: `php artisan serve`
7. Visit http://127.0.0.1:8000

If it asks to create the SQLite database file, answer yes.

## Database

- `customers`: id, full_name, email, phone, timestamps
- `users`: id, username (unique), full_name, timestamps

Migrations are in `database/migrations`. The seeders in `database/seeders` insert 5 customers and 5 users.

## Project structure

Routes are in `routes/web.php`. Models (`Customer`, `User`) are in `app/Models`. Controllers (`PageController`, `CustomerController`, `UserController`) are in `app/Http/Controllers`. Blade views are in `resources/views`.

## Hosted version

Add your live link here: <your-hosted-url>

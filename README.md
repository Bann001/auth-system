# Laravel Authentication System with Role-Based Access Control

A robust authentication system built with Laravel, featuring role-based access control (RBAC) for managing user permissions and access levels.

## Features

- User Authentication (Login/Register)
- Role-Based Access Control (Admin/User roles)
- Protected Routes
- User Profile Management
- Password Reset Functionality
- Email Verification

## Requirements

- PHP >= 8.1
- Composer
- Node.js & NPM
- MySQL/PostgreSQL

## Installation

1. Clone the repository:
```bash
git clone https://github.com/Bann001/auth-system.git
cd auth-system
```

2. Install PHP dependencies:
```bash
composer install
```

3. Install NPM dependencies:
```bash
npm install
```

4. Create and configure .env file:
```bash
cp .env.example .env
php artisan key:generate
```

5. Configure your database in .env file and run migrations:
```bash
php artisan migrate
```

6. Start the development server:
```bash
php artisan serve
```

7. In a separate terminal, compile assets:
```bash
npm run dev
```

## Usage

- Visit `/register` to create a new account
- Visit `/login` to log in to an existing account
- Admin dashboard is accessible at `/admin/dashboard`
- User dashboard is accessible at `/user/dashboard`

## Security

This project implements several security features:
- CSRF Protection
- XSS Prevention
- SQL Injection Prevention
- Password Hashing
- Rate Limiting

## License

This project is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).

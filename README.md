<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

# Laravel ERP Lite

A lightweight ERP-style backend application built with **Laravel 12**.  
This project is designed as a **technical showcase** to demonstrate clean architecture,
modular design, and backend best practices commonly used in internal business systems.

> This is **not** a full production ERP.  
> The focus is on structure, maintainability, and architectural clarity.

---

## 🎯 Purpose

This project exists to demonstrate:

- Backend architecture suitable for **ERP / internal systems**
- Clear separation of concerns using **Service & Repository patterns**
- Modular, scalable code organization
- Practical Laravel 12 usage beyond basic CRUD examples

It reflects real-world backend experience rather than tutorial-style code.

---

## 🧱 Architecture Overview

The application follows a **Module-based architecture** under `app/Modules`.

Each business domain is isolated into its own module.


### Architectural Principles

- **Controllers**
    - Handle HTTP requests only
    - No business logic

- **Services**
    - Contain business rules and use cases
    - Orchestrate application behavior

- **Repositories**
    - Abstract data access
    - Decouple business logic from Eloquent

- **Models**
    - Eloquent models only
    - No business logic inside models

---

## 🔗 Dependency Injection

All repositories are bound via Laravel’s **Service Container**.

A custom service provider is used:

- `App\Providers\ERPServiceProvider`
- Registered using **Laravel 12 bootstrap configuration** (`bootstrap/app.php`)

This approach provides:

- Loose coupling
- Replaceable data layers
- Test-friendly architecture
- Clean dependency management

---

## 🔐 Authentication

Authentication is implemented using **Laravel Breeze (Blade)**.

Includes:

- Login & registration
- Session-based authentication
- Route protection via middleware

The structure is ready for:
- Roles
- Permissions
- Policy-based authorization

---

## 🛠 Tech Stack

- PHP 8.2+
- Laravel 12
- MySQL
- Blade
- Laravel Breeze
- Pest (testing setup)

---

## 🚀 Local Installation

```bash
composer install
cp .env.example .env
php artisan key:generate
php artisan migrate

npm install
npm run dev

php artisan serve
```


📌 Notes

UI is intentionally minimal
Focus is on backend structure and code quality
Designed for local development and technical review
Suitable as a foundation for larger ERP-style systems

📄 License

This project is provided for educational and technical evaluation purposes.


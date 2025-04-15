# Laravel Role-Based Access Control System

![Laravel](https://img.shields.io/badge/Laravel-FF2D20?style=for-the-badge&logo=laravel&logoColor=white)
![PHP](https://img.shields.io/badge/PHP-777BB4?style=for-the-badge&logo=php&logoColor=white)

A comprehensive role-based access control system for Laravel applications with Admin and Owner roles, PDF/Excel export capabilities, and structured view organization.

## ✨ Features

- **Role-based Access Control** with custom middleware
- **PDF Export** using Laravel-DOMPDF
- **Excel Export** using Maatwebsite/Excel
- **Separate Admin/Owner Interfaces**
- **Structured View Organization**

## 🚀 Installation

### 1. Install Required Packages

```bash
composer require maatwebsite/excel barryvdh/laravel-dompdf
```

### 2. Setup Project Structure

```bash
# Create export class
mkdir -p app/Exports/OrdersExport.php

# Create PDF view
touch resources/views/admin/orders-pdf.blade.php
```

### 3. Create Middleware

```bash
php artisan make:middleware CheckRole
```

Then add the following code to `app/Http/Middleware/CheckRole.php`:

```php
<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CheckRole
{
    public function handle(Request $request, Closure $next, ...$roles): Response
    {
        // Check if user role is in allowed list
        if (!in_array($request->user()->role, $roles)) {
            abort(403, 'Akses ditolak! Role tidak sesuai.');
        }
        
        return $next($request);
    }
}
```

Register the middleware in `bootstrap/app.php`:

```php
->withMiddleware(function (Middleware $middleware) {
    $middleware->alias([
        'role' => \App\Http\Middleware\CheckRole::class,
    ]);
})
```

### 4. Create Views Structure

#### Admin Views:
```bash
mkdir -p resources/views/Admin
touch resources/views/Admin/{dashboard,edit,input,history}.blade.php
```

#### Owner Views:
```bash
mkdir -p resources/views/Owner
touch resources/views/Owner/{create-admin,dashboard,edit-admin,manage-admin}.blade.php
```

## 🛠 Usage

Protect routes using the role middleware:

```php
Route::middleware(['role:admin'])->group(function () {
    // Admin-only routes
});

Route::middleware(['role:owner'])->group(function () {
    // Owner-only routes
});
```

## 📂 Directory Structure

```
resources/views/
├── Admin/
│   ├── dashboard.blade.php
│   ├── edit.blade.php
│   ├── input.blade.php
│   └── history.blade.php
└── Owner/
    ├── create-admin.blade.php
    ├── dashboard.blade.php
    ├── edit-admin.blade.php
    └── manage-admin.blade.php
```

## 📄 License

MIT

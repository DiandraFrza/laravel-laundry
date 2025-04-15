composer require maatwebsite/excel barryvdh/laravel-dompdf
mkdir -p app/Exports/OrdersExport.php
touch resources/views/admin/orders-pdf.blade.php

> MIDLEWARE:
php artisan make:middleware CheckRole

file:
<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CheckRole
{
    public function handle(Request $request, Closure $next, ...$roles): Response
    {
        // Cek apakah role user ada di list yang diizinkan
        if (!in_array($request->user()->role, $roles)) {
            abort(403, 'Akses ditolak! Role tidak sesuai.');
        }
        
        return $next($request);
    }
}


>boostrap/app.php
->withMiddleware(function (Middleware $middleware) {
        $middleware->alias([
            'role' => \App\Http\Middleware\CheckRole::class,
        ]);
    })

>Untuk membuat views admin, jalankan perintah ini:
mkdir -p resources/views/Admin
touch resources/views/Admin/dashboard.blade.php
touch resources/views/Admin/edit.blade.php
touch resources/views/Admin/input.blade.php
touch resources/views/Admin/history.blade.php

>Untuk membuat views Owner, jalankan perintah ini:
mkdir -p resources/views/Owner
touch resources/views/Owner/create-admin.blade.php
touch resources/views/Owner/dashboarad.blade.php
touch resources/views/Owner/edit-admin.blade.php
touch resources/views/Owner/manage-admin.blade.php

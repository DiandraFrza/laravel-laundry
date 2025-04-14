<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

// Landing Page
Route::get('/', [\App\Http\Controllers\MemberController::class, 'index'])->name('home');
Route::get('/search/pesanan', [\App\Http\Controllers\MemberController::class, 'searchNoHp'])->name('search.noHp');
Route::post('/search/pesanan',[\App\Http\Controllers\MemberController::class,'searchNoHp'])->name('search.noHp');

// Views Admin
Route::middleware(['auth', 'role:admin'])->group(function () {
    Route::get('/admin/dashboard', [\App\Http\Controllers\AdminController::class, 'dashboard'])->name('admin.dashboard');
    Route::post('/admin/complete-order/{id}', [\App\Http\Controllers\AdminController::class, 'completeOrder'])->name('admin.complete');
    Route::get('/admin/input', [\App\Http\Controllers\AdminController::class, 'create'])->name('admin.input');
    Route::post('/admin/input/data',[\App\Http\Controllers\AdminController::class, 'store'])->name('admin.store');
    Route::get('/admin/history', [\App\Http\Controllers\AdminController::class, 'show'])->name('admin.history');
    Route::get('/admin/edit/data/{id}',[\App\Http\Controllers\AdminController::class, 'edit'])->name('admin.edit');
    Route::put('/admin/input/data/{id}',[\App\Http\Controllers\AdminController::class, 'update'])->name('admin.update');
    Route::delete('/admin/delete/{id}',[\App\Http\Controllers\AdminController::class, 'destroy'])->name('admin.delete');
    Route::get('/export/excel', [\App\Http\Controllers\AdminController::class, 'exportExcel'])->name('admin.export.excel');
    Route::get('/export/pdf', [\App\Http\Controllers\AdminController::class, 'exportPDF'])->name('admin.export.pdf');
});

// Views Owner
Route::middleware(['auth', 'role:owner'])->group(function () {
    Route::get('/owner/dashboard', [\App\Http\Controllers\OwnerController::class, 'dashboard'])->name('owner.dashboard');
    Route::get('/owner/data-laundry',[\App\Http\Controllers\OwnerController::class, 'show'])->name('owner.data-laundry');
    Route::get('/owner/search/date',[\App\Http\Controllers\OwnerController::class, 'filterdate'])->name('owner.filterdate');
    Route::get('/owner/create-admin', [\App\Http\Controllers\OwnerController::class, 'showCreateAdminForm'])->name('owner.show-create-admin');
    Route::post('/owner/create-admin', [\App\Http\Controllers\OwnerController::class, 'createAdmin'])->name('owner.create-admin');
    Route::get('/owner/manage-admin', [\App\Http\Controllers\OwnerController::class, 'listAdmins'])->name('owner.manage-admin');
    Route::get('/owner/edit-admin/{id}', [\App\Http\Controllers\OwnerController::class, 'showEditForm'])->name('owner.edit-admin');
    Route::put('/owner/update-admin/{id}', [\App\Http\Controllers\OwnerController::class, 'updateAdmin'])->name('owner.update-admin');
    Route::delete('/owner/delete-admin/{id}', [\App\Http\Controllers\OwnerController::class, 'deleteAdmin'])->name('owner.delete-admin');
});

// Views Member -- NONE FUNCTION
Route::middleware(['auth', 'role:member'])->group(function () {
    Route::get('/member/dashboard', [\App\Http\Controllers\MemberController::class, 'dashboard'])->name('member.dashboard');
});

// --------------------------------
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

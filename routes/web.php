<?php

use App\Http\Controllers\AdminsAuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ItemsController;
use App\Http\Controllers\MenusCategoryController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
// Route::prefix('admin')->group(function () {
//     Route::get('/login', [AdminsAuthController::class, 'showLoginForm'])->name('admin.login');
//     Route::post('/login', [AdminsAuthController::class, 'login']);
// });
// Route::middleware(['admin'])->group(function () {
//     Route::get('/dashboard', [DashboardController::class, 'dashboard'])->name('dashboard');
//     Route::resource('/menuCategories', MenusCategoryController::class);
//     Route::get('/menuCategories/{id}/items/create', [MenusCategoryController::class, 'addItemToCategory'])->name('menuCategories.addItem');
//     Route::post('/menuCategories/{id}/items', [MenusCategoryController::class, 'storeItemToCategory'])->name('menuCategories.storeItem');
//     Route::resource('/items', ItemsController::class);
//     Route::get('/logout', [AdminsAuthController::class, 'logout'])->name('admin.logout');
// });

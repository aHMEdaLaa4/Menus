<?php

use App\Http\Controllers\Admin\AdminOrderController;
use App\Http\Controllers\Admin\AdminsAuthController;
use App\Http\Controllers\Admin\ItemsController;
use App\Http\Controllers\Admin\MenusCategoryController;

// use App\Http\Controllers\PaymentController;
// use App\Http\Controllers\user\PaymentConrtoller;


use App\Http\Controllers\user\CartController;
use App\Http\Controllers\user\UsersAuthController;
use App\Http\Controllers\user\OrderController;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::prefix('admin')->group(function () {
    Route::post('/register', [AdminsAuthController::class, 'register'])->name('admins.register');
    Route::post('/login', [AdminsAuthController::class, 'login'])->name('admins.login');

});
Route::middleware('admin')->prefix('admin')->group(function () {
    // Routes for MenuCategories
    Route::get('/menuCategories', [MenusCategoryController::class, 'index']);
    Route::post('/menuCategories', [MenusCategoryController::class, 'store']);
    Route::get('/menuCategories/{menuCategory}', [MenusCategoryController::class, 'show']);
    Route::post('/menuCategories/{menuCategory}', [MenusCategoryController::class, 'update']);
    Route::delete('/menuCategories/{menuCategory}', [MenusCategoryController::class, 'destroy']);

    // Routes for Items
    Route::get('/items', [ItemsController::class, 'index']);
    Route::post('/items', [ItemsController::class, 'store']);
    Route::get('/items/{item}', [ItemsController::class, 'show']);
    Route::post('/items/{item}', [ItemsController::class, 'update']);
    Route::post('/items/{item}/set-availability', [ItemsController::class, 'setAvailability']);
    Route::delete('/items/{item}', [ItemsController::class, 'destroy']);
    


    Route::post('/logout', [AdminsAuthController::class, 'logout'])->name('admins.logout');
});

Route::prefix('user')->group(function () {
    Route::get('/menuCategories', [MenusCategoryController::class, 'index']);
    Route::get('/items', [ItemsController::class, 'index']);
});









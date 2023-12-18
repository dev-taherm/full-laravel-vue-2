<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\SellerController;
use Illuminate\Foundation\Application;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {


    return Inertia::render('Dashboard', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,

    ]);
})->name('dashboard');



Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'index'])->name('profile.index');
    Route::get('/profile/edit', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    // profile posts
    Route::get('/profile/post/create', [PostController::class, 'create'])->name('post.create');
    Route::get('/profile/post/{postId}', [PostController::class, 'show'])->name('post.show');
    Route::get('/profile/post/{postId}/edit', [PostController::class, 'edit'])->name('post.edit');
    Route::patch('/profile/post/{postId}/', [PostController::class, 'update'])->name('post.update');
    Route::post('/profile/post', [PostController::class, 'store'])->name('post.store');
});

Route::middleware('auth')->group(function () {
    Route::get('/customer/create', [CustomerController::class, 'create'])->name('customer.create');
    Route::patch('/customer', [CustomerController::class, 'update'])->name('customer.update');
    Route::post('/customer', [CustomerController::class, 'store'])->name('customer.store');
});


Route::middleware('auth')->group(function () {
    Route::post('/business', [SellerController::class, 'store'])->name('seller.store');
    Route::get('/businessees', [SellerController::class, 'index'])->name('seller.index');
    Route::get('/business/{sellerId}', [SellerController::class, 'show'])->name('seller.show');
    Route::get('/seller/create', [SellerController::class, 'create'])->name('seller.create');
    Route::get('/business/{sellerId}/edit', [SellerController::class, 'edit'])->name('seller.edit');
    Route::patch('/business/{sellerId}/', [SellerController::class, 'update'])->name('seller.update');
});

Route::middleware('auth')->group(function () {
});
require __DIR__ . '/auth.php';

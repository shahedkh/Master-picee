<?php

use App\Http\Controllers\admin\IndexController;
use App\Http\Controllers\admin\UserController;
use App\Http\Controllers\admin\CategoryController;
use App\Http\Controllers\admin\ProductController;
use App\Http\Controllers\admin\RoomController;
use App\Http\Controllers\MovieController;
// use App\Http\Controllers\CategoryController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::middleware(['IsAdmin'])->group(function () {
    Route::get('/admin/dashboard', [IndexController::class, 'index'])->name('admin.index');

    Route::get('/admin/users', [UserController::class, 'index'])->name('admin.users');
    Route::get('/admin/users/add', [UserController::class, 'create'])->name('admin.users.add');
    Route::post('/admin/users/add', [UserController::class, 'store'])->name('admin.users.store');
    Route::delete('/admin/users/{id}', [UserController::class, 'destroy'])->name('admin.users.destroy');
    Route::get('/admin/users/edit/{id}', [UserController::class, 'edit'])->name('admin.users.edit');
    Route::put('/admin/users/edit/{id}', [UserController::class, 'update'])->name('admin.users.update');

    Route::get('/admin/categories', [CategoryController::class, 'index'])->name('admin.categories.index');
    Route::get('/admin/categories/add', [CategoryController::class, 'create'])->name('admin.categories.create');
    Route::post('/admin/categories/add', [CategoryController::class, 'store'])->name('admin.categories.store');
    Route::get('/admin/categories/edit/{id}', [CategoryController::class, 'edit'])->name('admin.categories.edit');
    Route::put('/admin/categories/edit/{id}', [CategoryController::class, 'update'])->name('admin.categories.update');
    Route::delete('/admin/categories/{id}', [CategoryController::class, 'destroy'])->name('admin.categories.destroy');

    Route::get('/admin/movies', [MovieController::class, 'index'])->name('admin.movies.index');
    Route::get('/admin/movies/add', [MovieController::class, 'create'])->name('admin.movies.create');
    Route::post('/admin/movies/add', [MovieController::class, 'store'])->name('admin.movies.store');
    Route::get('/admin/movies/edit/{id}', [MovieController::class, 'edit'])->name('admin.movies.edit');
    Route::put('/admin/movies/edit/{id}', [MovieController::class, 'update'])->name('admin.movies.update');
    Route::delete('/admin/movies/{id}', [MovieController::class, 'destroy'])->name('admin.movies.destroy');

    Route::get('/admin/reservations', [ReservationController::class, 'index'])->name('admin.reservations.index');
    Route::get('/admin/reservations/add', [ReservationController::class, 'create'])->name('admin.reservations.create');
    Route::post('/admin/reservations/add', [ReservationController::class, 'store'])->name('admin.reservations.store');
    Route::get('/admin/reservations/edit/{id}', [ReservationController::class, 'edit'])->name('admin.reservations.edit');
    Route::put('/admin/reservations/edit/{id}', [ReservationController::class, 'update'])->name('admin.reservations.update');
    Route::delete('/admin/reservations/{id}', [ReservationController::class, 'destroy'])->name('admin.reservations.destroy');
});

<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use Illuminate\Routing\Router;
use Symfony\Component\HttpKernel\Profiler\Profile;

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

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::get('/', function () {
    return view('users.home');
});
Route::get('/ordersin', function () {
    return view('admin.ordersin');
});

// Halaman Admin
Route::middleware(['auth', 'admin'])->group(function () {
    Route::get('dashboard', function () {
        return view('admin.dashboard');
    });
    Route::get('/index', function () {
        return view('master.index');
    });
});

Route::get('/profile/profinsi/{id}', [ProfileController::class, 'kota'])->name('profile.profinsi');

// Halaman User
Route::middleware(['auth', 'user'])->group(function () {
    Route::get('/user', function () {
        return view('users.home');
    });
    Route::resource('profile', ProfileController::class);
    Route::get('/about', function () {
        return view('users.about');
    });

    Route::get('/store', function () {
        return view('users.store');
    });

    Route::get('/cart', function () {
        return view('users.cart');
    });

    Route::get('/detailproduk', function () {
        return view('users.detailproduk');
    });

    Route::get('/contact', function () {
        return view('users.contact');
    });

    Route::get('/checkout', function () {
        return view('users.checkout');
    });

    Route::get('/thankyou', function () {
        return view('users.thankyou');
    });
});


Route::post('/getkabupaten', [ProfileController::class, 'getkabupaten'])->name('getkabupaten');


<?php


use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\ProductCategoryController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

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


Route::get('/index', function () {
    return view('master.index');
});


Route::get('/userCRUD', function () {
    return view('admin.useradminCRUD');
});

Route::resource('product', ProductController::class);
Route::resource('category', ProductCategoryController::class);

// Route::get('/home', function () {
//     return view('master.index_user');
// });


// Halaman User
Route::get('/home', function () {
    return view('users.home');
});

Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/store2', [ProductController::class, 'index2'])->name('store');


Route::get('/', function () {
    return view('master.index_user');
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


// Halaman User
Route::middleware(['auth', 'user'])->group(function () {
    Route::get('/user', function () {
        return view('users.home');
    });
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

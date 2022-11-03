<?php


use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\ProductCategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CartController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;


use App\Http\Controllers\MidtransController;


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

// Halaman Admin
Route::get('/index', function () {
    return view('master.index');
});


Route::get('/userCRUD', function () {
    return view('admin.useradminCRUD');
});




// Route::get('/home', function () {
//     return view('master.index_user');
// });


// Halaman User
Route::get('/home', function () {
    return view('users.home');
});

Route::get('/home', [HomeController::class, 'index'])->name('home');


Route::get('/', function () {
    return view('master.index_user');
});

// Halaman Admin


Route::middleware(['auth', 'admin'])->group(function () {
    // Route::get('/userCRUD', function () {
    //     return view('admin.useradminCRUD');
    // });
    Route::get('dashboard', function () {
        return view('admin.dashboard');
    });
    Route::get('/index', function () {
        return view('master.index');
    });
    Route::resource('product', ProductController::class);
    Route::resource('category', ProductCategoryController::class);
    Route::resource('userCRUD', UserController::class);
});



///halaman user
Route::get('/', function () {
    return view('master.index_user');
});

Route::get('/home', [HomeController::class, 'index'])->name('user.index');

Route::middleware(['auth', 'user'])->group(function () {
    Route::get('/user', [HomeController::class, 'index'])->name('user.index');
    
    Route::get('/store', [ProductController::class, 'index2'])->name('store');
    Route::get('/detailproduct/{id}', [ProductController::class, 'detailproduct'])->name('product.detailproduct');
    
    Route::get('/cart',[CartController::class, 'index']);
    Route::get('/about', function () {
        return view('users.about');
    });


    Route::get('/contact', function () {
        return view('users.contact');
    });

    Route::get('/checkout', function () {
        return view('users.checkout');
    });

    Route::get('/history', function () {
        return view('users.history');
    });

    Route::get('/thankyou', function () {
        return view('users.thankyou');
    });
});

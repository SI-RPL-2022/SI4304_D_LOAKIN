<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Admin\DashboardAdminController;
use App\Http\Controllers\Admin\ProdukAdminController;
use App\Http\Controllers\Admin\LoginAdminController;
use App\Http\Controllers\Admin\DriverAdminController;
use App\Http\Controllers\Admin\UserAdminController;
use App\Http\Controllers\Admin\OrderLoakInAdminController;

use App\Http\Controllers\Driver\DashboardDriverController;
use App\Http\Controllers\Driver\LoginDriverController;
use App\Http\Controllers\Driver\ProfileDriverController;
use App\Http\Controllers\Driver\TrackingAlamatDriverController;

use App\Http\Controllers\User\HomeUserController;
use App\Http\Controllers\User\OrderUserController;
use App\Http\Controllers\User\StatusUserController;
use App\Http\Controllers\User\CheckoutUserController;
use App\Http\Controllers\User\LoginUserController;
use App\Http\Controllers\User\RegisterUserController;
use App\Http\Controllers\User\ProfileUserController;
use App\Http\Controllers\User\KeranjangUserController;
use App\Http\Controllers\User\ShopUserController;
use App\Http\Controllers\User\CartUserController;
use App\Http\Controllers\User\ActivityUserController;

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

Route::get('loginadmin', [LoginAdminController::class, 'loginadmin'])->name('loginadmin');
Route::post('proses_loginadmin', [LoginAdminController::class, 'proses_loginadmin'])->name('proses_loginadmin');

Route::get('logoutadmin', [LoginAdminController::class, 'logoutadmin'])->name('logoutadmin');

Route::prefix('admin')->group(function () {
    Route::prefix('dashboard')->name('dashboard.')->group(function () {
        Route::get('/', [DashboardAdminController::class, 'index'])->name('index');
    });

    Route::prefix('produk')->name('produk.')->group(function () {
        Route::get('/', [ProdukAdminController::class, 'index'])->name('index');
        Route::get('/create', [ProdukAdminController::class, 'create_view'])->name('create');
        Route::post('/create', [ProdukAdminController::class, 'create_process'])->name('create.process');
        Route::get('/view/{id}', [ProdukAdminController::class, 'view'])->name('view');
        Route::get('/update/{id}', [ProdukAdminController::class, 'update_view'])->name('update');
        Route::post('/update/{id}', [ProdukAdminController::class, 'update_process'])->name('update.process');
        Route::get('/delete/{id}', [ProdukAdminController::class, 'delete'])->name('delete');
    });

    Route::prefix('orderadmin')->name('orderadmin.')->group(function () {
        Route::get('/', [OrderLoakInAdminController::class, 'index'])->name('index');
        Route::get('/view/{no_order}', [OrderLoakInAdminController::class, 'view'])->name('view');
        Route::get('/fixorder/{id}', [OrderLoakInAdminController::class, 'fixorder'])->name('fixorder');
        Route::get('/pilihdriver/{id}', [OrderLoakInAdminController::class, 'pilihdriver'])->name('pilihdriver');
        Route::post('/submitdriver/{id}', [OrderLoakInAdminController::class, 'submitdriver'])->name('submitdriver');
    });


    Route::prefix('driverdata')->name('driverdata.')->group(function () {
        Route::get('/', [DriverAdminController::class, 'index'])->name('index');
        Route::get('/view/{id}', [DriverAdminController::class, 'view'])->name('view');
        
    });

    Route::prefix('userdata')->name('userdata.')->group(function () {
        Route::get('/', [UserAdminController::class, 'index'])->name('index');
        Route::get('/update/{id}', [UserAdminController::class, 'update'])->name('update');
        Route::get('/view/{id}', [UserAdminController::class, 'view'])->name('view');
    });
});

Route::get('logindriver', [LoginDriverController::class, 'logindriver'])->name('logindriver');
Route::post('proses_logindriver', [LoginDriverController::class, 'proses_logindriver'])->name('proses_logindriver');

Route::get('logoutdriver', [LoginDriverController::class, 'logoutdriver'])->name('logoutdriver');

Route::prefix('driver')->group(function () {
    Route::prefix('driver')->name('driver.')->group(function () {
        Route::get('/', [DashboardDriverController::class, 'index'])->name('index');
        Route::get('/confirmpickup/{id}', [DashboardDriverController::class, 'fixpickup'])->name('fixpickup');
    });

    Route::prefix('profile')->name('profile.')->group(function () {
        Route::get('/', [ProfileDriverController::class, 'index'])->name('index');
        Route::post('/update', [ProfileDriverController::class, 'update'])->name('update');
    });
    
    Route::prefix('pickup')->name('pickup.')->group(function () {
        Route::get('/detail/{no_order}', [DashboardDriverController::class, 'view'])->name('view');
    });

    Route::prefix('trackingalamat')->name('trackingalamat.')->group(function () {
        Route::get('/trackingalamat/{id}', [TrackingAlamatDriverController::class, 'index'])->name('index');
    });
});

Route::get('loginuser', [LoginUserController::class, 'loginuser'])->name('loginuser');
Route::post('proses_loginuser', [LoginUserController::class, 'proses_loginuser'])->name('proses_loginuser');

Route::get('registeruser', [RegisterUserController::class, 'registeruser'])->name('registeruser');
Route::post('proses_registeruser', [RegisterUserController::class, 'proses_registeruser'])->name('proses_registeruser');

Route::get('logoutuser', [LoginUserController::class, 'logoutuser'])->name('logoutuser');


Route::prefix('/')->group(function () {
    Route::prefix('/')->name('home.')->group(function () {
        Route::get('/', [HomeUserController::class, 'index'])->name('index');
    }); 

    Route::prefix('/order')->name('order.')->group(function () {
        Route::get('/', [OrderUserController::class, 'index'])->name('index')->middleware('auth');
        Route::post('/order', [OrderUserController::class, 'order'])->name('order');
        
    }); 

    Route::prefix('/checkout')->name('checkout.')->group(function () {
        Route::get('/', [CheckoutUserController::class, 'index'])->name('index')->middleware('auth');
        Route::get('/update/{id}', [CheckoutUserController::class, 'update'])->name('update')->middleware('auth');
    }); 

    Route::prefix('/status')->name('status.')->group(function () {
        Route::get('/', [StatusUserController::class, 'index'])->name('index')->middleware('auth');
    }); 

    Route::prefix('account')->name('account.')->group(function () {
        Route::get('/', [ProfileUserController::class, 'index'])->name('index')->middleware('auth');
        Route::post('/update', [ProfileUserController::class, 'update'])->name('update')->middleware('auth');
    });

    Route::prefix('/shop')->name('shop.')->group(function () {
        Route::get('/', [ShopUserController::class, 'index'])->name('index')->middleware('auth');
        Route::get('/detail/{id}', [ShopUserController::class, 'detail'])->name('detail')->middleware('auth');
    }); 

    Route::prefix('/cart')->name('cart.')->group(function () {
        Route::get('/', [CartUserController::class, 'index'])->name('index')->middleware('auth');
        Route::get('/create/{id}', [CartUserController::class, 'create'])->name('create')->middleware('auth');
        Route::get('/delete/{id}', [CartUserController::class, 'delete'])->name('delete')->middleware('auth');
    });

    Route::prefix('/activityloakin')->name('activityloakin.')->group(function () {
        Route::get('/', [ActivityUserController::class, 'loakintrack'])->name('loakintrack')->middleware('auth');
        Route::get('/viewtrack/{no_order}', [ActivityUserController::class, 'viewtrack'])->name('viewtrack')->middleware('auth');
    });
});

Route::view('/berat', '/Driver/Page/Berat/InputBerat');

Route::view('/konfberat', '/Driver/Page/Berat/KonfirmBerat');
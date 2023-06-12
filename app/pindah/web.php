<?php

use App\Http\Controllers\SessionController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\OrdersController;
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

// Route::get('/vurniture', function () {
//     return view('/web/home');
// });

// Route::get('/vurniture/home', function () {
//     return view('/web/home');
// });

Route::get('/vurniture/home', [ProductsController::class, 'index']);

// Route::get('/vurniture/addtocart/{id}', [ProductsController::class, 'addToCart'])->name('add.to.cart');

Route::get('/vurniture/productdetail/{id}', [OrdersController::class, 'index']);

Route::post('/vurniture/productdetail/{id}', [OrdersController::class, 'products']);

Route::get('/vurniture/successfully_added', function () {
    return view('/web/cart/add/success');
});

Route::get('/vurniture/failed_to_add', function () {
    return view('/web/cart/add/failed');
});

Route::get('/vurniture/cart', [OrdersController::class, 'orders']);

Route::delete('/vurniture/cart/{id}', [OrdersController::class, 'delete']);

Route::get('/vurniture/removed_from_cart', function () {
    return view('/web/cart/remove/success');
});

Route::get('vurniture/checkout_confirm', [OrdersController::class, 'confirm']);

Route::get('vurniture/checkout_success', function () {
    return view('/web/checkout/success');
});

Route::get('/vurniture/categories', function () {
    return view('/web/categories');
});

Route::get('/vurniture/aboutus', function () {
    return view('/web/aboutus');
});

// Route::get('/vurniture/login', function () {
//     return view('/web/login');
// });

Route::get('/vurniture/login', [SessionController::class, 'index']);

Route::post('/vurniture/dashboard', [SessionController::class, 'login']);

Route::get('/vurniture/logout', [SessionController::class, 'logout']);

// Route::get('/vurniture/signup', function () {
//     return view('/web/signup');
// });

Route::get('/vurniture/signup', [SessionController::class, 'signup']);

Route::get('/vurniture/create', [SessionController::class, 'create']);

Route::get('/vurniture/dashboard/admin', function () {
    return view('/dashboard/admin/home');
});

Route::get('/vurniture/dashboard/admin/products', function () {
    return view('/dashboard/admin/products');
});

Route::get('/vurniture/dashboard/admin/create', function () {
    return view('/dashboard/admin/create');
});

Route::get('/vurniture/dashboard', function () {
    return view('/dashboard/user/home');
});

Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

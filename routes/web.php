<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\HistoryController;


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



Route::get('/categories', function () {
    return view('home/categories');
});

Route::get('/about-us', function () {
    return view('home/about-us');
});

// Route::get('/login', function () {
//     return view('home/login');
// });

Route::get('/signup', function () {
    return view('home/sign-up');
});

// Route::get('/mystore', [ProductController::class,'index']
// );

Route::resource('products', ProductController::class); //karena sudah declare resource ga atek ngene2 an
// Route::post('/products', [ProductController::class, 'store'])->name('products.store');
// Route::get('/products/{product}', [ProductController::class, 'show'])->name('products.show');
// Route::put('/products/{product}', [ProductController::class, 'update'])->name('products.update');
// Route::delete('/products/{product}', [ProductController::class, 'destroy'])->name('products.destroy');

// Route::get('/users', [UserController::class,'index']);
// Route::get('/users/create', [UserController::class,'create']);
// Route::post('/users', [UserController::class, 'store'])->name('users.store');
// Route::get('/users/{user}', [UserController::class, 'show'])->name('users.show');
// Route::put('/users/{user}', [UserController::class, 'update'])->name('users.update');
// Route::delete('/users/{user}', [UserController::class, 'destroy'])->name('users.destroy');

Route::resource('users', UserController::class); //karena sudah declare resource ga atek ngene2 an

Route::get('/login', [LoginController::class, 'index']);


Route::post('/login', [UserController::class, 'login'])->name('login');


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::middleware(['auth'])->group(function () {
    // Add your authenticated routes here
    Route::get('/dashboard', [UserController::class, 'userDB'])->name('user.dashboard');
});

// Route::get('/trans-list', function () {
//     return view('dbuser.trans-list');
// });

Route::get('trans-list', [HistoryController::class, 'index']);

Route::get('trans-list/{id}', [HistoryController::class, 'detail']);

Route::get('/inbox', function () {
    return view('dbuser.inbox');
});

Route::get('/wish-list', function () {
    return view('dbuser.wish-list');
});

// User
Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', [UserController::class, 'userDB'])->name('dashboard');
    Route::post('/logout', [UserController::class, 'logout'])->name('logout');
});

// Admin
Route::middleware(['auth', 'admin'])->prefix('admin')->group(function () {
    Route::get('/dashboard', [UserController::class, 'adminHome'])->name('admin.dashboard');
    Route::post('/logout', [UserController::class, 'logout'])->name('admin.logout');
});



Route::get('/', [ProductController::class, 'isaura']);

// Route::get('/vurniture/addtocart/{id}', [ProductsController::class, 'addToCart'])->name('add.to.cart');

Route::get('/vurniture/productdetail/{id}', [OrderController::class, 'index']);

Route::post('/vurniture/productdetail/{id}', [OrderController::class, 'product']);

Route::get('/vurniture/successfully_added', function () {
    return view('/home/cart/add/success');
});

Route::get('/vurniture/failed_to_add', function () {
    return view('/home/cart/add/failed');
});

Route::get('/vurniture/cart', [OrderController::class, 'orders']);

Route::delete('/vurniture/cart/{id}', [OrderController::class, 'delete']);

Route::get('/vurniture/removed_from_cart', function () {
    return view('/home/cart/remove/success');
});

Route::get('/vurniture/checkout_confirm', [OrderController::class, 'confirm']);

Route::get('/vurniture/checkout_success', function () {
    return view('/home/checkout/success');
});

//Route Kategori
Route::get('/vurniture/category/bed', [ProductController::class, 'bed']);

Route::get('/vurniture/category/bookcase', [ProductController::class, 'bookcase']);

Route::get('/vurniture/category/cabinet', [ProductController::class, 'cabinet']);

Route::get('/vurniture/category/chair', [ProductController::class, 'chair']);

Route::get('/vurniture/category/desk', [ProductController::class, 'desk']);

Route::get('/vurniture/category/sofa', [ProductController::class, 'sofa']);

Route::get('/vurniture/category/table', [ProductController::class, 'table']);

Route::get('/vurniture/category/wardrobe', [ProductController::class, 'wardrobe']);

//ROUTE UNTUK CART YANG KOSONG
// Route::get('/vurniture/cart', function () {
//     return view('/home/order');
// });
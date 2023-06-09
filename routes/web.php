<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProductController;


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
    return view('home.home');
});

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

Route::get('/trans-list', function () {
    return view('dbuser.trans-list');
});

Route::get('/inbox', function () {
    return view('dbuser.inbox');
});

Route::get('/wish-list', function () {
    return view('dbuser.wish-list');
});

Route::middleware(['auth', 'admin'])->prefix('admin')->group(function () {
    // Admin Dashboard
    Route::get('/dashboard', [UserController::class, 'adminHome'])->name('admin.dashboard');
});

// USER
Route::get('/dashboard', function () {
    return view('dbuser/dashboardUser');
});
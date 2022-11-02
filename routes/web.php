<?php

use App\Http\Livewire\Login;
use App\Http\Livewire\Signup;
use App\Http\Livewire\Home;
use App\Http\Livewire\ProductDetail;
use App\Http\Livewire\ShoppingCart;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Livewire\Welcome;

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

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth'])->name('dashboard');

Route::get('/', Home::class)->middleware(['auth'])->name('home');

Route::get('/welcome', Welcome::class)->name('welcome');

Route::get('/signup', Signup::class)->name('signup');

Route::get('/login', Login::class)->name('login');

// Route::get('/payment', Login::class)->name('payment');

Route::get('/product-detail/{id}', ProductDetail::class)->name('product.detail');

Route::get('/shopping-cart', ShoppingCart::class)->name('shopping.cart');

require __DIR__ . '/auth.php';

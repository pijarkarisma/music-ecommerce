<?php

use App\Http\Livewire\Login;
use App\Http\Livewire\Signup;
use App\Http\Livewire\Home;
use Illuminate\Support\Facades\Route;
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
//     return view('livewire.landing-page');
// });

Route::get('/', Welcome::class);

Route::get('/signup', Signup::class)->name('signup');

Route::get('/login', Login::class)->name('login');

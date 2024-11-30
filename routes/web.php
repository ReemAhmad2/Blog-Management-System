<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthContoller;
use App\Http\Controllers\BlogContoller;

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
    // return view('welcome');
});

Route::get('/login', [AuthContoller::class, 'login_form'])->name('login.form');
Route::post('/login', [AuthContoller::class, 'login'])->name('login');

Route::resource('blog', BlogContoller::class);

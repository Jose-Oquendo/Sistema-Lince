<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SessionsController;
use App\Http\Controllers\ManageController;
use App\Http\Controllers\ProductsController;

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

Route::get('/welcome', function () { return view('welcome'); });

//home or principal page
Route::get('/', function (){ return view('client.home'); })->name('home')->middleware('auth.client');

//login and register
Route::get('/ingreso', [SessionsController::class, 'show'])->name('login.index')->middleware('guest');
Route::post('/ingreso', [SessionsController::class, 'store'])->name('login.store');
Route::get('/salida', [SessionsController::class, 'destroy'])->name('login.destroy')->middleware('auth');

Route::get('/registro', [RegisterController::class, 'show'])->name('register.index')->middleware('guest');
Route::post('/registro', [RegisterController::class, 'store'])->name('register.store');

//views for employee login
Route::get('/emp', [ManageController::class, 'index_emp'])->name('emp.index')->middleware('auth.emp');
Route::get('/admin', [ManageController::class, 'index_admin'])->name('admin.index')->middleware('auth.admin');

//views fros client
Route::view('/perfil', 'client.profile')->name('profile')
    ->middleware('auth')   
    ->middleware('auth.client');
Route::view('/canasta', 'client.basket')->name('basket')
    ->middleware('auth')
    ->middleware('auth.client');
#catalogue
Route::get('/catalogo', [ProductsController::class, 'catalogue'])->name('products.catalogue');


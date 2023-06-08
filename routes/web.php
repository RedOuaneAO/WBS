<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ButtonController;

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
// auth
Route::get('/', function () {
    return view('login');
});
Route::get('/logout', [AuthController::class , 'logout'])->name('logout');
Route::post('/login', [AuthController::class , 'login'])->name('login');


Route::get('/dashboard', function () {
    return view('dashboard');
});
Route::get('/profile', function () {
    return view('profile');
});
Route::get('/addClient', function () {
    return view('addClient');
});
Route::get('/addCompteur', function () {
    return view('addCompteur');
});

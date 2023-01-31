<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

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
    return view('home.login');
});

Route::get('/register', function () {
    return view('home.register');
});

Route::get('/home', function () {
    return view('main');
});

Route::get('/gosts', function () {
    return view('gost');
});

//user
Route::post('registered', [UserController::class, 'register']);
Route::post('/login', [UserController::class, 'login']);

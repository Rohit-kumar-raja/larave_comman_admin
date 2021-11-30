<?php

use Faker\Guesser\Name;
use Illuminate\Support\Facades\Route;

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
    return view('index');
});

Route::get('login', function () {
    return view('login');
});

Route::get('register', function () {
    return view('register');
});

Route::get('404', function () {
    return view('404');
});

Route::get('blank', function () {
    return view('blank');
});
Route::get('buttons', function () {
    return view('buttons');
});

Route::get('forgot-password', function () {
    return view('forgot-password');
});

Route::get('tables', function () {
    return view('tables');
});

Route::get('cards', function () {
    return view('cards');
});
Route::get('charts', function () {
    return view('charts');
});
Route::get('categories', function () {
    return view('categories.index');
})->name('categories');
Route::get('categories/update', function () {
    return view('categories.update');
});



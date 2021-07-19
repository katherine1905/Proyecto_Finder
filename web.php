<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FinderController;

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
    return view('welcome');
});

/*Route::get('/categories', function () {
    return view('categories');
});

Route::get('/errors', function () {
    return view('errors');
});

Route::get('/detalleEvento', function () {
    return view('detalleEvento');
});

Route::get('/detalleE', function () {
    return view('detalleEvento');
});

Route::get('/register', function () {
    return view('register');
});

Route::get('/reservation', function () {
    return view('reservation');
});

Route::get('/payment', function () {
    return view('payment');
});

Route::get('/confirm', function () {
    return view('confirm');
});

Route::get('/index', function () {
    return view('index');
});*/

Route::get('/events/book/{id}', [FinderController::class, 'book']);

Route::get('/categories', function () {
    return view('categories');
});

Route::resource('events', FinderController::class);
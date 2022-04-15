<?php

use Illuminate\Support\Facades\Route;
use App\http\Controllers\Controller;
use App\http\Controllers\NewController;

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

Route::get('/', [Controller::class, 'index']);

Route::get('/', [NewController::class, 'index']);


Route::get('/test', function () {
    return view('welcome');

});

Route::get('/BMI', function () {
    return view('BMI');

});

Route::get('/index', function () {
    return view('index');

});

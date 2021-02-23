<?php

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

//for commit
//second commit

Route::get('/', function () {
    return view('welcome');
});

Route::get('/name', function () {
    return "Nursultan Nogay";
});

Route::get('/nogay', function () {
    return view('nogay');
});

Route::get('/about', function () {
    return redirect("nogay");
});


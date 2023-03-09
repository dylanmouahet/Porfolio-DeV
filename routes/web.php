<?php

use Illuminate\Support\Facades\Route;

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
    // for ($i=0; $i < 200 ; $i++) {
    //     visitor()->visit();
    // }
    return view('welcome');
    // dd(request());
    // return request()->ip();
    // return request()->userAgent();
});

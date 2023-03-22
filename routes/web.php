<?php

use App\Http\Controllers\AuthController;
use App\Http\Livewire\Auth;
use App\Http\Livewire\Dashboard;
use Illuminate\Support\Facades\Artisan;
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

Route::get('/test', function () {
    $number = random_int(100, 1000);
    for ($i=0; $i < $number ; $i++) {
        visitor()->visit();
    }
    return "Succès => " . $number;
    // return view('welcome');
    // dd(request());
    // return request()->ip();
    // return request()->userAgent();
});
Route::get('/clear', function () {
    Artisan::call('cache:clear');
    Artisan::call('route:cache');
    Artisan::call('view:clear');
    Artisan::call('config:cache');
    return  "all cleared ...";
});

Route::middleware(["auth"])->group(function () {
    Route::get('/', Dashboard::class)->name('dashboard');
    Route::get('/auth/logout', [AuthController::class, 'logout'])->name('auth.logout');
});

Route::middleware(["guest"])->prefix('login')->group(function () {
    Route::get('/', Auth::class)->name('auth.index');
    Route::get('/{provider}', [AuthController::class, 'redirect'])->name("auth.provider");
    Route::get('/{provider}/callback', [AuthController::class, 'Callback']);
});

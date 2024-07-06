<?php

use Illuminate\Support\Facades\Route;

// admin
use App\Http\Controllers\Admin\AuthAdminController;
use App\Http\Controllers\Admin\DashboardAdminController;



Route::get('/', function () {
    return view('welcome');
});



// admin
Route::prefix('admin')->name('admin.')->controller(AuthAdminController::class)->group(function () {
    Route::middleware('admin.guest')->group(function(){
        Route::get('/', 'index')->name('index');
        Route::post('/', 'authenticate')->name('authenticate');
    });

    Route::middleware('admin.auth')->group(function(){
        Route::controller(DashboardAdminController::class)->group(function () {
            Route::get('/dashboard', 'index')->name('dashboard');
        });

        Route::get('/logout', 'logout')->name('logout');
    });
});
<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect('login');
});

Auth::routes();

Route::group(['middleware' => 'auth', 'as' => 'admin.', 'prefix' => '/'], function () {
    Route::get('/home', [\App\Http\Controllers\HomeController::class, 'index'])->name('home');

    Route::get('/penugasan', [\App\Http\Controllers\PenugasanController::class, 'index'])->name('penugasan.index');
    Route::get('/penugasan/create', [\App\Http\Controllers\PenugasanController::class, 'create'])->name('penugasan.create');
    Route::get('/penugasan/1', [\App\Http\Controllers\PenugasanController::class, 'show'])->name('penugasan.show');
});

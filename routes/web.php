<?php

use App\Http\Controllers\NotedController; // Updated to uppercase N
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::controller(NotedController::class)->group(function () {
    Route::get('/noted', 'index')->name('noted.dashboard');
    Route::get('/noted/show', 'show')->name('noted.show');
    Route::get('/noted/create', 'create')->name('noted.create');
    Route::post('/noted/store', 'store')->name('noted.store');
    Route::get('/edit/noted{id}', 'edit')->name('noted.edit'); // Menampilkan Form Edit
    Route::delete('/delete/noted{id}', 'delete')->name('noted.delete'); // Menghapus Data Karyawan


});
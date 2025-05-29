<?php

use App\Http\Controllers\NotedController; // Updated to uppercase N
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware('auth');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::controller(NotedController::class)->group(function () {
    Route::get('/noted', 'index')->name('noted.dashboard');
    Route::get('/noted/show', [NotedController::class, 'show'])->name('notes.show');
    Route::get('/noted/create', 'create')->name('notes.create');
    Route::post('/noted/store', 'store')->name('noted.store');
    Route::get('/edit/noted/{id}', [NotedController::class, 'edit'])->name('noted.edit');
    Route::delete('/delete/noted{id}', 'delete')->name('noted.delete'); // Menghapus Data Karyawan


});
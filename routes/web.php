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
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::get('/clients', [App\Http\Controllers\ClientController::class, 'index'])->name('admin');
Route::get('/clients/add', [App\Http\Controllers\ClientController::class, 'create'])->name('admin.add.create');
Route::post('/clients/add', [App\Http\Controllers\ClientController::class, 'store'])->name('admin.add.store');
Route::get('/clients/edit/{id}', [App\Http\Controllers\ClientController::class, 'edit'])->name('admin.add.edit');
Route::put('/clients/update/{id}', [App\Http\Controllers\ClientController::class, 'update'])->name('admin.update');
Route::get('/clients/view/{id}', [App\Http\Controllers\ClientController::class, 'show'])->name('admin.view');
Route::delete('/clients/{id}', [App\Http\Controllers\ClientController::class, 'destroy'])->name('admin.delete');

<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

// Route::get('/', function () {
//     return view('home');
//     // echo 'hello word';
// });


// Route::get('/', [Home::class, 'index']);

Route::get('/tidak', [HomeController::class, 'dasboard']);
Route::get('/', [HomeController::class, 'index'])->name('index');
Route::get('/create', [HomeController::class, 'create'])->name('products.create');
Route::post('/store', [HomeController::class, 'store'])->name('products.store');
Route::get('/edit/{id}', [HomeController::class, 'edit'])->name('user.edit');
Route::put('/update/{id}', [HomeController::class, 'update'])->name('products.update');
Route::delete('/delete/{id}', [HomeController::class, 'delete'])->name('products.delete');
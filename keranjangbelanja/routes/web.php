<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KeranjangBelanjaController;

Route::get('/', function () {
    return view('welcome');
});

// Route CRUD
Route::get('/keranjangbelanja', [KeranjangBelanjaController::class, 'index'])->name('keranjangbelanja.index');
Route::get('/keranjangbelanja/create', [KeranjangBelanjaController::class, 'create'])->name('keranjangbelanja.create');
Route::post('/keranjangbelanja', [KeranjangBelanjaController::class, 'store'])->name('keranjangbelanja.store');
Route::get('/keranjangbelanja/{id}', [KeranjangBelanjaController::class, 'show'])->name('keranjangbelanja.show');
Route::get('/keranjangbelanja/{id}/edit', [KeranjangBelanjaController::class, 'edit'])->name('keranjangbelanja.edit');
Route::put('/keranjangbelanja/{id}', [KeranjangBelanjaController::class, 'update'])->name('keranjangbelanja.update');
Route::delete('/keranjangbelanja/{id}', [KeranjangBelanjaController::class, 'destroy'])->name('keranjangbelanja.destroy');

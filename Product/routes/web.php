<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\brandController;
use App\Http\Controllers\productController;
use App\Http\Controllers\colorController;

Route::prefix('brand')->group(function () {
    Route::get('/', [brandController::class, 'brand'])->name('brand');
    Route::get('/new', [brandController::class, 'create'])->name('brand.create');
    Route::post('/store', [brandController::class, 'store'])->name('brand.store');
    Route::put('/update', [brandController::class, 'edit'])->name('brand.edit');
    Route::get('/update/{id}', [brandController::class, 'update'])->name('brand.update');
    Route::get('/delete/{id}', [brandController::class, 'delete'])->where('id', '[0-9]+')->name('brand.delete');
});
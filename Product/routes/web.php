<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\brandController;
use App\Http\Controllers\colorController;
use App\Http\Controllers\productController;

Route::prefix('brand')->group(function () {
    Route::get('/', [brandController::class, 'brand'])->name('brand');
    Route::get('/new', [brandController::class, 'create'])->name('brand.create');
    Route::post('/store', [brandController::class, 'store'])->name('brand.store');
    Route::put('/update', [brandController::class, 'edit'])->name('brand.edit');
    Route::get('/update/{id}', [brandController::class, 'update'])->name('brand.update');
    Route::get('/delete/{id}', [brandController::class, 'delete'])->where('id', '[0-9]+')->name('brand.delete');
});

Route::prefix('color')->group(function () {
    Route::get('/', [colorController::class, 'color'])->name('color');
    Route::get('/new', [colorController::class, 'create'])->name('color.create');
    Route::post('/store', [colorController::class, 'store'])->name('color.store');
    Route::put('/update', [colorController::class, 'edit'])->name('color.edit');
    Route::get('/update/{id}', [colorController::class, 'update'])->name('color.update');
    Route::get('/delete/{id}', [colorController::class, 'delete'])->where('id', '[0-9]+')->name('color.delete');
});
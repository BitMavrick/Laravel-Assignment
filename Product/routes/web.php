<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\brandController;
use App\Http\Controllers\colorController;
use App\Http\Controllers\categoryController;

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

Route::prefix('product')->group(function () {
    Route::get('/', [categoryController::class, 'category'])->name('category');
    Route::get('/details/{id}', [categoryController::class, 'details'])->name('category.details');
    Route::get('/new', [categoryController::class, 'create'])->name('category.create');
    Route::get('/add_color/{id}', [categoryController::class, 'addColor'])->name('category.addColor');
    Route::post('/add', [categoryController::class, 'add'])->name('category.add');
    Route::post('/store', [categoryController::class, 'store'])->name('category.store');
    Route::put('/update', [categoryController::class, 'edit'])->name('category.edit');
    Route::get('/update/{id}', [categoryController::class, 'update'])->name('category.update');
    Route::get('/delete/{id}', [categoryController::class, 'delete'])->where('id', '[0-9]+')->name('category.delete');
});
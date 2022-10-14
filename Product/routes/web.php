<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\brandController;
use App\Http\Controllers\productController;
use App\Http\Controllers\colorController;

Route::prefix('brand')->group(function () {
    Route::get('/', [brandController::class, 'brand'])->name('brand');
});
<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\studentsController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [studentsController::class, 'students'])->name('students');
Route::get('create/', [studentsController::class, 'create'])->name('create');
Route::post('store/', [studentsController::class, 'store'])->name('store');
Route::get('/{id}', [studentsController::class, 'details'])->where('id', '[0-9]+')->name('student.details');
Route::get('delete/{id}', [studentsController::class, 'delete'])->where('id', '[0-9]+')->name('student.delete');
Route::put('/update', [PublicController::class, 'edit'])->name('student.edit');
Route::get('update/{id}', [studentsController::class, 'update'])->where('id', '[0-9]+')->name('student.update');


// FAllback route
Route::fallback([studentsController::class, 'students']);
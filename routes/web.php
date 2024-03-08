<?php

use App\Http\Controllers\StudentController;
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

Route::get('/students', [StudentController::class, 'index'])->name('students');
Route::get('/students/store', [StudentController::class, 'store'])->name('store');
Route::get('/students/store/profile', [StudentController::class,'store_profile'])->name('storeProfile');
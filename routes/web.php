<?php

use App\Http\Controllers\MahasiswaController;
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

//Route::get('/', ["memanggil class contoller"::class, "panggil name function"]);

Route::get('/', [MahasiswaController::class,'home']);
Route::get('/edit', [MahasiswaController::class,'edit']);
Route::get('/add', [MahasiswaController::class,'add']);

Route::post('/add', [MahasiswaController::class, 'addData']);
Route::get('/delet/{id}', [MahasiswaController::class, 'deletData']);
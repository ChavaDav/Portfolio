<?php

use App\Http\Controllers\LibroController;
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

Route::get('/', [LibroController::class, 'libroMain']);
Route::get('/cambioTitulo', [LibroController::class, 'cambioTitulo']);
Route::get('/segundaparteA', [LibroController::class, 'segundaparteA']);
Route::get('/segundaparteB', [LibroController::class, 'segundaparteB']);
Route::get('/final/A', [LibroController::class, 'finalA']);
Route::get('/final/B', [LibroController::class, 'finalB']);

<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\ProgramsController;
use App\Http\Controllers\ReportController;
use App\Http\Controllers\StoriesController;
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

Route::get('/', [IndexController::class, 'index'])->name('home');
Route::get('/nosotros', [AboutController::class, 'index'])->name('nosotros');
Route::get('/nuestros-programas', [ProgramsController::class, 'index'])->name('nuestros-programas');
Route::get('/nuestras-historias', [StoriesController::class, 'index'])->name('nuestras-historias');
Route::get('/informes-gestion', [ReportController::class, 'index'])->name('informes-gestion');
Route::get('/contacto', [ContactController::class, 'index'])->name('contacto');

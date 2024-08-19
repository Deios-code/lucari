<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\ProgramsController;
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

Route::get('/', function () {
    return view('pages/index');
})->name('home');

route::get('/nosotros', function () {
    return view('pages/about');
})->name('nosotros');

// route::get('/nuestros-programas', function () {
//     return view('pages/programs');
// })->name('nuestros-programas');

// route::get('/nuestras-historias', function () {
//     return view('pages/stories');
// })->name('nuestras-historias');

// route::get('/nuestras-historias/titulo-en-slug', function () {
//     return view('pages/stories/show');
// })->name('nuestras-historias');

route::get('/informes-gestion', function () {
    return view('pages/report');
})->name('informes-gestion');

route::get('/contacto', function () {
    return view('pages/contact');
})->name('contacto');


Route::get('/nuestros-programas', [ProgramsController::class, 'index'])->name('nuestros-programas');
Route::get('/nuestras-historias', [StoriesController::class, 'index'])->name('nuestras-historias');

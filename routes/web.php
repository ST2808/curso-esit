<?php

use App\Http\Controllers\ProyectoController;
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

Route::get('/', [ProyectoController::class, 'index'] )->name('indexProyectos');
Route::get('/about', [ProyectoController::class, 'about'] )->name('aboutProyectos');
Route::delete('/destroy/{proyecto}', [ProyectoController::class, 'destroy'] )->name('destroyProyectos');

// Route::get('/update', function () {
//     return view('proyectos.update');
// });

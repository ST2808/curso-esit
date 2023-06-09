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
// Listar proyectos
Route::get('/', [ProyectoController::class, 'index'] )->name('indexProyectos'); // Vista
Route::post('/find', [ProyectoController::class, 'find'] )->name('findProyectos'); // método de búsqueda

// Sobre nosotros
Route::get('/about', [ProyectoController::class, 'about'] )->name('aboutProyectos'); // Vista

// Crear proyecto
Route::get('/create', [ProyectoController::class, 'create'] )->name('createProyectos'); // Vista
Route::post('/store', [ProyectoController::class, 'store'] )->name('storeProyectos'); // Método

// Actualizar un proyecto
Route::get('/update/{proyecto:NombreProyecto}', [ProyectoController::class, 'update'] )->name('updateProyectos'); // Vista
Route::post('/put/{proyecto}', [ProyectoController::class, 'put'] )->name('putProyectos'); // Método

// Eliminar un proyecto
Route::delete('/destroy/{proyecto}', [ProyectoController::class, 'destroy'] )->name('destroyProyectos');

// Route::get('/update', function () {
//     return view('proyectos.update');
// });

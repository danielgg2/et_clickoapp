<?php

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
Route::resource('cursos', 'CursoController');
Route::resource('estudiantes', 'EstudianteController');
Route::resource('documentos', 'DocumentoController');
Route::get('/cursos/{curso}/estudiantes/{estudiante}/agregar', 'CursoController@agregarEstudiante');


Route::get('/', function () {
    return view('welcome');
});

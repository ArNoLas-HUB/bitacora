<?php

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

Route::get('/', function () {
    return view('welcome');
});

Route::resource('docente', 'docenteController');
Route::resource('materia', 'MateriaController');
Route::resource('reportes', 'ReportesController');
Route::resource('horario', 'HorarioController');
Route::resource('bitacora', 'BitacoraController');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

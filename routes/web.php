<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
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
Route::POST('/celular/store','celularcontroller@store');
Route::get('/celular/create','celularcontroller@create');  
Route::patch('/celular/{id}/edit','celularcontroller@actualizar');
Route::get('/celular/index','celularcontroller@index');
Route::get('/celular/{id}', 'celularcontroller@eliminar');
Route::get('/celular/{id}/edit','celularcontroller@editar');


<?php

use Illuminate\Support\Facades\Route;

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
    return view('index');
});

Route::get('consulta', function () {
    return view('Consulta');
});
Route::get('blog', "ConsultasController@Carga_Blog");
Route::get('blog/{nombre}', "ConsultasController@Carga_Blog_unico");
Route::post('consulta_send', "ConsultasController@guardar_consulta");

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

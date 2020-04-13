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

header('Access-Control-Allow-Origin : *');
header('Access-Control-Allow-Headers : Content-Type,X-Auth-Token,Authorization,Origin');
header('Access-Control-Allow-Methods :GET, POST, PUT, DELETE, OPTIONS');

Route::get('/', function () {
    return view('welcome');
});
/*Route::get('/', 'personaController@index');*/
Route::delete('eliminar/{id}', 'personaController@eliminar')->name('user.eliminar');
Route::put('/editar/{id}', 'personaController@update')->name('user.update');
Route::resource('abm/persona','personaController');

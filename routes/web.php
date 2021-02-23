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

Route::view('/','inicio')->name('inicio');

Route::resource('productos','ProductoController');

Route::get('/files/{producto}','FileController@vistacrear')->name('files.crear');
Route::resource('files','FileController');

//Route::get('/productos','ProductoController@index')->name('productos.index');
//Route::get('/productos/crear','ProductoController@create')->name('productos.create');
//Route::get('/productos/{producto}/editar','ProductoController@edit')->name('productos.edit');
//Route::patch('/productos/{producto}','ProductoController@update')->name('productos.update');
//Route::get('/productos/{producto}','ProductoController@show')->name('productos.show');
//Route::post('/productos','ProductoController@store')->name('productos.store');
//Route::delete('/productos/{producto}','ProductoController@destroy')->name('productos.destroy');

Route::view('/servicios','servicios')->name('servicios');

Route::view('/contacto','contacto')->name('contacto');
Route::post('contacto','MensajesController@store')->name('mensajes.store');

Route::view('/quienes-somos','sobre')->name('sobre');

Route::view('/prueba','prueba')->name('prueba');
Route::view('perfil','perfil')->name('perfil');
Route::get('roles',function(){
    return App\Models\Role::with('user')->get();
});

Route::view('/carousel','carousel')->name('carousel');

Auth::routes();



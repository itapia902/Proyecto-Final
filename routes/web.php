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

/*Route::get('/', function () {
    $usuarios=App\Usuarios::all();
    return view('vistaIngresoClientes',compact('usuarios'));
});*/

Route::get('/vistaIngresarClientes','ControllerPaginas@InsertarClientes')->name('vista.clientes');

Route::get('/vistaVisualizarClientes','ControllerCrudClientes@index')->name('index.clientes');

Route::put('/vistaEditar1/{id}','ControllerCrudClientes@update')->name('update.clientes');

Route::get('/vistaEditar/{id}','ControllerCrudClientes@edit')->name('edit.clientes');

Route::get('/vitsEliminar/{id}', 'ControllerCrudClientes@destroy')->name('delete.clientes');

Route::post('/controllerClientesIngresar','ControllerCrudClientes@Store')->name('ingresar.clientes');

/*OBRAS*/

Route::get('/visualizarObras','ControllerCrudObras@index')->name('index.obras');

Route::get('/visualizarIngresObras','ControllerCrudObras@create')->name('create.obras');

Route::post('/crudObras','ControllerCrudObras@Store')->name('store.obras');

Route::get('/vistaEliminarObras/{id}', 'ControllerCrudObras@destroy')->name('delete.obras');

Route::get('/vistaEditarObras/{id}', 'ControllerCrudObras@edit')->name('edit.obras');

Route::get('/vistaActualizarObras/{id}', 'ControllerCrudObras@update')->name('update.obras');

/*Vista mis obras*/
Route::get('/vistaMisObras','ControllerCrudObras@MisObras')->name('misObras');

/*Vista individuales*/
Route::get('/vistaTatuajes','ControllerCrudObras@Tatuajes')->name('tatuajes');
Route::get('/vistaEsculturas','ControllerCrudObras@Esculturas')->name('esculturas');
Route::get('/vistaPinturas','ControllerCrudObras@Pinturas')->name('pinturas');
Route::get('/vistaRetratos','ControllerCrudObras@Retratos')->name('retratos');

/*Deshabilitar cuenta*/
Route::get('/deshabilitarCuenta','ControllerCrudClientes@Deshabilitar')->name('deshabilitar');
Route::get('/habilitarCuenta/{id}','ControllerCrudClientes@Habilitar')->name('habilitar');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/', function () {
    return view('welcome');
});

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/auth/redirect/{provider}', 'GoogleLoginController@redirect');
 Route::get('/callback/{provider}', 'GoogleLoginController@callback');
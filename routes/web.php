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

/*Route::get('/', function () {
    return view('admin');
});*/


Auth::routes();


Route::group(['middleware' => ['auth']], function(){
    Route::get('/admin/inicio', 'AdminController@inicio');
    // Clientes
    Route::match(['get','post'],'/admin/add_clientes','ClientesController@addClientes');
    Route::match(['get','post'],'/admin/edit_clientes/{id}','ClientesController@editClientes');
    Route::get('/admin/view_clientes','ClientesController@viewClientes');
    Route::match(['get','post'],'/admin/delete_clientes/{id}','ClientesController@deleteClientes');
});

Route::match(['get','post'],'/','AdminController@login');
Route::match(['get','post'],'/admin','AdminController@login');

Route::get('/logout', 'AdminController@logout');
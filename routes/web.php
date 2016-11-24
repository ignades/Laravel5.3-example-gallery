<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
// Route::get('/child', function () {
//    // return view('child');
// 	echo "hola";
// });

//Metodo GET
Route::get('/child', 'CustomerController@select_customers');
//Route::get('/child/{id}', 'CustomerController@select_customers2');
Route::get('/child/{id}', ['uses' =>'CustomerController@select_customers2']);
//Metodo POST
Route::get('/recibir', function () { return view('recibir');});
Route::post('/recibir',['uses'=>'PostController@posted']);
//Ajax
Route::get('/recibir_ajax', function () { return view('recibir_ajax');});
Route::post('/recibir_ajax',['uses'=>'AjaxController@posted']);
//Route::post('/recibir_ajax',['uses'=>'AjaxController@show_ajax']);
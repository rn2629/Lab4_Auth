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
/*
Route::get('/inventaires', 'InventaireController@index');
Route::get('/inventaires/ajout', 'InventaireController@ajout');
Route::post('/inventaires', 'InventaireController@modification');
Route::get('/inventaires/{id}', 'InventaireController@detail');
Route::delete('/inventaires/{id}', 'InventaireController@destroy');
Route::get('/inventaires/edit/{id}', 'InventaireController@edit');
//Route::get('/inventaires', 'InventaireController@update');






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
    return view('welcome');
});

Route::get('/Visualisation','VisualisationController@index');
Route::post('/adddocs','VisualisationController@store')->name('adddocs');
Route::get('/displayfiles','VisualisationController@display');
Route::get('/editfile/{id}','VisualisationController@editfile');
Route::put('/updatefiles/{id}','VisualisationController@update');
Route::get('/Authentification','VisualisationController@Authentification');
Route::get('/Profile','VisualisationController@Profile');
Route::get('/Accueil','VisualisationController@Accueil');
Route::get('/deletfile/{id}','VisualisationController@delet');
Route::get('/Viewfile/{id}','VisualisationController@VisualizationFile');
Route::get('/downloadfile/{image}','VisualisationController@downloadfile');
Route::get('/Search','VisualisationController@Search')->name('Search');

Route::get('import-excel', 'VisualisationController@index1');
Route::post('import-excel', 'VisualisationController@import');
Route::get('/PDF1','VisualisationController@PDF1');
Route::get('/PDF','VisualisationController@PDF');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

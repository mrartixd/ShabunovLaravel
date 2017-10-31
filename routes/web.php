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
     return view('welcome');
 });


 Route::get('/hello/{name?}', function ($name='Lavarel') {//в адрессной строке передача переменной name, если пустое поле, то изначальное значение Lavarel
     return "Hello ".$name;//отображение на сайте переменной name
 })->where('name','[A-Za-z]+');//проверка на ввод букв

Auth::routes();//авторизация

Route::get('/home', 'HomeController@index')->name('home');//переход к HomeController
Route::get('/', 'ShabunovController@index');//переход к HomeController
*/
Route::get('/', function () {
    return view('welcome');
   });
   Route::group(['middleware' => ['auth']], function() {
    Route::get('actors', 'HomeController@actors');
    Route::post('actors/add', 'ActorController@addActor');
    Route::get('actors/{actor}/edit', 'ActorController@editActor');
    Route::put('actors/{actor}/edit', 'ActorController@updateActor');
    Route::get('actors/{actor}/delete', 'ActorController@deleteActor');
   });
   Route::get('/home', 'HomeController@index');
   Route::get('films', 'HomeController@films');
   Route::get('films/{id}', 'HomeController@filmByID');
   Route::get('categories', 'HomeController@categories');
   Route::get('categories/{id}', 'HomeController@filmsByCategory');
   Auth::routes();
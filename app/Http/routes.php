<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/about', function () {
    return 'hello laravel';
});
Route::get('/blog' ,'BlogController@index');

Route::get('user/{id}' , function($id){
    return $id;
});

Route::get('product/{id?}',function($id = null){
   return $id;
})->where('id','[0-9]+');



Route::get('/hello', function () {
    return view('hello');
});

Route::resource('blog' ,'PostController');


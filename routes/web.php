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


// Route::get('role',[
// 'middleware' => 'Role:creater',
// 'uses' => 'TestController@index',
// ]);


Route::get('role','TestController@index');


Route::post('age','AgeTestController@age');

Route::get('birth','BirthController@index');


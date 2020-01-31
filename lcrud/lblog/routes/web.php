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

Route::delete('/student/delete/{id}', 'StudentController@delete')->name('student_delete');

Route::get('/', 'StudentController@index')->name('student_home');
Route::get('/student/create', 'StudentController@create')->name('student_create');
Route::get('/student/edit/{id}', 'StudentController@edit')->name('student_edit');
Route::get('test', 'TestController@index');

Route::post('/student/create', 'StudentController@store')->name('student_store');
Route::post('/student/update/{id}', 'StudentController@update')->name('student_update');


Route::get('/hello', function () {
    return 'Hello World';
});
Route::get('/user/{id}', function ($id) {
    return 'Your id is ' . $id;
});

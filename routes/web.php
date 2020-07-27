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


Auth::routes();

Route::get('/', 'HomeController@index')->name('home');

// Cursos
Route::get('/course/index', 'courseController@index')->name('course');;
Route::get('/course/new', 'courseController@create');
Route::post('/course/index', 'courseController@store');
Route::get('/course/delete/{id}', 'courseController@destroy');
Route::get('/course/edit/{id}', 'courseController@edit');
Route::post('/course/{id}', 'courseController@update');

// Alunos
Route::get('/students/index', 'studentsController@index')->name('index');
Route::get('/students/new', 'studentsController@create')->name('create');
Route::post('/students/save', 'studentsController@store')->name('store');
Route::get('/students/edit/{id}', 'studentsController@edit')->name('edit');
Route::put('/students/{id}', 'studentsController@update')->name('update');
Route::get('/students/delete/{id}', 'studentsController@destroy')->name('destroy');





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

Route::get('/', 'HomeController@root')->name('root');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::post('projects', 'ProjectsController@store')->name('projects.store');
Route::delete('projects/{id}', 'ProjectsController@destroy')->name('projects.destroy');
Route::patch('projects/{id}', 'ProjectsController@update')->name('projects.update');
Route::get('projects/{id}', 'ProjectsController@show')->name('projects.show');
Route::resource('tasks','TasksController');
Route::post('check/{id}', 'TasksController@check')->name('tasks.check');

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
Route::get('/student', 'Student\StudentController@list')->name('student.list');
Route::get('/student/create', 'Student\StudentController@create')->name('student.create');
Route::post('/student', 'Student\StudentController@submit')->name('student.store');
Route::get('/student/{id}', 'Student\StudentController@detail')->name('student.detail');
Route::get('/student/edit/{id}', 'Student\StudentController@edit')->name('student.edit');
Route::put('/student/{id}', 'Student\StudentController@update')->name('student.update');
Route::get('/student/delete/{id}', 'Student\StudentController@delete')->name('student.delete');

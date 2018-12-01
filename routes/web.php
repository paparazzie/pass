<?php


Route::get('/',"StudentController@index");
Route::get('/student-register',"StudentController@showStudentRegister");
Route::post('/student-register','StudentController@storeStudent');
Route::get('/student-login','StudentController@showLogin');
Route::post('/student-login','StudentController@login');
Route::get('/student-logout','StudentController@logout');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

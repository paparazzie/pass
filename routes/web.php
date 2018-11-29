<?php


Route::get('/',"PassController@index");
Route::get('/student-register',"StudentController@showStudentRegister");
Route::post('/student-register','StudentController@validateStudent');
Route::post('/student-register','StudentController@storeStudent');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

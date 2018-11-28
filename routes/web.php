<?php


Route::get('/',"PassController@index");
Route::get('/student-register',"PassController@showStudentRegister");
Route::post('/student-register','PassController@validateStudent');
Route::post('/student-register','PassController@storeStudent');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/
Route::group(["prefix"=>"admin","middleware" => "admin"],function(){
	
	Route::get('home/students/view','AdminHomeController@edit_profile')->name('view-students');
	Route::get('home/students/update','AdminHomeController@edit_profile')->name('update-students');
	Route::get('home/students/create','AdminHomeController@create_profile')->name('create-students');
	
	
});
Route::group(["prefix"=>"login",],function(){
	Route::resource('cms', 'AdminController');
	Route::resource('students', 'StudentsController');
});

Route::group(["prefix"=>"students"],function(){
	Route::resource('/','StudentsController');
});
Route::get('/', function(){
	return redirect()->route('cms.index');

});
Route::get('logout','AdminLogout@logout')->name('logout');
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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::group(['middleware'=>'auth'],function(){
	Route::get('user', 'UserController@index')->name('user_index');
	Route::get('admin-add', 'UserController@adminAdd')->name('user_admin_add');


	// job post 
	Route::get('job-pos', 'JobPostController@index')->name('job_post_index');
	Route::get('job-pos/create', 'JobPostController@create')->name('job_post_create');
	Route::get('job-pos/edit/{id}', 'JobPostController@edit')->name('job_post_edit');
	Route::get('job-pos/update/{id}', 'JobPostController@update')->name('job_post_update');
	Route::get('job-pos/delete/{id}', 'JobPostController@edit')->name('job_post_delete');
	// student profile
	Route::get('student-profile', 'StudentProfileController@index')->name('student_profile_index');
	Route::get('student-profile/create', 'StudentProfileController@create')->name('student_profile_create');
	Route::get('student-profile/edit/{id}', 'StudentProfileController@edit')->name('student_profile_edit');
	Route::get('student-profile/update/{id}', 'StudentProfileController@update')->name('student_profile_update');
	Route::get('student-profile/delete/{id}', 'StudentProfileController@edit')->name('student_profile_delete');
});

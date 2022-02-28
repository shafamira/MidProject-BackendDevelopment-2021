<?php
use Illuminate\Support\Facades\Route;

Route::get('/', 'HomeController@index')->name('home');
Route::get('enroll/login/{course}', 'EnrollmentController@handleLogin')->name('enroll.handleLogin');
Route::get('enroll/{course}', 'EnrollmentController@create')->name('enroll.create');
Route::post('enroll/{course}', 'EnrollmentController@store')->name('enroll.store');
Route::resource('courses', 'CourseController')->only(['index', 'show']);

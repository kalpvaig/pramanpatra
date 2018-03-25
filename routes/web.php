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

Route::post('/find', 'IndexController@find')->name('find');

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['prefix' => 'admin'], function () {
    
    Route::group(['prefix' => 'course'], function () {
        Route::get('/', 'CourseController@index');
        Route::get('/create','CourseController@create');
        Route::post('/create','CourseController@postCreate');
        Route::get('/{id}','CourseController@show');
        Route::get('/{id}/edit','CourseController@edit');
        Route::patch('/{id}','CourseController@postEdit');
        Route::delete('/{id}','CourseController@delete');
    });

    Route::group(['prefix' => 'certificate'], function () {
        Route::get('/', 'CertificateController@index');
        Route::get('/create','CertificateController@create');
        Route::post('/create','CertificateController@postCreate');
        Route::get('/{id}','CertificateController@show');
        Route::get('/{id}/edit','CertificateController@edit');
        Route::patch('/{id}','CertificateController@postEdit');
        Route::delete('/{id}','CertificateController@delete');
    });

    Route::group(['prefix' => 'student'], function () {
        Route::get('/', 'StudentController@index');
        Route::get('/create','StudentController@create');
        Route::post('/create','StudentController@postCreate');
        Route::get('/{id}','StudentController@show');
        Route::get('/{id}/edit','StudentController@edit');
        Route::patch('/{id}','StudentController@postEdit');
        Route::delete('/{id}','StudentController@delete');
    });

    Route::group(['prefix' => 'instructor'], function () {
        Route::get('/', 'InstructorController@index');
        Route::get('/create','InstructorController@create');
        Route::post('/create','InstructorController@postCreate');
        Route::get('/{id}','InstructorController@show');
        Route::get('/{id}/edit','InstructorController@edit');
        Route::patch('/{id}','InstructorController@postEdit');
        Route::delete('/{id}','InstructorController@delete');
    });
 });

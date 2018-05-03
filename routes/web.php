<?php

Route::get('/', function () {
    return view('welcome');
});

Route::group(['prefix' => 'dashboard', 'namespace' => 'Dashboard', 'as' => 'dashboard.'], function(){
    Route::get('home', ['uses' => 'HomeController@index', 'as' => 'home']);

    Route::resource('departments', 'DepartmentController');
    Route::resource('students', 'StudentController');

    $this->get('login', 'Auth\LoginController@showLoginForm')->name('login');
    $this->post('login', 'Auth\LoginController@login');
    $this->post('logout', 'Auth\LoginController@logout')->name('logout');

    Route::group(['prefix' => 'ajax', 'namespace' => 'Ajax', 'as' => 'ajax.'], function(){
        Route::get('departments.index', ['uses' => 'DepartmentController@index', 'as' => 'departments.index']);
        Route::get('students.index', ['uses' => 'StudentController@index', 'as' => 'students.index']);
    });
});

Route::get('/home', 'HomeController@index')->name('home');

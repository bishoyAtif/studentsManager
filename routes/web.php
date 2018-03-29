<?php

Route::get('/', function () {
    return view('welcome');
});

Route::group(['namespace' => 'Dashboard', 'as' => 'dashboard.'], function(){
    /**
    * Basic Authentication
    */
    $this->get('login', 'Auth\LoginController@showLoginForm')->name('login');
    $this->post('login', 'Auth\LoginController@login');
    $this->post('logout', 'Auth\LoginController@logout')->name('logout');
});

Route::get('/home', 'HomeController@index')->name('home');

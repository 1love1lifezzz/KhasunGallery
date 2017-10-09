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

Route::get('lang/{lang}', 'Frontend\LocaleController@lang');

Route::get('/', function () {
    return view('frontend.index');
});

/* --------------------- Admin ------------------- */
Route::group(['prefix' => config()->get('constants.BO_NAME')], function () {
    Route::get('login', 'Backend\LoginController@getIndex');
    Route::post('login/form', 'Backend\LoginController@postForm');
    Route::get('logout', 'Backend\LoginController@logout');
});
Route::group(['middleware'=>'admin','prefix' => config()->get('constants.BO_NAME')], function () {
    Route::get('/', function () { return view('backend.index'); });
    Route::resource('user-management','Backend\AdminController');
    Route::resource('role','Backend\AdminRoleController');
    Route::resource('page','Backend\AdminPageController');
    Route::resource('default','Backend\DefaultController');
    Route::post('check-username','Backend\CheckUsernameController@checkuser');
});

/* --------------------- Theme ------------------- */
Route::group(['prefix' => '_theme'], function () {
    Route::get('/',function(){
        return view('backend.theme_component.blank');
    });
    Route::get('form',function(){
        return view('backend.theme_component.form');
    });
    Route::get('list',function(){
        return view('backend.theme_component.list');
    });
});

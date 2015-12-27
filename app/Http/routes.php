<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', 'HomeController@index');


/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => ['web']], function () {
    //
});

Route::group(['middleware' => 'web'], function () {
    Route::auth();

    Route::get('/home', 'HomeController@index');
    Route::get('/home/charakter', 'HomeController@charakter');
    Route::get('/home/crew', 'HomeController@crew');
    Route::get('/home/einstellungen', 'HomeController@einstellungen');
    Route::get('/home/inventar', 'HomeController@inventar');
    Route::get('/home/marktplatz', 'HomeController@marktplatz');
    Route::get('/home/reisen', 'HomeController@reisen');
    Route::get('/home/training', 'HomeController@training');
});


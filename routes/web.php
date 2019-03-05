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
use Bugsnag\BugsnagLaravel\Facades\Bugsnag;
use RuntimeException;

Route::get('/testerror', function(){
	return Bugsnag::notifyException(new RuntimeException("Test error"));
});

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

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
    return view('frontend.layouts.app');
});

Route::group(['namespace' => 'Frontend'],function(){
  Route::get('/', 'HomeController@index');
  Route::post('komentar', 'HomeController@postComment');
});

Auth::routes();

Route::get('login', function(){
  return view('login');
});

Route::group(['prefix' => 'admin', 'namespace' => 'Admin'], function(){
  Route::get('dashboard', 'DashboardController@index');
  Route::get('logout', 'LoginController@logout');
  Route::get('comment', 'CommentController@index');
  Route::post('comment/approve/{id}', 'CommentController@approveComment');
  Route::post('comment/disapprove/{id}', 'CommentController@disapproveComment');
});

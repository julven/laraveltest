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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::view('/login', 'components.login');
Route::post('/login', 'AdminController@login');
Route::get('/logout', 'AdminController@logout');


Route::middleware(['authcheck'])->group( function () {
    Route::get('/home', 'UserController@home');
    Route::get('/list', 'UserController@list');
    Route::get('/account', 'UserController@account');
    Route::get('/user_form', 'UserController@userform');
    Route::post('/user_form', "UserController@store");
});

// Route::view('/home', 'components.home')->middleware('');

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

Route::get('/phpversion', function () {
    echo phpversion();
  });

Route::get('/URLRead/{a}', 'TypeAPost_Controller@MethodRead');
Route::get('/URLCreate/{a}', 'TypeAPost_Controller@MethodCreate');
Route::get('URLUpdate/{a}/{b}', 'TypeAPost_Controller@MethodUpdate');
Route::get('/URLDelete/{a}', 'TypeAPost_Controller@MethodDelete');

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

Route::get('/filemanager', function () {
    return view('filemanager');
});

Route::get('/editor', function () {
    return view('editor');
});

Route::get('/example', function () {
    return view('example');
});
// Route::group(['prefix' => 'laravel-filemanager', 'middleware' => ['web', 'auth']], function () {
//     '\vendor\uniSharp\LaravelFilemanager\Lfm::routes()';});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/example', 'chart@chartjs');

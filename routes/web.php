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

use Inertia\Inertia;

Route::get('/', function () {
    return Inertia::render('Welcome', [
        'foo' => 'bar',
    ]);
});
Route::get('/about', function () {
    return Inertia::render('About', [
        'foo' => 'About',
    ]);
});
Route::get('/contact', function () {
    return Inertia::render('Contact', [
        'foo' => 'Contact',
    ]);
});

Route::get('users', 'UserController@index')->name('users.index');
Route::get('users/create', 'UserController@create');
Route::post('create', 'UserController@store');
Route::get('user/{user}/edit', 'UserController@edit');
Route::patch('user/{user}/update', 'UserController@update');
Route::delete('user/{user}/delete', 'UserController@destroy');

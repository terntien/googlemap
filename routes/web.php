<?php
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

Auth::routes();
Route::resource('towers', 'TowerController');

Route::get('/home', 'HomeController@index')->name('home');

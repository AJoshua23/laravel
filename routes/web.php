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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/matches', 'MatchesController@index');
//Route::get('/matches/{match}', 'MatchesController@show');
Route::get('/matches/create', 'MatchesController@create');
Route::post('/matches','MatchesController@store');

Route::get('/proposals', 'ProposalsController@index');
Route::get('/proposals/create', 'ProposalsController@create');
Route::post('/proposals', 'ProposalsController@store');


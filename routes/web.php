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
Route::group(['middleware' => 'auth'], function() {
  Route::get('/admin', 'AdminsController@index')->name('admin')->middleware('admin');
  Route::get('/admin/player/add','PlayersController@create')->name('player.add')->middleware('admin');
  Route::post('/admin/player/store', 'PlayersController@store')->name('player.store');
  Route::get('/admin/team/add', 'TeamsController@create')->name('team.add')->middleware('admin');
  Route::post('/admin/team/store', 'TeamsController@store')->name('team.store');
  Route::get('/admin/match/add', 'MatchesController@create')->name('match.add')->middleware('admin');
  Route::post('/admin/match/store', 'MatchesController@store')->name('match.store');
  Route::get('/teams', 'TeamsController@index')->name('teams');
  Route::get('/players', 'PlayersController@index')->name('players');
  Route::get('/matches', 'MatchesController@index')->name('matches');
  Route::get('/book/match/{id}', 'BookingsController@book')->name('match.book');
  Route::post('/book/match/store', 'BookingsController@store')->name('book.store');
  Route::get('/bookings', 'BookingsController@index')->name('bookings');
});

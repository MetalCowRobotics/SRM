<?php
use Log;
use Auth;
/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
  return view('welcome');
  if (Auth::check()) {
    Log::info('it works ya know');
  }   
});

Route::resource('organizations', 'OrganizationController', ['except' => [
    'index'
  ]]);

Route::resource('organizations.users', 'UserController');

Route::resource('organizations.sponsors', 'SponsorController');

Route::resource('organizations.sponsors.donations', 'SponsorDonationController');

Route::resource('organizations.sponsors.contacts', 'SponsorContactController');

Route::resource('organizations.sponsors.correspondents', 'SponsorCorrespondentController');

Route::resource('organizations.sponsors.presentations', 'SponsorPresentationController');

Route::get('login/slack', 'Auth\AuthController@handleProviderCallback');

Route::get('login/slack-redir', 'Auth\AuthController@redirectToProvider');

Route::get('/home', 'HomeController@index');


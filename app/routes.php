<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/


//Home
Route::get('/', function()
{
	return View::make('home');
});

//About Me

Route::get('/about-me', function(){
	return View::make('about_me');
});

//Contact Me

Route::get('/get-in-touch', function(){
	return View::make('get_in_touch');
});

//About this Site
Route::get('/about-this-site', function(){
	return View::make('about_this_site');
});


?>
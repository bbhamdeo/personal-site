<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
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

//Resume

Route::get('/resume', function(){
	return View::make('resume');
});

//Stuff I like

Route::get('/stuff-i-like', function (){
	return View::make('stuff_i_like');
});

//Contact Me

Route::get('/get-in-touch', function(){
	return View::make('get_in_touch');
});

//About this Site
Route::get('/about-this-site', function(){
	return View::make('about_this_site');
});

//404 Error
App::missing(function()
{
    return View::make("404_error");
});

?>

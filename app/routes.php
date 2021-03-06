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

Route::get('/', function() {
	return View::make('test', array('name' => 'TwigBridge'));
});

Route::get('child', function() {

    View::composer('app.child', function($view)
    {
        $view->with('spoon', 'spoons');
    });

    return View::make('app.child');
});
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

Route::get('/', array('uses' => 'HomeController@index',
					  'as' => 'index')
);

Route::get('/login',array('uses' => 'LogConotrller@log',
						  'as' => 'login')
);

Route::group(array('before' => 'login_only'), function()
{
	Route::get('/appeal', array('uses' => 'AppealController@appeal',
								'as' => 'appeal')
	);
});

Route::get('/fooooo',array('uses' => 'HomeController@showWelcome'));

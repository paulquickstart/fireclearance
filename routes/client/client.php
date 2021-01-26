<?php

use App\Role;

Route::group(['middleware' => ['auth.client'] ], function()
{
	Route::group(['prefix' => 'user'], function()
    {
    	Route::group(['middleware' => ['role:'.Role::byId( Role::CLIENT )]], function()
        {
			Route::resource('client', 'ClientController', ['index','store', 'show', 'update', 'destroy']);
			Route::resource('clearance', 'ClearanceController', ['index','store', 'show', 'update', 'destroy']);
		});	
	});	 
});

<?php
use App\Role;

Route::group( ['middleware' => [ 'auth.admin' ] ], function()
{
	Route::group(['prefix' => 'user'], function()
    {
    	// Route::get('/admin/profilae', ['as' => 'admin.profile', 'uses' => 'AdminController@showMyProfile']);
        Route::group(['middleware' => ['role:'.Role::byId(Role::SUPER_ADMIN)]], function()
        {
        	Route::resource('super-admin', 'SuperAdminController', ['only' => ['index','store', 'show', 'update', 'destroy']]);	
        	Route::resource('ajax/super-admin', 'Ajax\SuperAdminController', ['index','store', 'show', 'update', 'destroy']);
        	Route::put('ajax/super-admin-password/{id}', ['as' => 'super-admin.password', 'uses' => 'Ajax\SuperAdminController@updatePassword']);	
        });	
        Route::group(['middleware' => ['role:'.Role::byId(Role::ADMIN)]], function()
        {
            Route::resource('admin', 'SuperAdminController', ['only' => ['index','store', 'show', 'update', 'destroy']]);    
        }); 


    });



});
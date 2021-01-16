<?php

Route::get('login', ['as' => 'login', 'uses' => 'LoginController@login' ]);
Route::post('login', ['as' => 'login.auth', 'uses' => 'LoginController@authenticate' ]);

Route::get('/logout', ['as' => 'logout', 'uses' => 'LoginController@logout']);

Route::get('registration', ['as' => 'registration.index', 'uses' => 'UserController@registration' ]);
Route::post('registration', ['as' => 'registration.store', 'uses' => 'UserController@registration' ]);
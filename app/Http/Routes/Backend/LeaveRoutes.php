<?php

	Route::group(['middleware' => 'staff'], function () {

		//Apply
		Route::get('leave/apply', 'LeaveController@create')->name('backend.leave.apply');
		Route::post('leave/apply', 'LeaveController@store')->name('backend.leave.apply');

		//My Leaves
		Route::get('leave/list', 'LeaveController@index')->name('backend.leave.list');
		Route::get('leave/{id}', 'LeaveController@show');
		Route::post('leave/{id}/generate', 'LeaveController@generate')->name('backend.leave.generate');
		Route::get('leave/{id}/generate', 'LeaveController@generate')->name('backend.leave.generate');

	});

	Route::group(['middleware' => 'admin'], function () {
		//Pending Apllications
		Route::get('application/list', 'ApplicationController@index')->name('backend.application.list');
		Route::get('application/{id}', 'ApplicationController@show')->name('backend.application.details');
		Route::get('application/{id}/approve', 'ApplicationController@approve')->name('backend.application.approve');
		Route::get('application/{id}/reject', 'ApplicationController@reject')->name('backend.application.reject');
	});

	// Route::group(['middleware' => 'supervisor'], function () {

	// 	//Apply
	// 	Route::get('leave/apply', 'LeaveController@create')->name('backend.leave.apply');
	// 	Route::post('leave/apply', 'LeaveController@store')->name('backend.leave.apply');

	// 	//My Leaves
	// 	Route::get('leave/list', 'LeaveController@index')->name('backend.leave.list');
	// 	Route::get('leave/{id}', 'LeaveController@show');
	// 	Route::post('leave/{id}/generate', 'LeaveController@generate')->name('backend.leave.generate');

	// 	//Pending Apllications
	// 	Route::get('application/list', 'ApplicationController@index')->name('backend.application.list');
	// 	Route::get('application/{id}', 'ApplicationController@show')->name('backend.application.details');
	// 	Route::post('application/{id}/verify', 'ApplicationController@update')->name('backend.application.verify');
	// });
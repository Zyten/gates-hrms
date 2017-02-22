<?php

	Route::group(['middleware' => 'auth'], function () {

		Route::get('/', function () { return redirect()->route('backend.dashboard'); });

		Route::get('dashboard', 'DashboardController@index')->name('backend.dashboard');

	});
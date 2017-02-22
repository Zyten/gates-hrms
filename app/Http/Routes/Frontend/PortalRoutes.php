<?php
	
	Route::group(['middleware' => 'guest'], function () {
		Route::get('/', function () {
			return view('portal.index');
		});
	});

	Route::group(['middleware' => 'auth'], function () {
		Route::group(['namespace' => 'User'], function() {
			Route::get('dashboard', 'DashboardController@index')->name('frontend.user.dashboard');
			Route::get('profile/edit', 'ProfileController@edit')->name('frontend.user.profile.edit');
			Route::patch('profile/update', 'ProfileController@update')->name('frontend.user.profile.update');
		});
	});
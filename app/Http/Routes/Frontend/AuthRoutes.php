<?php

	Route::group(['middleware' => 'guest'], function () {

		Route::get('/', function () { return redirect()->route('auth.login'); });

		// Authentication Routes
		Route::get('login', 'AuthController@showLoginForm')->name('auth.login');
		Route::post('login', 'AuthController@login')->name('auth.login');

		// Socialite Routes
		Route::get('login/{provider}', 'AuthController@loginThirdParty')->name('auth.provider');

		// Registration Routes
		Route::get('register', 'AuthController@showRegistrationForm')->name('auth.register');
		Route::post('register', 'AuthController@register')->name('auth.register');

		// Confirm Account Routes
		Route::get('register/confirm/{token}', 'AuthController@confirmAccount')->name('account.confirm');
		Route::get('register/confirm/resend/{user_id}', 'AuthController@resendConfirmationEmail')->name('account.confirm.resend');

		// Password Reset Routes
		Route::get('password/reset/{token?}', 'PasswordController@showResetForm')->name('auth.password.reset');
		Route::post('password/reset', 'PasswordController@reset')->name('auth.password.reset');
		Route::post('password/email', 'PasswordController@sendResetLinkEmail')->name('auth.password.email');
	});

	Route::group(['middleware' => 'auth'], function () {
		Route::get('logout', 'AuthController@logout')->name('auth.logout');

		// Change Password Routes
		Route::get('password/change', 'PasswordController@showChangePasswordForm')->name('auth.password.change');
		Route::post('password/change', 'PasswordController@changePassword')->name('auth.password.change');
	});
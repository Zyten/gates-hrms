<?php

	Route::group(['middleware' => 'auth'], function () {

		//Configuration
		//Config Staff
		Route::get('config/staff/list', 'StaffController@index')->name('backend.staff.index');

		Route::get('config/staf/{id}', 'StaffController@show')->name('backend.staff.view');

		Route::get('config/staf/{id}/add', 'StaffController@create')->name('backend.staff.add');
		Route::post('config/staf/{id}/add', 'StaffController@store')->name('backend.staff.add');

		Route::get('config/staf/{id}/edit', 'StaffController@edit')->name('backend.staff.edit');
		Route::get('config/staf/{id}/edit', 'StaffController@update')->name('backend.staff.edit');

		Route::get('config/staf/{id}/delete', 'StaffController@destroy')->name('backend.staff.delete');

		//Config Leave Types
		Route::get('config/leave-type/list', 'LeaveTypeController@index')->name('backend.leave-type.index');

		Route::get('config/leave-type/{id}', 'LeaveTypeController@show')->name('backend.leave-type.view');

		Route::get('config/leave-type/{id}/add', 'LeaveTypeController@create')->name('backend.leave-type.add');
		Route::post('config/leave-type/{id}/add', 'LeaveTypeController@store')->name('backend.leave-type.add');

		Route::get('config/leave-type/{id}/edit', 'LeaveTypeController@edit')->name('backend.leave-type.edit');
		Route::get('config/leave-type/{id}/edit', 'LeaveTypeController@update')->name('backend.leave-type.edit');

		Route::get('config/leave-type/{id}/delete', 'LeaveTypeController@destroy')->name('backend.leave-type.delete');

	});
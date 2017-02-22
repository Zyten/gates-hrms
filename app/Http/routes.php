<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::group(['domain' => 'hrms.gates.my'], function () {

    Route::group(['namespace' => 'Auth'], function () {
        require (__DIR__ . '/Routes/Frontend/AuthRoutes.php');
    });

    /**
     * Backend Routes
     * Namespaces indicate folder structure
     * Admin middleware groups web, auth, and routeNeedsPermission
     */
    Route::group(['namespace' => 'Backend'], function () {

        foreach(File::allFiles( __DIR__.'/Routes/Backend' ) as $partial)
        {
            require_once $partial->getPathName();
        }

    });
});

Route::group(['domain' => 'zyten.dev'], function() {
    /**
     * Portal Routes
     * Namespaces indicate folder structure
     */
    Route::group(['namespace' => 'Frontend'], function () {
        require (__DIR__ . '/Routes/Frontend/PortalRoutes.php');
    });
});



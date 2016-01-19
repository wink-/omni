<?php

Route::group(['middleware' => 'web'], function() {
    /**
     * Switch between the included languages
     */
    Route::group(['namespace' => 'Language'], function () {
        require (__DIR__ . '/Routes/Language/Language.php');
    });

    /**
     * Frontend Routes
     * Namespaces indicate folder structure
     */
    Route::group(['namespace' => 'Frontend'], function () {
        require (__DIR__ . '/Routes/Frontend/Frontend.php');
        require (__DIR__ . '/Routes/Frontend/Access.php');
    });
});

/**
 * Backend Routes
 * Namespaces indicate folder structure
 * Admin middleware groups web, auth, and routeNeedsPermission
 */
Route::group(['namespace' => 'Backend', 'prefix' => 'admin', 'middleware' => 'admin'], function () {
    /**
     * These routes need view-backend permission
     * (good if you want to allow more than one group in the backend,
     * then limit the backend features by different roles or permissions)
     *
     * Note: Administrator has all permissions so you do not have to specify the administrator role everywhere.
     */
<<<<<<< HEAD
    Route::group(['namespace' => 'Backend'], function () {
        Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function () {

            /**
             * These routes need view-backend permission
             * (good if you want to allow more than one group in the backend,
             * then limit the backend features by different roles or permissions)
             *
             * Note: Administrator has all permissions so you do not have to specify the administrator role everywhere.
             */
            Route::group(['middleware' => 'access.routeNeedsPermission:view-backend'], function () {
                require (__DIR__ . '/Routes/Backend/Dashboard.php');
                require (__DIR__ . '/Routes/Backend/Access.php');
                require (__DIR__ . '/Routes/Backend/LogViewer.php');
            });
        });
    });
});
Route::group(['middleware' => ['web']], function () {
	Route::resource('customers', 'Frontend\CustomersController');
});
=======
    require (__DIR__ . '/Routes/Backend/Dashboard.php');
    require (__DIR__ . '/Routes/Backend/Access.php');
    require (__DIR__ . '/Routes/Backend/LogViewer.php');
});
>>>>>>> 7869a1031f94f84cfb52219f13886d87e1f4f40c

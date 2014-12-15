<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
 */

Route::get('/', 'HomeController@showHomepage');

Route::get('login', array('as' => 'get_login', 'uses' => 'AuthController@showLogin'));
Route::get('logout', array('as' => 'get_logout', 'uses' => 'AuthController@logout'));
Route::get('signup', array('as' => 'get_signup', 'uses' => 'AuthController@showSignUp'));

Route::get('profile/{id}', array('as' => 'show_profile', 'uses' => 'UserController@showProfile'));

Route::group(array('before' => 'csrf'), function () {
    Route::post('login', array('as' => 'post_login', 'uses' => 'AuthController@tryLogin'));
    Route::post('signup', array('as' => 'post_signup', 'uses' => 'AuthController@trySignUp'));
});

/*
|--------------------------------------------------------------------------
| All routes in this group require a signed in user
|--------------------------------------------------------------------------
 */
Route::group(array('before' => 'auth'), function () {
    Route::get('dashboard', array('as' => 'get_dashboard', 'uses' => 'DashboardController@showDashboard'));
    Route::get('records', array('as' => 'get_records', 'uses' => 'RecordController@showRecords'));
    Route::get('user/settings', array('as' => 'get_settings', 'uses' => 'UserController@showSettings'));

    Route::group(array('before' => 'csrf'), function () {
        Route::post('user/settings/email', array('as' => 'change_email', 'uses' => 'UserController@changeEmail'));
        Route::post('user/settings/password',
            array('as' => 'change_password', 'uses' => 'UserController@changePassword'));
        Route::post('records/add', array('as' => 'add_record', 'uses' => 'RecordController@addRecord'));
        Route::post('records/delete', array('as' => 'delete_record', 'uses' => 'RecordController@deleteRecord'));
    });
});

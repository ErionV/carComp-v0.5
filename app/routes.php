<?php

/*
 * Home page (GET)
 */
Route::get('/', [
    'as'    => 'home',
    'uses'  => 'HomeController@home'
]);

/*
 * Show user profile (GET)
 */
Route::get('/user/{username}', [
    'as'        => 'profile_user',
    'uses'      => 'profileController@user'
]);

/*
 * Authenticated group
 */
Route::group(['before' => 'auth'], function()
{
    /*
     * CSRF protection group
     */
    Route::group(['before' => 'csrf'], function()
    {
        /*
        * Change Password (POST)
        */
        Route::post('/account/changePassword', [
            'as'        => 'account_change_password_post',
            'uses'      => 'AccountController@postChangePassword'
        ]);
    });

    /*
     * Log out (GET)
     */
    Route::get('/account/logout', [
        'as'        => 'account_logout',
        'uses'      => 'accountController@getLogout'
    ]);

    /*
     * Change Password (GET)
     */
    Route::get('/account/changePassword', [
        'as'        => 'account_change_password',
        'uses'      => 'AccountController@getChangePassword'
    ]);
});


/*
 * Unauthenticated group
 */
Route::group(['before' => 'guest'], function()
{
    /*
     * CSRF protection group
     */
    Route::group(['before' => 'csrf'], function()
    {
        /*
         * Login user (POST)
         */
        Route::post('/account/login', [
            'as'    => 'account_login_post',
            'uses'  => 'AccountController@postLogin'
        ]);

        /*
         * Register account (POST)
         */
        Route::post('/account/register', [
            'as'    => 'account_register_post',
            'uses'  => 'AccountController@postregister'
        ]);

        /*
         * Forgot password (POST)
         */
        Route::post('/account/forgot-password', [
            'as'    => 'account_forgot_password_post',
            'uses'  => 'AccountController@postForgotPassword'
        ]);


    });

    /*
     * Log in Form (GET)
     */
    Route::get('/account/login', [
        'as'    => 'account_login',
        'uses'  => 'AccountController@getLogin'
    ]);

    /*
     * Register account (GET)
     */
    Route::get('/account/register', [
        'as'    => 'account_register',
        'uses'  => 'AccountController@getregister'
    ]);

    /*
     * Activate user using code (GET)
     */
    Route::get('/account/activate/{code}', [
        'as'    => 'account_activate',
        'uses'  => 'AccountController@getActivate'
    ]);

    /*
     * Forgot password (GET)
     */
    Route::get('/account/forgot-password', [
        'as'    => 'account_forgot_password',
        'uses'  => 'AccountController@getForgotPassword'
    ]);

    /*
     * Reset password (GET)
     */
    Route::get('/account/recover/{code}', [
        'as'    => 'account_recover_password',
        'uses'  => 'AccountController@getRecoverPassword'
    ]);

});
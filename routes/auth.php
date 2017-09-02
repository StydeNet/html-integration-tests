<?php

Route::group(['prefix' => 'auth'], function () {
    Route::get('login', 'Auth\AuthController@getLogin');

    // Authentication routes...
    Route::get('login', 'Auth\LoginController@getLogin');
    Route::post('login', 'Auth\LoginController@postLogin');
    Route::get('logout', 'Auth\LoginController@getLogout');

    // Registration routes...
    Route::get('register', 'Auth\RegisterController@getRegister');
    Route::post('register', 'Auth\RegisterController@postRegister');

    // Password reset link request routes...
    Route::get('password/email', 'Auth\ForgotPasswordController@getEmail');
    Route::post('password/email', 'Auth\ForgotPasswordController@postEmail');

    // Password reset routes...
    Route::get('password/reset/{token}', 'Auth\ResetPasswordController@getReset');
    Route::post('password/reset', 'Auth\ResetPasswordController@postReset');
});
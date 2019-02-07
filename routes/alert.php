<?php

Route::group(['prefix' => 'alert/'], function () {

    Route::get('success', function () {
        Alert::success('The facade works!');
        Alert::message('This is good!', 'success') ;
        Alert::success('Some information')->details('A detailed description goes here.');
        Alert::success()->view('partials.custom-alert');
        return view('alert');
    });

    Route::get('all', function () {
        Alert::success('This is good!');
        Alert::info('This is just a message');
        Alert::warning("Something is not OK");
        Alert::danger('Danger Danger!');
        return view('alert');
    });

    Route::get('cta', function () {
        Alert::info('Your account is about to expire')
            ->details('A lot of knowledge still waits for you:')
            ->items([
                'Laravel courses',
                'OOP classes',
                'Access to real projects',
                'Support',
                'And more'
            ])
            ->button('Renew now!', '#', 'primary')
            ->button('Take me to your leader', 'http://google.com', 'info');
        return view('alert');
    });

    Route::get('func', function () {
        alert('This is a success!');
        alert('This is a warning', 'warning');
        alert('This is the end', 'danger');
        alert('This is just a test', 'info');
        return view('alert');
    });

    Route::get('from', function () {
        alert('We are going to redirect', 'info');
        return redirect('alert/to');
    });

    Route::get('to', function () {
        alert('Redirect successful!');
        return view('alert');
    });
});

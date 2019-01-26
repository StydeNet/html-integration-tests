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

Route::get('/', function () {
    return view('welcome');
});

Route::get('home', function() {
    return view('home');
});

$files = ['alert', 'forms'];

foreach ($files as $file) {
    require __DIR__ . "/$file.php";
}
Auth::routes();

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

Route::group(['middleware' => ['web']], function () {
    Route::get('/', function () {
        $transactions = App\Transaction::all();
        return view('landing', ['transactions' => $transactions]);
    });
    Route::get('wallet/buyer', function () {
        $transactions = App\Transaction::all();
        return view('wallet.buyer', ['transactions' => $transactions]);
    });
    Route::get('wallet/vendor', function () {
        return view('wallet.vendor');
    });
    Route::get('login', function () {
        return view('login');
    });
});
<?php

Route::get('/', 'CurrencyController@dashboard')->name('currency.dashboard');
Route::post('/get-currency', 'CurrencyController@getCurrency')->name('currency.get');

<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'BasePageController@showMainView')->name('main');
Route::get('/oferta', 'BasePageController@showOfferView')->name('offer');
Route::get('/realizacje', 'BasePageController@showRealizationView')->name('realization');
Route::get('/kontakt', 'BasePageController@showContactView')->name('contact');
Route::post('/kontakt', 'BasePageController@sendMessage')->middleware('throttle:2');
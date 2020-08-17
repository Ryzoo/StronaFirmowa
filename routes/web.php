<?php

use Illuminate\Support\Facades\Route;
use TCG\Voyager\Facades\Voyager;

Route::get('/', 'BasePageController@showMainView')->name('main');
Route::get('/oferta', 'BasePageController@showOfferView')->name('offer');
Route::get('/realizacje', 'BasePageController@showRealizationView')->name('realization');
Route::get('/kontakt', 'BasePageController@showContactView')->name('contact');
Route::post('/kontakt', 'BasePageController@sendMessage')->middleware('throttle:2');

Route::get('/blog', 'BasePageController@showBlogView')->name('blog');
Route::get('/blog/{post:slug}', 'BasePageController@showBlogPostView')->name('post');


Route::group(['prefix' => 'admin'], static function () {
    Voyager::routes();
});

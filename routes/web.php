<?php

use Illuminate\Support\Facades\Route;

Route::get('/', static function () { return view('pages.welcome'); })->name('main');
Route::get('/oferta', static function () { return view('pages.offer'); })->name('offer');
Route::get('/realizacje', static function () { return view('pages.realization'); })->name('realization');
Route::get('/kontakt', static function () { return view('pages.contact'); })->name('contact');
<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

Route::get('/plan', function () {
    return view('Training_plan');
})->name('plan');

Route::get('/calendar', function () {
    return view('Calendar');
})->name('calendar');


Route::get('/academic', function () {
    return view('Academic_mobility');
})->name('academic');


Route::get('/message', function () {
    return view('message');
})->name('message');

Route::get('/settings', function () {
    return view('Settings');
})->name('settings');

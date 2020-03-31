<?php

Route::get('/', function () {
    return view('home');
});
Route::get('/login', function () {
    return view('login');
});
Route::get('/registration', function () {
    return view('registration');
});

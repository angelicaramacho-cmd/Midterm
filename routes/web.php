<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

Route::get('/', function () {
    return view('home');
});

Route::get('/register', function () {
    return view('register');
});

Route::post('/display', function (Request $request) {
    return view('result', [
        'name'   => $request->input('name'),
        'age'    => $request->input('age'),
        'course' => $request->input('course'),
        'email'  => $request->input('email'),
        'motto'  => $request->input('motto'),
    ]);
});

Route::get('/about', function () {
    return view('about');
});
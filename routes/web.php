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
    $data = [
        'fullname' => $request->input('fullname', 'N/A'),
        'age'      => $request->input('age', 'N/A'),
        'course'   => $request->input('course', 'N/A'),
        'email'    => $request->input('email', 'N/A'),
        'motto'    => $request->input('motto', 'No motto provided.'),
    ];

    return view('display', compact('data'));
});

Route::get('/about', function () {
    return view('about');
});
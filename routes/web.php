<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/createmenu', function () {
    return view('createmenu');
});

Route::get('/menu', function () {
    return view('menu');
});


Route::post('/login', [Controller::class, 'login']);

Route::get('/logout', [Controller::class, 'logout']);

Route::post('/createmenu', [Controller::class, 'createmenu']);

Route::post('/menu', [Controller::class, 'getMenu']);
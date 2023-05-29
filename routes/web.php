<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('index');
});

Route::get('/belo-horizonte', function () {
    return view('belo-horizonte');
});

Route::get('/vitoria', function () {
    return view('vitoria');
});

Route::get('/florianopolis', function () {
    return view('florianopolis');
});


Route::get('/curitiba', function () {
    return view('curitiba');
});

Route::get('/sao-paulo', function () {
    return view('sao-paulo');
});

Route::get('/rio-de-janeiro', function () {
    return view('rio-de-janeiro');
});

Route::get('/manaus', function () {
    return view('manaus');
});

Route::get('/goiania', function () {
    return view('goiania');
});

Route::get('/cuiaba', function () {
    return view('cuiaba');
});

Route::get('/porto-alegre', function () {
    return view('porto-alegre');
});


Route::get('/brasilia', function () {
    return view('brasilia');
});

Route::get('/recife', function () {
    return view('recife');
});





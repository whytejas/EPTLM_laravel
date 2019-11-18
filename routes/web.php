<?php

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
    return view('main');
});

Route::get('/main', function () {
    return view('main');
});


Route::get('/about', function () {

    return view('about');
});

Route::get('/contact', function () {
    return view('contact');
});


Route::get('/form', function () {
    return view('form');
});



Route::get('/privacy', function () {
    return view('privacy');
});

Route::get('/news', function () {
    return view('news');
});

Route::get('/volunteer', function () {
    return view('volunteer');
});






Route::post('/form', 'Controller@formSubmit');







<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/variable', function () {
    return view('variable');
});

Route::get('/primitives_and_objects', function () {
    return view('primitives_and_objects');
});

Route::get('/function', function () {
    return view('function');
});

Route::get('/array', function () {
    return view('array');
});


Route::get('/test', function () {
    return view('test');
});


Route::get('/navigation', function () {
    return view('navigation');
});

Route::get('/table_navigation', function () {
    return view('table_navigation');
});

Route::get('/searching-dom', function () {
    return view('searching_DOM');
});

Route::get('/html-insertion-methods', function () {
    return view('html_insertion_methods');
});
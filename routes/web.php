<?php

use Illuminate\Support\Facades\Route;


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

Route::get('/insertAdjacentHTML', function () {
    return view('insertAdjacentHTML');
});

Route::get('/changing-HTML-classes', function () {
    return view('changing_HTML_classes');
});

Route::get('/setInterval-&-setTimeout', function () {
    return view('setInterval_&_setTimeout');
});

Route::get('/browser-events', function () {
    return view('browser_events');
});


Route::get('/read-more', function () {
    return view('read_more');
});

Route::get('/promises', function () {
    return view('promises');
});

Route::get('/then-&-catch', function () {
    return view('then_and_catch');
});
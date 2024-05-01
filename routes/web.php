<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;

/*
|--------------------------------------------------------------------------
| Javascript
|--------------------------------------------------------------------------
*/

Route::get('/', function () {
    return view('practice/welcome');
});

Route::get('/variable', function () {
    return view('practice/variable');
});

Route::get('/primitives_and_objects', function () {
    return view('practice/primitives_and_objects');
});

Route::get('/function', function () {
    return view('practice/function');
});

Route::get('/array', function () {
    return view('practice/array');
});

Route::get('/test', function () {
    return view('practice/test');
});

Route::get('/navigation', function () {
    return view('practice/navigation');
});

Route::get('/table_navigation', function () {
    return view('practice/table_navigation');
});

Route::get('/searching-dom', function () {
    return view('practice/searching_DOM');
});

Route::get('/html-insertion-methods', function () {
    return view('practice/html_insertion_methods');
});

Route::get('/insertAdjacentHTML', function () {
    return view('practice/insertAdjacentHTML');
});

Route::get('/changing-HTML-classes', function () {
    return view('practice/changing_HTML_classes');
});

Route::get('/setInterval-&-setTimeout', function () {
    return view('practice/setInterval_&_setTimeout');
});

Route::get('/browser-events', function () {
    return view('practice/browser_events');
});

Route::get('/read-more', function () {
    return view('practice/read_more');
});

Route::get('/promises', function () {
    return view('practice/promises');
});

Route::get('/then-&-catch', function () {
    return view('practice/then_and_catch');
});

Route::get('/promise-API', function () {
    return view('practice/promise_API');
});

Route::get('try-and-catch', function () {
    return view('practice/try_and_catch');
});

Route::get('finally-class', function () {
    return view('practice/finally_class');
});

Route::get('fetch-API', function () {
    return view('practice/fetch_API');
});

Route::get('post-API', function () {
    return view('practice/post_API');
});

Route::get('cookies', function () {
    return view('practice/cookies');
});

Route::get('localStorage', function () {
    return view('practice/localStorage');
});

Route::get('sessionStorage', function () {
    return view('practice/sessionStorage');
});


 
/*
|--------------------------------------------------------------------------
| AJAX
|--------------------------------------------------------------------------
*/

Route::get('add-student', [StudentController::class, 'add_student']);

Route::post('add-student', [StudentController::class, 'stored_student'])->name('stored_student');

Route::get('get-student', function () {
    return view('ajax.student_view');
});

Route::get('get-all-student', [StudentController::class, 'get_student'])->name('get_student');


 
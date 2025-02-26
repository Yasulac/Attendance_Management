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
|
*/

Route::get('/', function () {
    return view('welcome');
})->name('welcome');


Route::get('/layout', function () {
    return view('layout');
});


Route::get('signup', function () {
    return view('auth.signup');
});

Route::get('login', function () {
    return view('auth.login');
});

Route::get('subject', function (){
    return view('Student.subject');
});

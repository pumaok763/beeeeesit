<?php

use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('home');
})->name('home');
Route::get('/forms', function () {
    return view('forms');
})->name('forms');
Route::get('/login', function () {
    return view('login');
})->name('login');
Route::get('/register', function () {
    return view('register');
})->name('register');
Route::get('/notread', function () {
    return view('notread');
})->name('notread');
Route::post('/contac/submit', function () {
    return Request::all();
})->name('contact-form');


Route::get('/navba', function () {
    return view('navba');
})->name('navba');
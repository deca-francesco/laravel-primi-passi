<?php

use Illuminate\Support\Facades\Route;

Route::get('/welcome', function () {
    return view('welcome');
})->name('welcome');

// rotta home
Route::get('/', function () {
    return view('home');
})->name('home');

// rotta about
Route::get('/about', function () {
    return view('about');
})->name('about');

// rotta contact
Route::get('/contact', function () {
    $contacts = "Informazioni di contatto";
    return view('contact', compact('contacts'));
})->name('contact');

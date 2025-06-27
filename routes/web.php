<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/services', function () {
    return view('services');
})->name('services');

Route::get('/detail-service', function () {
    return view('detail-service');
})->name('detail.service');

Route::get('/contact-us', function () {
    return view('contact');
})->name('contact');

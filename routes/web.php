<?php

use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/about', function () {
    return view('about');
});
Route::get('/services', function () {
    return view('services');
});
Route::get('/detail-service', function () {
    return view('detail-service');
});
Route::get('/contact-us', function () {
    return view('contact');
});

Route::post('/contact-form', [DashboardController::class, 'submit'])->name('contactform');
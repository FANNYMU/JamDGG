<?php
use App\Http\Controllers\ClockController;
use Illuminate\Support\Facades\Route;

Route::get('/', [ClockController::class, 'index']);

Route::get('/contact', function () {
    return view('todo/contact');
});

Route::get('/about', function () {
    return view('template/about');
});



<?php

use Illuminate\Support\Facades\Route;

// Route to the Home view
Route::get('/', function () {
    return view('home');
})->name('home');

// Route to the Purchase view
Route::get('/purchase', function () {
    return view('purchase');
})->name('purchase');

// Route to the Log In view
Route::get('/login', function () {
    return view('login');
})->name('login');

// Route to the Sign Up view
Route::get('/sign-up', function () {
    return view('sign-up');
})->name('sign-up');

// Route to the Buy view
Route::get('/buy', function () {
    return view('buy');
})->name('buy');

// Example of a post route for handling form submissions (Buy Form)
Route::post('/purchase/confirmation', [App\Http\Controllers\PurchaseController::class, 'confirmPurchase'])
    ->name('purchase.confirmation');

// Example of a post route for handling form submissions (Sign Up Form)
Route::post('/sign-up', [App\Http\Controllers\SignUpController::class, 'register'])
    ->name('signup.register');

// Example of a post route for handling form submissions (Log In Form)
Route::post('/login', [App\Http\Controllers\LoginController::class, 'authenticate'])
    ->name('login.authenticate');

// Example of a post route for handling form submissions (Buy Form)
Route::post('/buy', [App\Http\Controllers\BuyController::class, 'processPayment'])
    ->name('buy.process');


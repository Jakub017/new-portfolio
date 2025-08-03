<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;

Route::controller(PagesController::class)->group(function() {
    Route::get('/', 'home')->name('home');
});
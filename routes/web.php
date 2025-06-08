<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages.dashboard'); // adjust if filename is different
});
Route::get('/logout', function () {
})->name('logout');
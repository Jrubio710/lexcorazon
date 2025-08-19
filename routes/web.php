<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages/welcome');
})->name('welcome');

Route::get('/portfolio', function () {
    return view('portfolio'); // Por ahora puedes crear un view vacío llamado portfolio.blade.php
})->name('portfolio');

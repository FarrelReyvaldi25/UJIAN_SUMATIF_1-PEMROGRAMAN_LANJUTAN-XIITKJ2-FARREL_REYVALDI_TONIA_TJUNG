<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Load routes dari file students.php
require __DIR__.'/students.php';

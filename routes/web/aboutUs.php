<?php

use Illuminate\Support\Facades\Route;

Route::get('/aboutUs', function () {
    return view('aboutUs');
});

// Route::get('/aboutUs',[AboutUsController :: class ,"index"]);
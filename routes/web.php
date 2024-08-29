<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $var = ["gopi", "sai", "nehalika"];
    xr($var, 'Hola, world!');
    return view('welcome');
});

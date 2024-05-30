<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/chiperia', function () {
    return 'Benvinguts a la chiperia de Juan';
});

Route::get('/chiperia/{dobob}', function ($chipe, $popi = null) {
    return "El chipe popo fue dobobado ¡Nooooo! D:";
});

Route::get('/chiperia/{chipe}+{popi?}', function ($chipe, $popi = null) {
    if ($popi) {
        return "Chipe Juan: {$chipe} y {$popi}";
    }
    return "Chipe Juan: {$chipe}, pero no popi :(";
});

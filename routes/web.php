<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\VentasProducto;

Route::get('/', [HomeController::class, 'index']);
Route::get('/ventas', [VentasProducto::class, 'ventasP']);
Route::get('/ventas/electrodomesticos', [VentasProducto::class, 'electrodomesticos']);

Route::get('/mvc', [HomeController::class, 'index']);

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

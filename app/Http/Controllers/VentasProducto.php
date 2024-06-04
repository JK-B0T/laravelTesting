<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VentasProducto extends Controller
{
    public function ventasP() {
        return "Las ventas de su producto fueron venteadas";
    }

    public function electrodomesticos() {
        return "Las ventas de su producto electrodomesticadas";
    }
}

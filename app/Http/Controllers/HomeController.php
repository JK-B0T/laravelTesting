<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index() {
        return view("index");
    }

    public function pop() {
        return view("vistasPopo.pop");
    }

    public function pxp() {
        return view("vistasPopo.pxp");
    }

    public function popypxp() {
        return view("vistasPopo.popypxp");
    }
}

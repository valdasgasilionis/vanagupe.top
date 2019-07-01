<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReservationController extends Controller
{
    public function july() {
        return view('reservations.july');
    }
    public function august() {
        return view('reservations.august');
    }
    public function september() {
        return view('reservations.september');
    }
    public function october() {
        return view('reservations.october');
    }
}

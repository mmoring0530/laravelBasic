<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\reservation;

class ReservationController extends Controller
{
    //
    public function list()
    {
        return view('reservation.reservationList');
    }
}

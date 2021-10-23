<?php

namespace App\Http\Controllers;

use App\Events\ClientReady;
use App\Models\Reservation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class EmployeesController extends Controller
{
    public function ready()
    {
        return view('employees.ready');
    }

    public function getNumberOfReadyReservationToService()
    {
        $number = Reservation::whereNull('user_id')->first(['id']);
        if ($number) {
            $number->update([
                'user_id' => Auth::id()
            ]);
            event(new ClientReady($number));
        }
        return redirect()->route('ready');
    }
}

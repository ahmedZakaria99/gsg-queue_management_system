<?php

namespace App\Http\Controllers;

use App\Models\Reservation;
use Illuminate\Http\Request;

class ClientsController extends Controller
{

    public function wait()
    {
        return view('clients.wait');
    }


    public function store(Request $request)
    {
        $reservation = Reservation::create();
        if ($reservation){
            $reservation_number = $reservation->id;
            return redirect()->route('show',$reservation_number);
        }
        else return redirect()->back();
    }

    public function show($id)
    {
        return view('clients.show',[
            'number' => $id
        ]);
    }


}

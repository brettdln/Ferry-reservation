<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReservationController extends Controller
{
    public function index()
    {
        return ReservationResource::collection(Reservation::all());
    }

    public function store(Request $request)
    {
        $fields = $request->validate([
            'passengers' => 'required'
        ]);

        
        $ferry = Ferry::find($fields['ferry_id']);


        $reservation = Reservation::create([
            'reservation_date' => now(),   
            'passenger' => $fields['passenger']
        ]);

        if ($reservation) {
            return response([
                'message' => 'Reservation success'
            ], 201);
        }else {
            return response([
                'message' => 'Reservation failed'
            ], 500);
        }
    }

    
}

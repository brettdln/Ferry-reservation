<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Builder;
use App\Http\Resources\FerryResource;
use Exception;
use App\Models\Ferry;
use App\Models\Destination;
use App\Http\Resources\DestinationResource;

class BusController extends Controller
{
    public function index() {
        return FerryResource::collection(Bus::all());
    }

    public function getPlaces() {
        return DestinationResource::collection(Destination::all());
    }

    public function getFerrySched(Request $request) {

             if ($ferry->isEmpty()) {
                return new Exception('No voyage by this time');
            }
    }
}
<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ReservationResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'ferry' => [
                'id' => $this->ferry->id,
                'ferry_number' => $this->ferry->ferry_number,
                'ferry_type' => $this->ferry->ferry_type,
                'destinationFrom' => $this->ferry->destinationFrom,
                'destinationTo' => $this->ferry->destinationTo,
                'departure_time' => $this->ferry->departure_time,
                'departure_date' => $this->ferry->departure_date,
                'price' => $this->ferry->price
            ],
            'reservation_date' => $this->reservation_date,
            'passenger' => $this->passenger
        ];
    }
}

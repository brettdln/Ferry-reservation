<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class FerryResource extends JsonResource
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
            'destination_to' => $this->destination_to,
            'destination_from' => $this->destination_from,
            'ferry_number' => $this->ferry_number,
            'ferry_type' => $this->ferry_type,
            'departure_time' => $this->departure_time,
            'departure_date' => $this->departure_date,
            'return_time' => $this->return_time,
            'return_date' => $this->return_date,
            'price' => $this->price
        ];
    }
}

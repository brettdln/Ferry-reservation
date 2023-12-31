<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo; 
use Illuminate\Database\Eloquent\Relations\HasOne; 
use App\Models\Reservation;
use App\Models\Destination;

class Ferry extends Model
{
    use HasFactory;
    protected $fillable = [
        'destination_to_id',
        'destination_from_id',
        'ferry_type',
        'price',
        'departure_time',
        'departure_date',
        'return_date'
    ];

    public function reservation():HasOne {
        return $this->hasOne(Reservation::class);
    }

    public function destination_to():HasOne {
        return $this->hasOne(Destination::class, 'id', 'destination_to_id');
    }

    public function destination_from():HasOne {
        return $this->hasOne(Destination::class, 'id', 'destination_from_id');
    }
}

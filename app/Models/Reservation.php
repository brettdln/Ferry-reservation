<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use App\Models\Ferry;
use App\Models\Reservation; 

class Reservation extends Model
{
    use HasFactory;
    protected $fillable = [
        'passenger'
    ];

    public function ferry():BelongsTo {
        return $this->belongsTo(ferry::class);
    }

    public function reservation():HasOne {
        return $this->hasOne(Reservation::class);
    }
}

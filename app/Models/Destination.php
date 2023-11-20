<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use App\Models\Ferry;

class Destination extends Model
{
    use HasFactory;
    protected $fillables  = [
        'place'
    ];

public function ferry(): BelongsTo {
    return $this->belongsTo(Ferry::class);
    }
}

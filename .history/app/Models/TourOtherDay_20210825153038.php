<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TourOtherDay extends Model
{
    use HasFactory;

    protected $table = 'other_days';

    protected $fillable = [
        'tour_id',
        'departure_date',
        'departure_time',
    ];

    /**
     * Relationship 1-n (inverse) to tours.
     */
    public function tour()
    {
        return $this->belongsTo(Tour::class);
    }
}

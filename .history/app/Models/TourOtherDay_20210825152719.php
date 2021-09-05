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
        
    ]
}

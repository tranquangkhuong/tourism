<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Promotion extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'content',
        'start_date',
        'end_date',
        'number',
        'type',
        'amount',
    ];

    /**
     * Relationship 1-n to Tours
     */
    public function tours()
    {
        return $this->hasMany(Tour::class, 'promotion_id', 'id');
    }
}

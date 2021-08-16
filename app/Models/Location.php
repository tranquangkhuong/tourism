<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'created_at',
        'updated_at',
    ];

    /**
     * Relationship 1-n to Tour
     */
    public function tours()
    {
        return $this->hasMany(Tour::class, 'location_id', 'id');
    }
}

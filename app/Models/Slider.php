<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Slider extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'content',
        'image',
        'display',
        'created_at',
        'updated_at',
    ];

    /**
     * Relationship 1-n (inverse) to User
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}

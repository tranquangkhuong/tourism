<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Notification extends Model
{
    use HasFactory;

    protected $fillable = [
        'content',
        'created_at',
        'updated_at'
    ];

    /**
     * Relationship 1-n (inverse) to User
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}

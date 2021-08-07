<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;

    protected $fillable = [
        'about_us',
        'facebook',
        'youtube',
        'instagram',
        'twitter',
        'pinterest',
        'created_at',
        'updated_at',
    ];
}

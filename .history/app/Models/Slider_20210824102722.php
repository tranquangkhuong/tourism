<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Slider extends Model
{
    use HasFactory;

    public $imagePath = '/images/sliders/';

    protected $fillable = [
        'title',
        'content',
        'image',
        'display',
        'created_at',
        'updated_at',
    ];

    /**
     * Relationship 1-n (inverse) to Admin
     */
    public function admin()
    {
        return $this->belongsTo(Admin::class);
    }
}

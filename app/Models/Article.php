<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Article extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'title',
        'image',
        'content',
        'display',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $imagePath = '/storage/images/articles/';
    protected $thumbnailPath = '/storage/images/articles/thumbnail/';

    /**
     * Relationship 1-n (inverse) to User
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}

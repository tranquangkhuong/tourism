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
        'image_path',
        'content',
        'display',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $imagePath = '/images/articles/';
    protected $thumbnailPath = '/images/articles/thumbnail/';
    protected $imagePathInEditor = '/images/editor/';

    /**
     * Relationship 1-n (inverse) to Admin
     */
    public function admin()
    {
        return $this->belongsTo(Admin::class);
    }
}

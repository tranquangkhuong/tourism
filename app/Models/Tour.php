<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Tour extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'area_id',
        'location_id',
        'title',
        'description',
        'departure_location',
        'destination',
        'journey',
        'display',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    /**
     * Relationship 1-n (inverse) to Areas
     */
    public function area()
    {
        return $this->belongsTo(Area::class);
    }

    /**
     * Relationship 1-n (inverse) to Locations
     */
    public function location()
    {
        return $this->belongsTo(Location::class);
    }

    /**
     * Relationship n-n to Tag
     */
    public function tags()
    {
        return $this->belongsToMany(Tag::class, 'tag_tour', 'tour_id', 'tag_id');
    }

    /**
     * Relationship n-n to Vehicles
     */
    public function vehicles()
    {
        return $this->belongsToMany(Vehicle::class, 'tour_vehicle', 'tour_id', 'vehicle_id');
    }

    /**
     * Relationship n-n to Promotions
     */
    public function promotions()
    {
        return $this->belongsToMany(Promotion::class, 'promotion_tour', 'tour_id', 'promotion_id');
    }

    /**
     * Relationship 1-n to Comment
     */
    public function comments()
    {
        return $this->hasMany(Comment::class, 'tour_id', 'id');
    }

    /**
     * Relationship 1-n to Comment
     */
    public function votes()
    {
        return $this->hasMany(Vote::class, 'tour_id', 'id');
    }

    /**
     * Relationship n-n to Attributes
     */
    public function attributes()
    {
        return $this->belongsToMany(Attribute::class, 'attribute_tour', 'tour_id', 'attribute_id');
    }

    /**
     * Relationship n-n to Values
     */
    public function values()
    {
        return $this->belongsTo(Value::class, 'tour_attribute_value', 'tour_id', 'value_id');
    }
}

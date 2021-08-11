<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable, SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'phone',
        'address',
        'avatar_image',
        'is_admin',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**
     * Relationship 1-n to Booking
     */
    public function bookings()
    {
        return $this->hasMany(Booking::class, 'user_id', 'id');
    }

    /**
     * Relationship 1-n to Articles
     */
    public function articles()
    {
        return $this->hasMany(Article::class, 'user_id', 'id');
    }

    /**
     * Relationship 1-n to Sliders
     */
    public function sliders()
    {
        return $this->hasMany(Slider::class, 'user_id', 'id');
    }

    /**
     * Relationship 1-n to Notification
     */
    public function notifications()
    {
        return $this->hasMany(Notification::class, 'user_id', 'id');
    }
}

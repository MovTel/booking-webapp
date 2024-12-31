<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Unit extends Model
{
    use HasFactory;

    protected $fillable = [
        'owner_id',
        'location',
        'property_name',
        'property_description',
        'property_address',
        'property_type',
        'capacity',
        'maps_url',
        'property_view',
        'amenities',
        'space',
        'per_hour_4_hrs',
        'per_hour_12_hrs',
        'per_hour_24_hrs',
        'per_hour_48_hrs',
        'plus_48_hrs',
        'downpayment',
        'status',
    ];

    public function bookings()
    {
        return $this->hasMany(Booking::class);
    }

    public function property_image()
    {
        return $this->hasMany(Property_image::class);
    }

    public function coverImage()
    {
        return $this->hasOne(Property_image::class)->where('is_cover', 1);
    }

    public function getPlus48HrsFormattedAttribute()
    {
        $converted = $this->attributes['plus_48_hrs'] * 100;
        return $converted . "%";
    }
}

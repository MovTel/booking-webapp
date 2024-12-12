<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'guests',
        'checkin_date',
        'checkin_time',
        'checkout_time',
        'checkout_time_plus_one',
        'id_image',
        'unit_id',
        'dp',
        'fp',
    ];

    public function getCheckoutFormattedAttribute()
    {
        return Carbon::parse($this->attributes['checkout_time'])->format('g:i A');
    }

    public function getCheckinFormattedAttribute()
    {
        return Carbon::parse($this->attributes['checkin_time'])->format('g:i A');
    }

    public function getDateFormattedAttribute()
    {
        return Carbon::parse($this->attributes['checkin_date'])->format('F j, Y');
    }

    public function getCreatedFormattedAttribute()
    {
        return Carbon::parse($this->attributes['created_at'])->format('F j, Y');
    }

    public function unit()
    {
        return $this->belongsTo(Unit::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function getStatusFormattedAttribute()
    {
        switch ($this->attributes['status']) {
            case 1:
                return 'approved';
            case 0:
                return 'pending';
            case 2:
                return 'declined';
            case 3:
                return 'cancelled';
            default:
                return 'unknown';
        }
    }
}

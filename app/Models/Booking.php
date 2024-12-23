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
        'checkin',
        'checkout',
        'checkout_plus_one_hour',
        'id_image',
        'unit_id',
        'total',
        'comment',
        'agent_id',
    ];

    public function getCheckoutFormattedAttribute()
    {
        return Carbon::parse($this->attributes['checkout'])->format('F j, Y g:i A');
    }

    public function getCheckinFormattedAttribute()
    {
        return Carbon::parse($this->attributes['checkin'])->format('F j, Y g:i A');
    }

    public function getCheckoutPlusFormattedAttribute()
    {
        return Carbon::parse($this->attributes['checkout_plus_one_hour'])->format('F j, Y g:i A');
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
        return $this->belongsTo(User::class, 'user_id');
    }

    public function agent()
    {
        return $this->belongsTo(User::class, 'agent_id');
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

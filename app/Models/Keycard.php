<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Keycard extends Model
{
    use HasFactory;

    protected $fillable = [
        'keycard_number',
        'keycard_status',
        'user_id',
        'keycard_type',
    ];

    public function getKeycardStatusFormattedAttribute()
    {
        switch ($this->attributes['keycard_status']) {
            case 1:
                return 'running';
            case 2:
                return 'active';
            case 3:
                return 'inactive';
            default:
                return 'unknown';
        }
    }
}

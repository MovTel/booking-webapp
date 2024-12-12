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
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Property_image extends Model
{
    use HasFactory;

    protected $fillable = [
        'image_path',
        'unit_id',
        'is_cover',
    ];

    public function unit()
    {
        return $this->belongsTo(Unit::class);
    }
}

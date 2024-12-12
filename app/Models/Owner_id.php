<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Owner_id extends Model
{
    use HasFactory;

    protected $fillable = [
        'id_image',
        'owner_id'
    ];
}

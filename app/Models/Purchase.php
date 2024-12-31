<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Purchase extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'full_address',
        'id_image',
        'proof_of_payment',
        'keycard_tier',
        'status',
        'keycard_id',
    ];

    public function Users()
    {
        return $this->hasMany(User::class);
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Agent extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'designation',
        'email',
        'phone',
        'address',
        'address 2',
        'country',
        'city',
        'postal_code',
        'facebook',
        'twitter',
        'instagram',
        'linkedin',
        'photo',
    ];

    public function agency() {
        return $this->belongsTo(Agency::class);
    }

    public function users() {
        return $this->hasMany(User::class);
    }
}

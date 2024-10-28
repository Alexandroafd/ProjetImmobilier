<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Agency extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'ceo',
        'email',
        'phone',
        'skype',
        'address',
        'country',
        'city',
        'postal_code',
        'facebook',
        'twitter',
        'instagram',
        'linkedin',
        'stab',
        'logo',
        'property_id'
    ];

    public function agents() {
        return $this->hasMany(Agent::class);
    }

    public function users() {
        return $this->hasMany(User::class);
    }
}

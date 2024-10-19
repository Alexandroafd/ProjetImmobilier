<?php

namespace App\Models;

use Illuminate\Contracts\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Property extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'surface',
        'rooms',
        'bedrooms',
        'floor',
        'price',
        'address',
        'city',
        'postal_code',
        'sold',
        'images',
        'type',
        'status',
        'state'
    ];

    public function options()
    {
        return $this->belongsToMany(Option::class, 'option_property');
    }

    /*public function options(): BelongsToMany
    {
        return $this->belongsToMany(Option::class);
    }*/

    public function getSlug()
    {
        return Str::slug($this->title);        
    }

    public function scopeAvailable(Builder $builder) : Builder
    {
        return $builder->where('sold', false);
    }
}

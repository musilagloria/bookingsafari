<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'latitude',
        'longitude',
        'region',
        'country',
        'description',
    ];

    public function attractions()
    {
        return $this->hasMany(Attraction::class);
    }

    public function seasonalEvents()
    {
        return $this->hasMany(SeasonalEvent::class);
    }
}

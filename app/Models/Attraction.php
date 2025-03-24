<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Attraction extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'location',
        'type',
        'image',
    ];

    public function reviews()
    {
        return $this->hasMany(AttractionReview::class);
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Recommendation extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'attraction_id',
        'itinerary_id',
        'relevance_score',
        'is_viewed',
        'is_saved',
    ];

    protected $casts = [
        'is_viewed' => 'boolean',
        'is_saved' => 'boolean',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function attraction()
    {
        return $this->belongsTo(Attraction::class);
    }

    public function itinerary()
    {
        return $this->belongsTo(Itinerary::class);
    }
}

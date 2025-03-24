<?php

namespace App\Http\Controllers;

use App\Models\Attraction;
use App\Models\Location;
use App\Models\SeasonalEvent;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $featuredAttractions = Attraction::orderBy('popularity_score', 'desc')->take(6)->get();
        $popularLocations = Location::withCount('attractions')->orderBy('attractions_count', 'desc')->take(4)->get();
        $upcomingEvents = SeasonalEvent::where('start_date', '>=', now())->orderBy('start_date', 'asc')->take(3)->get();
        
        return view('home', compact('featuredAttractions', 'popularLocations', 'upcomingEvents'));
    }
}

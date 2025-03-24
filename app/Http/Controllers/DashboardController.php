<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Itinerary;
use App\Models\AttractionReview;
use App\Models\TourOperator;
use Illuminate\Database\QueryException;
use Illuminate\Support\Facades\Log;

class DashboardController extends Controller
{
    public function index()
    {
        try {
            // Get data for the dashboard
            $user = auth()->user();
            $totalUsers = User::count();
            $totalItineraries = Itinerary::count();
            $userItineraries = $user->itineraries;
            
            try {
                $recentReviews = AttractionReview::with('user', 'attraction')
                    ->latest()
                    ->take(5)
                    ->get();
            } catch (QueryException $e) {
                Log::error('Error fetching reviews: ' . $e->getMessage());
                $recentReviews = collect();
            }
            
            try {
                $tourOperators = TourOperator::with('user')
                    ->take(5)
                    ->get();
            } catch (QueryException $e) {
                Log::error('Error fetching tour operators: ' . $e->getMessage());
                $tourOperators = collect();
            }
                
            return view('dashboard', compact(
                'user',
                'totalUsers',
                'totalItineraries',
                'userItineraries',
                'recentReviews',
                'tourOperators'
            ));
        } catch (QueryException $e) {
            Log::error('Dashboard error: ' . $e->getMessage());
            
            // Return a simplified dashboard with minimal data
            return view('dashboard', [
                'user' => auth()->user(),
                'totalUsers' => 0,
                'totalItineraries' => 0,
                'userItineraries' => collect(),
                'recentReviews' => collect(),
                'tourOperators' => collect(),
                'error' => 'We encountered an issue loading your dashboard data.'
            ]);
        }
    }
}
<?php

namespace App\Http\Controllers;

use App\Models\Attraction;
use App\Models\Location;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;

class AttractionController extends Controller
{
    /**
     * Display a listing of the attractions.
     */
    public function index()
    {
        $attractions = Attraction::with('location')->get();
        return view('attractions.index', compact('attractions'));
    }

    /**
     * Show the form for creating a new attraction.
     */
    public function create()
    {
        $locations = Location::all();
        return view('attractions.create', compact('locations'));
    }

    /**
     * Store a newly created attraction in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'location_id' => 'required|exists:locations,id',
            'category' => 'required|string|max:255',
            'price_range' => 'required|string|max:255',
            'availability_status' => 'required|in:open,closed,seasonal',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'gallery.*' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'activities' => 'nullable|array',
            'seasonality_info' => 'nullable|array',
        ]);

        // Handle main image upload
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('attractions', 'public');
            $validated['image_url'] = $imagePath;
        }

        // Handle gallery images
        if ($request->hasFile('gallery')) {
            $galleryPaths = [];
            foreach ($request->file('gallery') as $image) {
                $path = $image->store('attractions/gallery', 'public');
                $galleryPaths[] = $path;
            }
            $validated['gallery'] = $galleryPaths;
        }

        Attraction::create($validated);

        return redirect()->route('attractions.index')
            ->with('success', 'Attraction created successfully.');
    }

    /**
     * Display the specified attraction.
     */
    public function show(Attraction $attraction)
    {
        $attraction->load('location', 'reviews.user');
        return view('attractions.show', compact('attraction'));
    }

    /**
     * Show the form for editing the specified attraction.
     */
    public function edit(Attraction $attraction)
    {
        $locations = Location::all();
        return view('attractions.edit', compact('attraction', 'locations'));
    }

    /**
     * Update the specified attraction in storage.
     */
    public function update(Request $request, Attraction $attraction)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'location_id' => 'required|exists:locations,id',
            'category' => 'required|string|max:255',
            'price_range' => 'required|string|max:255',
            'availability_status' => 'required|in:open,closed,seasonal',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'gallery.*' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'activities' => 'nullable|array',
            'seasonality_info' => 'nullable|array',
        ]);

        // Handle main image upload
        if ($request->hasFile('image')) {
            // Delete old image if exists
            if ($attraction->image_url) {
                Storage::disk('public')->delete($attraction->image_url);
            }
            
            $imagePath = $request->file('image')->store('attractions', 'public');
            $validated['image_url'] = $imagePath;
        }

        // Handle gallery images
        if ($request->hasFile('gallery')) {
            $galleryPaths = $attraction->gallery ?? [];
            
            foreach ($request->file('gallery') as $image) {
                $path = $image->store('attractions/gallery', 'public');
                $galleryPaths[] = $path;
            }
            
            $validated['gallery'] = $galleryPaths;
        }

        $attraction->update($validated);

        return redirect()->route('attractions.index')
            ->with('success', 'Attraction updated successfully.');
    }

    /**
     * Remove the specified attraction from storage.
     */
    public function destroy(Attraction $attraction)
    {
        // Delete associated images
        if ($attraction->image_url) {
            Storage::disk('public')->delete($attraction->image_url);
        }
        
        if (!empty($attraction->gallery)) {
            foreach ($attraction->gallery as $image) {
                Storage::disk('public')->delete($image);
            }
        }
        
        $attraction->delete();

        return redirect()->route('attractions.index')
            ->with('success', 'Attraction deleted successfully.');
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\TourOperator;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class TourOperatorController extends Controller
{
    /**
     * Display a listing of the tour operators.
     */
    public function index()
    {
        $tourOperators = TourOperator::with('user')->get();
        return view('tour-operators.index', compact('tourOperators'));
    }

    /**
     * Show the form for creating a new tour operator.
     */
    public function create()
    {
        $users = User::where('role', 'operator')->get();
        return view('tour-operators.create', compact('users'));
    }

    /**
     * Store a newly created tour operator in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'user_id' => 'required|exists:users,id',
            'company_name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'logo' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'website' => 'nullable|url',
            'phone' => 'required|string|max:20',
            'email' => 'required|email|max:255',
            'address' => 'nullable|string|max:255',
        ]);

        // Handle logo upload
        if ($request->hasFile('logo')) {
            $logoPath = $request->file('logo')->store('operators', 'public');
            $validated['logo_url'] = $logoPath;
        }

        TourOperator::create($validated);

        return redirect()->route('tour-operators.index')
            ->with('success', 'Tour operator created successfully.');
    }

    /**
     * Display the specified tour operator.
     */
    public function show(TourOperator $tourOperator)
    {
        $tourOperator->load('user', 'itineraries');
        return view('tour-operators.show', compact('tourOperator'));
    }

    /**
     * Show the form for editing the specified tour operator.
     */
    public function edit(TourOperator $tourOperator)
    {
        $users = User::where('role', 'operator')->get();
        return view('tour-operators.edit', compact('tourOperator', 'users'));
    }

    /**
     * Update the specified tour operator in storage.
     */
    public function update(Request $request, TourOperator $tourOperator)
    {
        $validated = $request->validate([
            'user_id' => 'required|exists:users,id',
            'company_name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'logo' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'website' => 'nullable|url',
            'phone' => 'required|string|max:20',
            'email' => 'required|email|max:255',
            'address' => 'nullable|string|max:255',
        ]);

        // Handle logo upload
        if ($request->hasFile('logo')) {
            // Delete old logo if exists
            if ($tourOperator->logo_url) {
                Storage::disk('public')->delete($tourOperator->logo_url);
            }
            
            $logoPath = $request->file('logo')->store('operators', 'public');
            $validated['logo_url'] = $logoPath;
        }

        $tourOperator->update($validated);

        return redirect()->route('tour-operators.index')
            ->with('success', 'Tour operator updated successfully.');
    }

    /**
     * Remove the specified tour operator from storage.
     */
    public function destroy(TourOperator $tourOperator)
    {
        // Delete logo if exists
        if ($tourOperator->logo_url) {
            Storage::disk('public')->delete($tourOperator->logo_url);
        }
        
        $tourOperator->delete();

        return redirect()->route('tour-operators.index')
            ->with('success', 'Tour operator deleted successfully.');
    }
}

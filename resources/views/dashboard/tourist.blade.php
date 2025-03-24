@extends('layouts.app')

@section('content')
<div class="bg-gray-100 py-8">
    <div class="container mx-auto px-6">
        <h1 class="text-3xl font-bold text-gray-800 mb-6">My Dashboard</h1>
        
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            <!-- User Profile Card -->
            <div class="bg-white rounded-lg shadow-md overflow-hidden">
                <div class="bg-yellow-500 px-6 py-4">
                    <h2 class="text-xl font-bold text-white">Welcome, {{ Auth::user()->name }}!</h2>
                </div>
                <div class="p-6">
                    <div class="flex items-center mb-4">
                        <div class="bg-yellow-100 rounded-full p-3 mr-4">
                            <svg class="w-6 h-6 text-yellow-600" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd"></path>
                            </svg>
                        </div>
                        <div>
                            <p class="text-gray-500 text-sm">Email</p>
                            <p class="text-gray-800">{{ Auth::user()->email }}</p>
                        </div>
                    </div>
                    <div class="flex items-center mb-4">
                        <div class="bg-yellow-100 rounded-full p-3 mr-4">
                            <svg class="w-6 h-6 text-yellow-600" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 5V3z"></path>
                            </svg>
                        </div>
                        <div>
                            <p class="text-gray-500 text-sm">Phone</p>
                            <p class="text-gray-800">{{ Auth::user()->phone ?? 'Not provided' }}</p>
                        </div>
                    </div>
                    <div class="mt-6">
                        <a href="{{ route('profile.edit') }}" class="block text-center bg-yellow-500 hover:bg-yellow-600 text-white font-medium py-2 px-4 rounded transition duration-300">
                            Edit Profile
                        </a>
                    </div>
                </div>
            </div>
            
            <!-- Recommendations -->
            <div class="bg-white rounded-lg shadow-md overflow-hidden md:col-span-2">
                <div class="bg-yellow-500 px-6 py-4">
                    <h2 class="text-xl font-bold text-white">Recommended For You</h2>
                </div>
                <div class="p-6">
                    @if($recommendations->count() > 0)
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                            @foreach($recommendations as $recommendation)
                                <div class="border border-gray-200 rounded-lg overflow-hidden hover:shadow-md transition duration-300">
                                    @if($recommendation->attraction)
                                        <img src="{{ $recommendation->attraction->image_url ? asset('storage/' . $recommendation->attraction->image_url) : asset('images/placeholder.jpg') }}" 
                                             alt="{{ $recommendation->attraction->name }}" class="w-full h-40 object-cover">
                                        <div class="p-4">
                                            <h3 class="text-lg font-semibold text-gray-800 mb-2">{{ $recommendation->attraction->name }}</h3>
                                            <p class="text-gray-600 text-sm mb-3">{{ Str::limit($recommendation->attraction->description, 80) }}</p>
                                            <a href="{{ route('attractions.show', $recommendation->attraction) }}" class="text-yellow-600 hover:text-yellow-700 font-medium text-sm">
                                                View Details →
                                            </a>
                                        </div>
                                    @elseif($recommendation->itinerary)
                                        <div class="bg-gray-200 w-full h-40 flex items-center justify-center">
                                            <svg class="w-12 h-12 text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd" d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z" clip-rule="evenodd"></path>
                                            </svg>
                                        </div>
                                        <div class="p-4">
                                            <h3 class="text-lg font-semibold text-gray-800 mb-2">{{ $recommendation->itinerary->title }}</h3>
                                            <p class="text-gray-600 text-sm mb-3">{{ Str::limit($recommendation->itinerary->description, 80) }}</p>
                                            <a href="{{ route('itineraries.show', $recommendation->itinerary) }}" class="text-yellow-600 hover:text-yellow-700 font-medium text-sm">
                                                View Itinerary →
                                            </a>
                                        </div>
                                    @endif
                                </div>
                            @endforeach
                        </div>
                    @else
                        <div class="text-center py-8">
                            <svg class="w-16 h-16 text-gray-300 mx-auto mb-4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-8-3a1 1 0 00-.867.5 1 1 0 11-1.731-1A3 3 0 0113 8a3.001 3.001 0 01-2 2.83V11a1 1 0 11-2 0v-1a1 1 0 011-1 1 1 0 100-2zm0 8a1 1 0 100-2 1 1 0 000 2z" clip-rule="evenodd"></path>
                            </svg>
                            <p class="text-gray-500">No recommendations yet. Start exploring attractions to get personalized recommendations!</p>
                            <a href="{{ route('attractions.index') }}" class="inline-block mt-4 bg-yellow-500 hover:bg-yellow-600 text-white font-medium py-2 px-4 rounded transition duration-300">
                                Explore Attractions
                            </a>
                        </div>
                    @endif
                </div>
            </div>
        </div>
        
        <!-- My Reviews and Saved Itineraries -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mt-6">
            <!-- My Reviews -->
            <div class="bg-white rounded-lg shadow-md overflow-hidden">
                <div class="bg-yellow-500 px-6 py-4 flex justify-between items-center">
                    <h2 class="text-xl font-bold text-white">My Reviews</h2>
                    <a href="#" class="text-white hover:text-yellow-100 text-sm font-medium">View All</a>
                </div>
                <div class="p-6">
                    @if($reviews->count() > 0)
                        <div class="space-y-4">
                            @foreach($reviews as $review)
                                <div class="border-b border-gray-200 pb-4 last:border-b-0 last:pb-0">
                                    <div class="flex justify-between items-start mb-2">
                                        <h3 class="text-lg font-semibold text-gray-800">{{ $review->attraction->name }}</h3>
                                        <div class="flex items-center">
                                            @for($i = 1; $i <= 5; $i++)
                                                <svg class="w-4 h-4 {{ $i <= $review->rating ? 'text-yellow-500' : 'text-gray-300' }}" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118l-2.8-2.034c-.783-.57-.38-1.81.588-1.81h3.462a1 1 0 00.95-.69l1.07-3.292z"></path>
                                                </svg>
                                            @endfor
                                        </div>
                                    </div>
                                    <p class="text-gray-600 text-sm mb-2">{{ Str::limit($review->comment, 120) }}</p>
                                    <div class="flex justify-between items-center text-xs text-gray-500">
                                        <span>{{ $review->created_at->diffForHumans() }}</span>
                                        <a href="{{ route('attractions.show', $review->attraction) }}" class="text-yellow-600 hover:text-yellow-700">View Attraction</a>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    @else
                        <div class="text-center py-8">
                            <svg class="w-16 h-16 text-gray-300 mx-auto mb-4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-8-3a1 1 0 00-.867.5 1 1 0 11-1.731-1A3 3 0 0113 8a3.001 3.001 0 01-2 2.83V11a1 1 0 11-2 0v-1a1 1 0 011-1 1 1 0 100-2zm0 8a1 1 0 100-2 1 1 0 000 2z" clip-rule="evenodd"></path>
                            </svg>
                            <p class="text-gray-500">You haven't written any reviews yet.</p>
                            <a href="{{ route('attractions.index') }}" class="inline-block mt-4 bg-yellow-500 hover:bg-yellow-600 text-white font-medium py-2 px-4 rounded transition duration-300">
                                Explore Attractions
                            </a>
                        </div>
                    @endif
                </div>
            </div>
            
            <!-- Saved Itineraries -->
            <div class="bg-white rounded-lg shadow-md overflow-hidden">
                <div class="bg-yellow-500 px-6 py-4 flex justify-between items-center">
                    <h2 class="text-xl font-bold text-white">My Itineraries</h2>
                    <a href="{{ route('itineraries.index') }}" class="text-white hover:text-yellow-100 text-sm font-medium">View All</a>
                </div>
                <div class="p-6">
                    @if($savedItineraries->count() > 0)
                        <div class="space-y-4">
                            @foreach($savedItineraries as $itinerary)
                                <div class="border border-gray-200 rounded-lg overflow-hidden hover:shadow-md transition duration-300">
                                    <div class="p-4">
                                        <div class="flex justify-between items-start mb-2">
                                            <h3 class="text-lg font-semibold text-gray-800">{{ $itinerary->title }}</h3>
                                            <span class="bg-yellow-100 text-yellow-800 text-xs font-semibold px-2.5 py-0.5 rounded">
                                                {{ $itinerary->duration_days }} days
                                            </span>
                                        </div>
                                        <p class="text-gray-600 text-sm mb-3">{{ Str::limit($itinerary->description, 100) }}</p>
                                        <div class="flex justify-between items-center">
                                            <span class="text-gray-500 text-sm">{{ $itinerary->attractions->count() }} attractions</span>
                                            <a href="{{ route('itineraries.show', $itinerary) }}" class="text-yellow-600 hover:text-yellow-700 font-medium text-sm">
                                                View Details →
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    @else
                        <div class="text-center py-8">
                            <svg class="w-16 h-16 text-gray-300 mx-auto mb-4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z" clip-rule="evenodd"></path>
                            </svg>
                            <p class="text-gray-500">You haven't created any itineraries yet.</p>
                            <a href="{{ route('itineraries.create') }}" class="inline-block mt-4 bg-yellow-500 hover:bg-yellow-600 text-white font-medium py-2 px-4 rounded transition duration-300">
                                Create Itinerary
                            </a>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
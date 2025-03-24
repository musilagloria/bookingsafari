@extends('layouts.app')

@section('title', 'Kenya Safari Dashboard')

@section('content')
<div class="py-8 bg-gray-50">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <!-- Hero Banner with improved styling -->
        <div class="relative rounded-xl overflow-hidden mb-10 shadow-xl">
            <div class="h-80 md:h-96 bg-orange-200 flex items-center justify-center bg-cover bg-center" style="background-image: url('https://images.unsplash.com/photo-1516426122078-c23e76319801?ixlib=rb-4.0.3&auto=format&fit=crop&w=1200&q=80')">
                <div class="absolute inset-0 bg-gradient-to-r from-orange-900/80 to-transparent"></div>
                <div class="relative z-10 text-white p-8 md:p-12 max-w-2xl">
                    <h1 class="text-3xl md:text-5xl font-bold mb-4 leading-tight">Discover the Magic of Kenya</h1>
                    <p class="text-lg md:text-xl mb-8 opacity-90">Plan your dream safari adventure with our expert guides and curated experiences</p>
                    <a href="#" class="inline-block bg-orange-500 hover:bg-orange-600 text-white font-bold py-3 px-8 rounded-lg transition duration-300 shadow-lg hover:shadow-xl transform hover:-translate-y-1">
                        Start Planning
                    </a>
                </div>
            </div>
        </div>
        
        <!-- Include components with spacing improvements -->
        <div class="space-y-10">
            @include('components.dashboard.quick-links')
            
            @include('components.dashboard.featured-destinations')
            
            @include('components.dashboard.safari-finder')
            
            @include('components.dashboard.upcoming-events')
        </div>
        
        <!-- Newsletter Signup -->
        <div class="mt-10 bg-gradient-to-r from-orange-500 to-orange-600 rounded-xl shadow-lg p-8 text-white">
            <div class="md:flex md:items-center md:justify-between">
                <div class="mb-6 md:mb-0 md:mr-8">
                    <h2 class="text-2xl font-bold mb-2">Stay Updated</h2>
                    <p class="opacity-90">Subscribe to our newsletter for exclusive safari deals and wildlife updates.</p>
                </div>
                <div class="flex-1 max-w-md">
                    <form class="flex flex-col sm:flex-row gap-3">
                        <input type="email" placeholder="Your email address" class="flex-1 px-4 py-3 rounded-lg text-gray-800 focus:outline-none focus:ring-2 focus:ring-orange-300">
                        <button type="submit" class="bg-white text-orange-600 font-medium px-6 py-3 rounded-lg hover:bg-orange-50 transition duration-300">
                            Subscribe
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
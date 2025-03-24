<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Destinations - Kenya Safari</title>
    
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600|poppins:400,500,600,700" rel="stylesheet" />
    
    <!-- Styles / Scripts -->
    @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    @endif
    
    <!-- Add this to the style section -->
    <style>
        /* Existing styles... */
        
        /* Sidebar styles */
        .page-container {
            display: flex;
            flex-direction: column;
        }
        
        .content-container {
            display: flex;
            flex-direction: column;
        }
        
        .sidebar {
            background-color: #f8f8f8;
            padding: 2rem;
            border-right: 1px solid #eaeaea;
            display: none;
        }
        
        .sidebar-title {
            font-size: 1.2rem;
            font-weight: 600;
            margin-bottom: 1.5rem;
            color: #333;
        }
        
        .sidebar-section {
            margin-bottom: 2rem;
        }
        
        .sidebar-section h3 {
            font-size: 1rem;
            font-weight: 600;
            margin-bottom: 1rem;
            color: #555;
        }
        
        .filter-group {
            margin-bottom: 1rem;
        }
        
        .filter-group label {
            display: block;
            margin-bottom: 0.5rem;
            font-size: 0.9rem;
            color: #666;
        }
        
        .filter-group select, .filter-group input[type="range"] {
            width: 100%;
            padding: 0.5rem;
            border: 1px solid #ddd;
            border-radius: 4px;
            font-size: 0.9rem;
        }
        
        .checkbox-group {
            margin-bottom: 0.5rem;
        }
        
        .checkbox-group label {
            display: flex;
            align-items: center;
            font-size: 0.9rem;
            color: #666;
        }
        
        .checkbox-group input[type="checkbox"] {
            margin-right: 0.5rem;
        }
        
        .price-range {
            display: flex;
            justify-content: space-between;
            font-size: 0.8rem;
            color: #666;
            margin-top: 0.5rem;
        }
        
        .filter-button {
            background-color: #E67E22;
            color: white;
            border: none;
            padding: 0.75rem 1rem;
            border-radius: 4px;
            font-weight: 600;
            cursor: pointer;
            transition: background-color 0.3s ease;
            width: 100%;
        }
        
        .filter-button:hover {
            background-color: #D35400;
        }
        
        .mobile-filter-toggle {
            background-color: #E67E22;
            color: white;
            border: none;
            padding: 0.75rem 1rem;
            border-radius: 4px;
            font-weight: 600;
            cursor: pointer;
            margin-bottom: 1rem;
            display: block;
            width: 100%;
            max-width: 200px;
        }
        
        @media (min-width: 992px) {
            .content-container {
                flex-direction: row;
            }
            
            .sidebar {
                width: 280px;
                display: block;
            }
            
            .main-content {
                flex: 1;
            }
            
            .mobile-filter-toggle {
                display: none;
            }
        }
    </style>

    <!-- Modify the body structure to include the sidebar -->
    <body>
        <!-- Navigation remains the same -->
        <nav class="navbar">
            <!-- Navigation content remains unchanged -->
        </nav>
    
        <!-- Hero Section remains the same -->
        <div class="hero-section">
            <!-- Hero content remains unchanged -->
        </div>
    
        <!-- Page Container with Sidebar -->
        <div class="page-container">
            <div class="container">
                <button class="mobile-filter-toggle" onclick="toggleSidebar()">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16" style="margin-right: 8px;">
                        <path fill-rule="evenodd" d="M3.5 1a.5.5 0 0 1 .5.5v13a.5.5 0 0 1-1 0v-13a.5.5 0 0 1 .5-.5z"/>
                        <path fill-rule="evenodd" d="M3.762 2.558C4.735 1.909 5.348 1.5 6.5 1.5c.653 0 1.139.325 1.495.562l.032.022c.391.26.646.416.973.416.168 0 .356-.042.587-.126a8.89 8.89 0 0 0 .593-.25c.058-.027.117-.053.18-.08.57-.255 1.278-.544 2.14-.544a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-.5.5c-.638 0-1.18.231-1.638.478-.396.214-.716.393-.94.493a4.001 4.001 0 0 1-.3.174c-.14.065-.246.107-.335.13-.034.01-.062.016-.078.02l-.05.01-.013.002-.006.001h-.001l-.001-.328a.5.5 0 0 1-.5.328h-.053a.5.5 0 0 1-.432-.245l-.013-.024a5.99 5.99 0 0 1-.255-.52 7.222 7.222 0 0 1-.43-1.295 9.173 9.173 0 0 1-.243-1.285.5.5 0 0 1 .416-.58c1.16-.156 1.87-.727 2.303-1.287.13-.167.264-.33.407-.495.032-.036.063-.073.095-.109l.023-.028.004-.005-.364-.364.364.364c.43-.438.582-1.03.582-1.55a.5.5 0 0 1 .5-.5h.053a.5.5 0 0 1 .432.245l.013.024a5.98 5.98 0 0 1 .255.52 7.22 7.22 0 0 1 .43 1.295 9.168 9.168 0 0 1 .243 1.285.5.5 0 0 1-.416.58c-1.16.156-1.87.727-2.303 1.287-.13.167-.264.33-.407.495a3.12 3.12 0 0 1-.095.109l-.023.028-.004.005.364.364-.364-.364c-.43.438-.582 1.03-.582 1.55a.5.5 0 0 1-.5.5h-.053z"/>
                    </svg>
                    Filter Destinations
                </button>
            </div>
            
            <div class="content-container container">
                <!-- Sidebar -->
                <div class="sidebar" id="sidebar">
                    <div class="sidebar-title">Filter Destinations</div>
                    
                    <div class="sidebar-section">
                        <h3>Destination Type</h3>
                        <div class="checkbox-group">
                            <label>
                                <input type="checkbox" name="type" value="national-park"> National Parks
                            </label>
                        </div>
                        <div class="checkbox-group">
                            <label>
                                <input type="checkbox" name="type" value="game-reserve"> Game Reserves
                            </label>
                        </div>
                        <div class="checkbox-group">
                            <label>
                                <input type="checkbox" name="type" value="beach"> Beaches
                            </label>
                        </div>
                        <div class="checkbox-group">
                            <label>
                                <input type="checkbox" name="type" value="cultural"> Cultural Sites
                            </label>
                        </div>
                    </div>
                    
                    <div class="sidebar-section">
                        <h3>Wildlife</h3>
                        <div class="checkbox-group">
                            <label>
                                <input type="checkbox" name="wildlife" value="big-five"> Big Five
                            </label>
                        </div>
                        <div class="checkbox-group">
                            <label>
                                <input type="checkbox" name="wildlife" value="elephants"> Elephants
                            </label>
                        </div>
                        <div class="checkbox-group">
                            <label>
                                <input type="checkbox" name="wildlife" value="lions"> Lions
                            </label>
                        </div>
                        <div class="checkbox-group">
                            <label>
                                <input type="checkbox" name="wildlife" value="giraffes"> Giraffes
                            </label>
                        </div>
                        <div class="checkbox-group">
                            <label>
                                <input type="checkbox" name="wildlife" value="birds"> Bird Watching
                            </label>
                        </div>
                    </div>
                    
                    <div class="sidebar-section">
                        <h3>Best Time to Visit</h3>
                        <div class="filter-group">
                            <label for="season">Season</label>
                            <select id="season" name="season">
                                <option value="">Any Season</option>
                                <option value="dry">Dry Season (Jun-Oct)</option>
                                <option value="wet">Wet Season (Nov-May)</option>
                                <option value="migration">Migration Season (Jul-Oct)</option>
                            </select>
                        </div>
                    </div>
                    
                    <div class="sidebar-section">
                        <h3>Price Range</h3>
                        <div class="filter-group">
                            <input type="range" id="price" name="price" min="0" max="1000" value="500">
                            <div class="price-range">
                                <span>$0</span>
                                <span>$1000+</span>
                            </div>
                        </div>
                    </div>
                    
                    <button class="filter-button">Apply Filters</button>
                </div>
                
                <!-- Main Content -->
                <div class="main-content section" style="padding-top: 0;">
                    <div class="grid grid-3">
                        <!-- Destination cards remain unchanged -->
                    </div>
                </div>
            </div>
        </div>
    
        <!-- Footer remains the same -->
        <footer class="footer">
            <div class="footer-container">
                <div>
                    <div class="footer-logo">Kenya Safari</div>
                    <p>Experience the magic of Kenya with our personalized safari tours and adventures.</p>
                @extends('layouts.app')
                
                @section('title', 'Safari Destinations - Kenya Safari')
                
                @section('content')
                <div class="py-8 bg-gray-50">
                    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                        <!-- Hero Banner -->
                        <div class="relative rounded-xl overflow-hidden mb-10 shadow-xl">
                            <div class="h-80 md:h-96 bg-cover bg-center" style="background-image: url('https://images.unsplash.com/photo-1523805009345-7448845a9e53?ixlib=rb-4.0.3&auto=format&fit=crop&w=1200&q=80')">
                                <div class="absolute inset-0 bg-black/40"></div>
                                <div class="relative h-full flex items-center justify-center z-10">
                                    <div class="text-center text-white px-4">
                                        <h1 class="text-4xl md:text-5xl font-bold mb-4">Discover Kenya's Wonders</h1>
                                        <p class="text-lg md:text-xl max-w-3xl mx-auto">Explore the breathtaking landscapes and incredible wildlife of East Africa</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Introduction -->
                        <div class="bg-white rounded-xl shadow-lg p-8 mb-10">
                            <div class="max-w-4xl mx-auto text-center">
                                <h2 class="text-3xl font-bold mb-6 text-gray-800">Our Safari Destinations</h2>
                                <p class="text-gray-600 mb-6 text-lg">
                                    Kenya offers some of the world's most spectacular wildlife viewing opportunities. From the iconic Maasai Mara to the snow-capped peaks of Mount Kenya, our carefully curated safari destinations showcase the incredible diversity of landscapes and wildlife that make Kenya a premier safari destination.
                                </p>
                            </div>
                        </div>
                        
                        <!-- Featured Destinations -->
                        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 mb-16">
                            <!-- Maasai Mara -->
                            <div class="bg-white rounded-xl shadow-lg overflow-hidden transition-transform duration-300 hover:shadow-xl hover:-translate-y-2">
                                <div class="h-60 bg-cover bg-center" style="background-image: url('https://images.unsplash.com/photo-1547970810-dc1eac37d174?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80')"></div>
                                <div class="p-6">
                                    <div class="flex justify-between items-center mb-3">
                                        <h3 class="text-xl font-bold text-gray-800">Maasai Mara</h3>
                                        <span class="bg-orange-100 text-orange-800 text-xs font-semibold px-2.5 py-0.5 rounded">Popular</span>
                                    </div>
                                    <p class="text-gray-600 mb-4">
                                        Home to the Great Migration, the Maasai Mara offers unparalleled wildlife viewing with vast savannah plains teeming with lions, elephants, and wildebeest.
                                    </p>
                                    <div class="flex items-center text-sm text-gray-500 mb-4">
                                        <span class="mr-4">⭐ 4.9 (128 reviews)</span>
                                        <span>3-7 day safaris</span>
                                    </div>
                                    <a href="#" class="inline-block bg-orange-600 hover:bg-orange-700 text-white font-medium py-2 px-4 rounded-lg transition duration-300">
                                        Explore Maasai Mara
                                    </a>
                                </div>
                            </div>
                            
                            <!-- Amboseli -->
                            <div class="bg-white rounded-xl shadow-lg overflow-hidden transition-transform duration-300 hover:shadow-xl hover:-translate-y-2">
                                <div class="h-60 bg-cover bg-center" style="background-image: url('https://images.unsplash.com/photo-1612887726773-e64e20cf8ba7?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80')"></div>
                                <div class="p-6">
                                    <div class="flex justify-between items-center mb-3">
                                        <h3 class="text-xl font-bold text-gray-800">Amboseli</h3>
                                        <span class="bg-green-100 text-green-800 text-xs font-semibold px-2.5 py-0.5 rounded">Family Friendly</span>
                                    </div>
                                    <p class="text-gray-600 mb-4">
                                        Famous for its large elephant herds and stunning views of Mount Kilimanjaro, Amboseli offers incredible photo opportunities and diverse wildlife.
                                    </p>
                                    <div class="flex items-center text-sm text-gray-500 mb-4">
                                        <span class="mr-4">⭐ 4.8 (96 reviews)</span>
                                        <span>2-5 day safaris</span>
                                    </div>
                                    <a href="#" class="inline-block bg-orange-600 hover:bg-orange-700 text-white font-medium py-2 px-4 rounded-lg transition duration-300">
                                        Explore Amboseli
                                    </a>
                                </div>
                            </div>
                            
                            <!-- Tsavo -->
                            <div class="bg-white rounded-xl shadow-lg overflow-hidden transition-transform duration-300 hover:shadow-xl hover:-translate-y-2">
                                <div class="h-60 bg-cover bg-center" style="background-image: url('https://images.unsplash.com/photo-1516426122078-c23e76319801?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80')"></div>
                                <div class="p-6">
                                    <div class="flex justify-between items-center mb-3">
                                        <h3 class="text-xl font-bold text-gray-800">Tsavo National Park</h3>
                                        <span class="bg-blue-100 text-blue-800 text-xs font-semibold px-2.5 py-0.5 rounded">Adventure</span>
                                    </div>
                                    <p class="text-gray-600 mb-4">
                                        Kenya's largest national park offers diverse landscapes from mountains and rivers to savannah, with famous red elephants and rich biodiversity.
                                    </p>
                                    <div class="flex items-center text-sm text-gray-500 mb-4">
                                        <span class="mr-4">⭐ 4.7 (84 reviews)</span>
                                        <span>3-6 day safaris</span>
                                    </div>
                                    <a href="#" class="inline-block bg-orange-600 hover:bg-orange-700 text-white font-medium py-2 px-4 rounded-lg transition duration-300">
                                        Explore Tsavo
                                    </a>
                                </div>
                            </div>
                            
                            <!-- Lake Nakuru -->
                            <div class="bg-white rounded-xl shadow-lg overflow-hidden transition-transform duration-300 hover:shadow-xl hover:-translate-y-2">
                                <div class="h-60 bg-cover bg-center" style="background-image: url('https://images.unsplash.com/photo-1518709766631-a6a7f45921c3?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80')"></div>
                                <div class="p-6">
                                    <div class="flex justify-between items-center mb-3">
                                        <h3 class="text-xl font-bold text-gray-800">Lake Nakuru</h3>
                                        <span class="bg-purple-100 text-purple-800 text-xs font-semibold px-2.5 py-0.5 rounded">Bird Watching</span>
                                    </div>
                                    <p class="text-gray-600 mb-4">
                                        Famous for its flamingos and rhino sanctuary, Lake Nakuru offers a unique ecosystem with over 400 bird species and diverse wildlife.
                                    </p>
                                    <div class="flex items-center text-sm text-gray-500 mb-4">
                                        <span class="mr-4">⭐ 4.6 (72 reviews)</span>
                                        <span>1-3 day safaris</span>
                                    </div>
                                    <a href="#" class="inline-block bg-orange-600 hover:bg-orange-700 text-white font-medium py-2 px-4 rounded-lg transition duration-300">
                                        Explore Lake Nakuru
                                    </a>
                                </div>
                            </div>
                            
                            <!-- Mount Kenya -->
                            <div class="bg-white rounded-xl shadow-lg overflow-hidden transition-transform duration-300 hover:shadow-xl hover:-translate-y-2">
                                <div class="h-60 bg-cover bg-center" style="background-image: url('https://images.unsplash.com/photo-1492305175278-3b3afaa2f31f?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80')"></div>
                                <div class="p-6">
                                    <div class="flex justify-between items-center mb-3">
                                        <h3 class="text-xl font-bold text-gray-800">Mount Kenya</h3>
                                        <span class="bg-red-100 text-red-800 text-xs font-semibold px-2.5 py-0.5 rounded">Hiking</span>
                                    </div>
                                    <p class="text-gray-600 mb-4">
                                        Africa's second-highest mountain offers breathtaking alpine scenery, unique high-altitude wildlife, and challenging trekking routes.
                                    </p>
                                    <div class="flex items-center text-sm text-gray-500 mb-4">
                                        <span class="mr-4">⭐ 4.9 (64 reviews)</span>
                                        <span>4-7 day treks</span>
                                    </div>
                                    <a href="#" class="inline-block bg-orange-600 hover:bg-orange-700 text-white font-medium py-2 px-4 rounded-lg transition duration-300">
                                        Explore Mount Kenya
                                    </a>
                                </div>
                            </div>
                            
                            <!-- Samburu -->
                            <div class="bg-white rounded-xl shadow-lg overflow-hidden transition-transform duration-300 hover:shadow-xl hover:-translate-y-2">
                                <div class="h-60 bg-cover bg-center" style="background-image: url('https://images.unsplash.com/photo-1549366021-9f761d450615?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80')"></div>
                                <div class="p-6">
                                    <div class="flex justify-between items-center mb-3">
                                        <h3 class="text-xl font-bold text-gray-800">Samburu</h3>
                                        <span class="bg-yellow-100 text-yellow-800 text-xs font-semibold px-2.5 py-0.5 rounded">Cultural</span>
                                    </div>
                                    <p class="text-gray-600 mb-4">
                                        Home to unique wildlife species and the colorful Samburu people, this reserve offers authentic cultural experiences and stunning landscapes.
                                    </p>
                                    <div class="flex items-center text-sm text-gray-500 mb-4">
                                        <span class="mr-4">⭐ 4.7 (58 reviews)</span>
                                        <span>3-5 day safaris</span>
                                    </div>
                                    <a href="#" class="inline-block bg-orange-600 hover:bg-orange-700 text-white font-medium py-2 px-4 rounded-lg transition duration-300">
                                        Explore Samburu
                                    </a>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Safari Types -->
                        <div class="bg-white rounded-xl shadow-lg p-8 mb-10">
                            <h2 class="text-3xl font-bold mb-8 text-center text-gray-800">Safari Experiences</h2>
                            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                                <div class="text-center p-6 bg-orange-50 rounded-lg">
                                    <div class="w-16 h-16 bg-orange-100 rounded-full flex items-center justify-center mx-auto mb-4">
                                        <span class="text-orange-600 text-2xl">🚙</span>
                                    </div>
                                    <h3 class="font-bold text-xl mb-3">Game Drives</h3>
                                    <p class="text-gray-600">
                                        Experience the thrill of spotting wildlife from our custom 4x4 safari vehicles with expert guides.
                                    </p>
                                </div>
                                <div class="text-center p-6 bg-orange-50 rounded-lg">
                                    <div class="w-16 h-16 bg-orange-100 rounded-full flex items-center justify-center mx-auto mb-4">
                                        <span class="text-orange-600 text-2xl">🎈</span>
                                    </div>
                                    <h3 class="font-bold text-xl mb-3">Hot Air Balloons</h3>
                                    <p class="text-gray-600">
                                        Soar above the savannah at dawn for a breathtaking aerial view of Kenya's landscapes and wildlife.
                                    </p>
                                </div>
                                <div class="text-center p-6 bg-orange-50 rounded-lg">
                                    <div class="w-16 h-16 bg-orange-100 rounded-full flex items-center justify-center mx-auto mb-4">
                                        <span class="text-orange-600 text-2xl">👣</span>
                                    </div>
                                    <h3 class="font-bold text-xl mb-3">Walking Safaris</h3>
                                    <p class="text-gray-600">
                                        Get closer to nature with guided walking safaris that offer an intimate wildlife experience.
                                    </p>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Map Section -->
                        <div class="bg-white rounded-xl shadow-lg p-8 mb-10">
                            <h2 class="text-3xl font-bold mb-6 text-center text-gray-800">Kenya Safari Map</h2>
                            <div class="h-96 bg-gray-200 rounded-lg flex items-center justify-center mb-6">
                                <span class="text-gray-500">Interactive Map Coming Soon</span>
                            </div>
                            <p class="text-gray-600 text-center max-w-3xl mx-auto">
                                Our safari destinations are strategically located across Kenya's most beautiful regions, offering easy access to diverse wildlife and landscapes.
                            </p>
                        </div>
                        
                        <!-- Testimonials -->
                        <div class="bg-white rounded-xl shadow-lg p-8 mb-10">
                            <h2 class="text-3xl font-bold mb-8 text-center text-gray-800">What Our Guests Say</h2>
                            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                                <div class="bg-gray-50 p-6 rounded-lg">
                                    <div class="flex items-center mb-4">
                                        <div class="h-12 w-12 rounded-full bg-orange-100 flex items-center justify-center mr-4">
                                            <span class="text-orange-600 font-bold">JM</span>
                                        </div>
                                        <div>
                                            <h4 class="font-bold">James Miller</h4>
                                            <div class="text-yellow-400 flex">
                                                ★★★★★
                                            </div>
                                        </div>
                                    </div>
                                    <p class="text-gray-600 italic">
                                        "Our safari to Maasai Mara was the trip of a lifetime. We saw all of the Big Five in just two days! Our guide was incredibly knowledgeable and made sure we had the best experience possible."
                                    </p>
                                </div>
                                
                                <div class="bg-gray-50 p-6 rounded-lg">
                                    <div class="flex items-center mb-4">
                                        <div class="h-12 w-12 rounded-full bg-orange-100 flex items-center justify-center mr-4">
                                            <span class="text-orange-600 font-bold">SJ</span>
                                        </div>
                                        <div>
                                            <h4 class="font-bold">Sarah Johnson</h4>
                                            <div class="text-yellow-400 flex">
                                                ★★★★★
                                            </div>
                                        </div>
                                    </div>
                                    <p class="text-gray-600 italic">
                                        "Amboseli National Park was breathtaking. Seeing elephants with Mt. Kilimanjaro in the background was surreal. The accommodations were luxurious and the staff went above and beyond."
                                    </p>
                                </div>
                                
                                <div class="bg-gray-50 p-6 rounded-lg">
                                    <div class="flex items-center mb-4">
                                        <div class="h-12 w-12 rounded-full bg-orange-100 flex items-center justify-center mr-4">
                                            <span class="text-orange-600 font-bold">DP</span>
                                        </div>
                                        <div>
                                            <h4 class="font-bold">David Parker</h4>
                                            <div class="text-yellow-400 flex">
                                                ★★★★★
                                            </div>
                                        </div>
                                    </div>
                                    <p class="text-gray-600 italic">
                                        "The hot air balloon safari over Maasai Mara was an experience I'll never forget. Watching the sunrise over the savannah with wildlife below was magical. Worth every penny!"
                                    </p>
                                </div>
                            </div>
                            <div class="text-center mt-8">
                                <a href="#" class="text-orange-600 hover:text-orange-700 font-medium">Read More Reviews →</a>
                            </div>
                        </div>
                        
                        <!-- FAQ Section -->
                        <div class="bg-white rounded-xl shadow-lg p-8 mb-10">
                            <h2 class="text-3xl font-bold mb-8 text-center text-gray-800">Frequently Asked Questions</h2>
                            <div class="max-w-4xl mx-auto space-y-6">
                                <div class="border-b border-gray-200 pb-4">
                                    <h3 class="text-lg font-semibold mb-2">What is the best time to visit Kenya for a safari?</h3>
                                    <p class="text-gray-600">
                                        The best time for wildlife viewing is during the dry season (June to October) when animals gather around water sources. The Great Migration in Maasai Mara happens from July to October. However, Kenya is a year-round destination with different experiences in each season.
                                    </p>
                                </div>
                                <div class="border-b border-gray-200 pb-4">
                                    <h3 class="text-lg font-semibold mb-2">How many days do I need for a good safari experience?</h3>
                                    <p class="text-gray-600">
                                        We recommend at least 5-7 days to experience a couple of different parks or reserves. This gives you enough time to see diverse wildlife and landscapes without feeling rushed. Longer safaris of 10-14 days allow you to explore more regions.
                                    </p>
                                </div>
                                <div class="border-b border-gray-200 pb-4">
                                    <h3 class="text-lg font-semibold mb-2">What should I pack for a Kenya safari?</h3>
                                    <p class="text-gray-600">
                                        Pack lightweight, neutral-colored clothing (avoid bright colors), a wide-brimmed hat, sunglasses, sunscreen, insect repellent, comfortable walking shoes, a light jacket for mornings and evenings, binoculars, and a good camera with extra batteries.
                                    </p>
                                </div>
                                <div class="border-b border-gray-200 pb-4">
                                    <h3 class="text-lg font-semibold mb-2">Are Kenya safaris safe for families with children?</h3>
                                    <p class="text-gray-600">
                                        Yes, many of our safaris are family-friendly. We recommend destinations like Amboseli and Lake Nakuru for families, and we can customize itineraries to include activities suitable for children. Most lodges welcome children and some offer special programs for young explorers.
                                    </p>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Call to Action -->
                        <div class="bg-orange-600 rounded-xl shadow-xl p-8 mb-10 text-white">
                            <div class="max-w-4xl mx-auto text-center">
                                <h2 class="text-3xl font-bold mb-4">Ready for Your Kenya Safari Adventure?</h2>
                                <p class="text-lg mb-8 text-orange-100">
                                    Contact us today to start planning your dream safari. Our expert team will create a personalized itinerary based on your preferences, budget, and travel dates.
                                </p>
                                <div class="flex flex-col sm:flex-row justify-center gap-4">
                                    <a href="{{ route('contact') }}" class="bg-white text-orange-600 hover:bg-orange-100 font-bold py-3 px-6 rounded-lg transition duration-300">
                                        Contact Us
                                    </a>
                                    <a href="#" class="bg-transparent hover:bg-orange-700 border-2 border-white font-bold py-3 px-6 rounded-lg transition duration-300">
                                        Download Brochure
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

<!-- Add JavaScript for sidebar toggle functionality -->
<script>
    function toggleSidebar() {
        const sidebar = document.getElementById('sidebar');
        sidebar.style.display = sidebar.style.display === 'block' ? 'none' : 'block';
    }
</script>
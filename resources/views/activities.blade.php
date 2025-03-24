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
            
                <!-- Main Content -->
                {{-- <div class="main-content section" style="padding-top: 0;">
                    <div class="grid grid-3">
                        <!-- Activities cards remain unchanged -->
                    </div>
                </div>
            </div>
        </div> --}}
    
        <!-- Footer remains the same -->
        <footer class="footer">
            <div class="footer-container">
                <div>
                    {{-- <div class="footer-logo">Kenya Safari</div>
                    <p>Experience the magic of Kenya with our personalized safari tours and adventures.</p> --}}
                @extends('layouts.app')
                
                @section('title', 'Safari Destinations - Kenya Safari')
                
                @section('content')
                <div class="py-8 bg-gray-50">
                    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                        <!-- Hero Banner -->
                        <div class="relative rounded-xl overflow-hidden mb-10 shadow-xl">
                            <div class="h-80 md:h-96 bg-cover bg-center" style="background-image: url('https://img.freepik.com/free-photo/tourist-carrying-luggage_23-2151747324.jpg?ga=GA1.1.2122763271.1742824026&semt=ais_keywords_boost')">
                                <div class="absolute inset-0 bg-black/40"></div>
                                <div class="relative h-full flex items-center justify-center z-10">
                                    <div class="text-center text-white px-4">
                                        <h1 class="text-4xl md:text-5xl font-bold mb-4">Popular Activities You Can Try</h1>
                                        <p class="text-lg md:text-xl max-w-3xl mx-auto">Explore specific activites that most peeople fnd charming in Kenya</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Introduction -->
                        <div class="bg-white rounded-xl shadow-lg p-8 mb-10">
                            <div class="max-w-4xl mx-auto text-center">
                                <h2 class="text-3xl font-bold mb-6 text-gray-800">Fun Activities</h2>
                                <p class="text-gray-600 mb-6 text-lg">
                                    "Discover the best of Kenya with experiences designed for the curious and the adventurous — from private game drives across iconic savannahs and breathtaking hot air balloon safaris, to serene coastal escapes and immersive cultural encounters. Every moment promises a perfect blend of luxury, adventure, and unforgettable memories."                                </p>
                            </div>
                        </div>
                        
                        <!-- Featured Destinations -->
                        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 mb-16">
                            <!-- Hiking -->
                            <div class="bg-white rounded-xl shadow-lg overflow-hidden transition-transform duration-300 hover:shadow-xl hover:-translate-y-2">
                                <div class="h-60 bg-cover bg-center" style="background-image: url('https://img.freepik.com/premium-photo/young-man-walking-mountain_543270-1132.jpg?ga=GA1.1.2122763271.1742824026&semt=ais_keywords_boost')"></div>
                                <div class="p-6">
                                    <div class="flex justify-between items-center mb-3">
                                        <h3 class="text-xl font-bold text-gray-800">Hiking</h3>
                                        <span class="bg-orange-100 text-orange-800 text-xs font-semibold px-2.5 py-0.5 rounded">Popular</span>
                                    </div>
                                    <p class="text-gray-600 mb-4">
                                        Discover the thrill of the trail — where every step leads to breathtaking views, peaceful escapes, and unforgettable adventures waiting just beyond the next bend.                                    </p>
                                    <div class="flex items-center text-sm text-gray-500 mb-4">
                                        <span class="mr-4">⭐ 4.9 (128 reviews)</span>
                                        <span>3-7 days</span>
                                    </div>
                                    <a href="#" class="inline-block bg-orange-600 hover:bg-orange-700 text-white font-medium py-2 px-4 rounded-lg transition duration-300">
                                        Explore Hiking
                                    </a>
                                </div>
                            </div>
                            
                            <!-- Coastal Beaches -->
                            <div class="bg-white rounded-xl shadow-lg overflow-hidden transition-transform duration-300 hover:shadow-xl hover:-translate-y-2">
                                <div class="h-60 bg-cover bg-center" style="background-image: url('https://img.freepik.com/premium-photo/lounge-chairs-parasols-beach-against-clear-sky_1048944-9405004.jpg?ga=GA1.1.2122763271.1742824026&semt=ais_keywords_boost')"></div>
                                <div class="p-6">
                                    <div class="flex justify-between items-center mb-3">
                                        <h3 class="text-xl font-bold text-gray-800">Coastal Beaches</h3>
                                        <span class="bg-green-100 text-green-800 text-xs font-semibold px-2.5 py-0.5 rounded">Popular</span>
                                    </div>
                                    <p class="text-gray-600 mb-4">
                                        "Escape to the coast — where golden sands, crystal-clear waters, and the soothing sound of waves create the perfect backdrop for your next getaway."                                    </p>
                                    <div class="flex items-center text-sm text-gray-500 mb-4">
                                        <span class="mr-4">⭐ 4.8 (96 reviews)</span>
                                        <span>2-5 day </span>
                                    </div>
                                    <a href="#" class="inline-block bg-orange-600 hover:bg-orange-700 text-white font-medium py-2 px-4 rounded-lg transition duration-300">
                                        Explore Coastal Beaches
                                    </a>
                                </div>
                            </div>
                            
                            <!-- Game Drives -->
                            <div class="bg-white rounded-xl shadow-lg overflow-hidden transition-transform duration-300 hover:shadow-xl hover:-translate-y-2">
                                <div class="h-60 bg-cover bg-center" style="background-image: url('https://images.unsplash.com/photo-1516426122078-c23e76319801?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80')"></div>
                                <div class="p-6">
                                    <div class="flex justify-between items-center mb-3">
                                        <h3 class="text-xl font-bold text-gray-800">Game drives</h3>
                                        <span class="bg-blue-100 text-blue-800 text-xs font-semibold px-2.5 py-0.5 rounded">Adventure</span>
                                    </div>
                                    <p class="text-gray-600 mb-4">
                                        "Experience the wild like never before — embark on a thrilling game drive and witness majestic wildlife roaming free across breathtaking landscapes."                                    </p>
                                    <div class="flex items-center text-sm text-gray-500 mb-4">
                                        <span class="mr-4">⭐ 4.7 (84 reviews)</span>
                                        <span>3-6 days</span>
                                    </div>
                                    <a href="#" class="inline-block bg-orange-600 hover:bg-orange-700 text-white font-medium py-2 px-4 rounded-lg transition duration-300">
                                        Explore Game Drives
                                    </a>
                                </div>
                            </div>
                            
                            <!-- People and Culture -->
                            <div class="bg-white rounded-xl shadow-lg overflow-hidden transition-transform duration-300 hover:shadow-xl hover:-translate-y-2">
                                <div class="h-60 bg-cover bg-center" style="background-image: url('https://img.freepik.com/free-photo/front-view-elderly-man-with-strong-ethnic-features_23-2150607324.jpg?ga=GA1.1.2122763271.1742824026&semt=ais_keywords_boost')"></div>
                                <div class="p-6">
                                    <div class="flex justify-between items-center mb-3">
                                        <h3 class="text-xl font-bold text-gray-800">People and Culture</h3>
                                        <span class="bg-purple-100 text-purple-800 text-xs font-semibold px-2.5 py-0.5 rounded">Cultural</span>
                                    </div>
                                    <p class="text-gray-600 mb-4">
                                        "Immerse yourself in rich traditions, vibrant cultures, and the warm hospitality of local communities — where every encounter tells a unique story."                                    </p>
                                    <div class="flex items-center text-sm text-gray-500 mb-4">
                                        <span class="mr-4">⭐ 4.6 (72 reviews)</span>
                                        <span>1-3 day safaris</span>
                                    </div>
                                    <a href="#" class="inline-block bg-orange-600 hover:bg-orange-700 text-white font-medium py-2 px-4 rounded-lg transition duration-300">
                                        Explore People and Culture
                                    </a>
                                </div>
                            </div>
                            
                            <!-- Hot Air Balloons -->
                            <div class="bg-white rounded-xl shadow-lg overflow-hidden transition-transform duration-300 hover:shadow-xl hover:-translate-y-2">
                                <div class="h-60 bg-cover bg-center" style="background-image: url('https://img.freepik.com/free-photo/hot-air-balloons-hills-fields-sunset-cappadocia-turkey_181624-20680.jpg?ga=GA1.1.2122763271.1742824026&semt=ais_keywords_boost')"></div>
                                <div class="p-6">
                                    <div class="flex justify-between items-center mb-3">
                                        <h3 class="text-xl font-bold text-gray-800">Hot Air Balloons</h3>
                                        <span class="bg-red-100 text-red-800 text-xs font-semibold px-2.5 py-0.5 rounded">Adventure</span>
                                    </div>
                                    <p class="text-gray-600 mb-4">
                                        "Soar above breathtaking landscapes as the sun rises — a hot air balloon safari offers unforgettable views and a once-in-a-lifetime adventure from the skies."                                    </p>
                                    <div class="flex items-center text-sm text-gray-500 mb-4">
                                        <span class="mr-4">⭐ 4.9 (64 reviews)</span>
                                        <span>4-7 day treks</span>
                                    </div>
                                    <a href="#" class="inline-block bg-orange-600 hover:bg-orange-700 text-white font-medium py-2 px-4 rounded-lg transition duration-300">
                                        Explore Hot Air Balloons
                                    </a>
                                </div>
                            </div>
                            
                            <!-- City Tours -->
                            <div class="bg-white rounded-xl shadow-lg overflow-hidden transition-transform duration-300 hover:shadow-xl hover:-translate-y-2">
                                <div class="h-60 bg-cover bg-center" style="background-image: url('https://img.freepik.com/free-photo/new-york-city_649448-1679.jpg?ga=GA1.1.2122763271.1742824026&semt=ais_keywords_boost')"></div>
                                <div class="p-6">
                                    <div class="flex justify-between items-center mb-3">
                                        <h3 class="text-xl font-bold text-gray-800">City Tours</h3>
                                        <span class="bg-yellow-100 text-yellow-800 text-xs font-semibold px-2.5 py-0.5 rounded">Cultural</span>
                                    </div>
                                    <p class="text-gray-600 mb-4">
                                        "Dive into the heart of the city — uncover hidden gems, vibrant markets, rich history, and local culture all in one unforgettable tour."                                    </p>
                                    <div class="flex items-center text-sm text-gray-500 mb-4">
                                        <span class="mr-4">⭐ 4.7 (58 reviews)</span>
                                        <span>3-5 day </span>
                                    </div>
                                    <a href="#" class="inline-block bg-orange-600 hover:bg-orange-700 text-white font-medium py-2 px-4 rounded-lg transition duration-300">
                                        Explore City Tours
                                    </a>
                                </div>
                            </div>
                        </div>
                        
                        <!-- More Activties -->
                         <div class="bg-white rounded-xl shadow-lg p-8 mb-10">
                            <h2 class="text-3xl font-bold mb-8 text-center text-gray-800">More Activities</h2>
                            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                                <div class="text-center p-6 bg-orange-50 rounded-lg">
                                    <div class="w-16 h-16 bg-orange-100 rounded-full flex items-center justify-center mx-auto mb-4">
                                        <span class="text-orange-600 text-2xl">🚙</span>
                                    </div>
                                    <h3 class="font-bold text-xl mb-3">Group Cycling</h3>
                                    <p class="text-gray-600">
                                        "Pedal through stunning landscapes and wildlife trails — experience the thrill of group cycling adventures where every turn reveals a new discovery."                                    </p>
                                </div>
                                <div class="text-center p-6 bg-orange-50 rounded-lg">
                                    <div class="w-16 h-16 bg-orange-100 rounded-full flex items-center justify-center mx-auto mb-4">
                                        <span class="text-orange-600 text-2xl">🎈</span>
                                    </div>
                                    <h3 class="font-bold text-xl mb-3">Camping</h3>
                                    <p class="text-gray-600">
                                        "Escape to the wild and experience the magic of camping — where starry skies, crackling campfires, and nature’s beauty create unforgettable memories."                                    </p>
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
                        </div> --}} 
                        
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
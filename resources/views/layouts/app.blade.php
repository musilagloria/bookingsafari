<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>@yield('title', 'Kenya Safari')</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans antialiased">
        <div class="min-h-screen bg-gray-100">
            <!-- Navigation -->
            <nav class="bg-white shadow-md">
                <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                    <div class="flex justify-between py-4">
                        <div class="flex-shrink-0 flex items-center">
                            <a href="{{ route('dashboard') }}" class="flex items-center">
                                <span class="text-orange-600 font-bold text-2xl">Kenya Safari</span>
                            </a>
                        </div>
                        
                        <!-- Centered navigation links -->
                        <div class="hidden sm:flex sm:items-center sm:justify-center flex-1">
                            <div class="flex space-x-10">
                                <a href="{{ route('dashboard') }}" class="inline-flex items-center px-3 py-2 border-b-2 {{ request()->routeIs('dashboard') ? 'border-orange-500 text-orange-600 font-bold' : 'border-transparent text-gray-600 hover:text-orange-500 hover:border-orange-300' }} text-base font-semibold transition duration-150">
                                    Home
                                </a>
                                <a href="{{ route('destinations') }}" class="inline-flex items-center px-3 py-2 border-b-2 {{ request()->routeIs('destinations') ? 'border-orange-500 text-orange-600 font-bold' : 'border-transparent text-gray-600 hover:text-orange-500 hover:border-orange-300' }} text-base font-semibold transition duration-150">
                                    Destinations
                                </a>
                                <a href="{{ route('activities') }}" class="inline-flex items-center px-3 py-2 border-b-2 {{ request()->routeIs('destinations') ? 'border-orange-500 text-orange-600 font-bold' : 'border-transparent text-gray-600 hover:text-orange-500 hover:border-orange-300' }} text-base font-semibold transition duration-150">
                                    Activities
                                </a>
                                <a href="{{ route('about') }}" class="inline-flex items-center px-3 py-2 border-b-2 {{ request()->routeIs('about') ? 'border-orange-500 text-orange-600 font-bold' : 'border-transparent text-gray-600 hover:text-orange-500 hover:border-orange-300' }} text-base font-semibold transition duration-150">
                                    About Us
                                </a>
                                <a href="{{ route('contact') }}" class="inline-flex items-center px-3 py-2 border-b-2 {{ request()->routeIs('contact') ? 'border-orange-500 text-orange-600 font-bold' : 'border-transparent text-gray-600 hover:text-orange-500 hover:border-orange-300' }} text-base font-semibold transition duration-150">
                                    Contact
                                </a>
                            </div>
                        </div>
                        
                        <div class="hidden sm:flex sm:items-center space-x-3">
                            @auth
                                <a href="{{ route('profile.edit') }}" class="text-gray-600 hover:text-orange-500 px-3 py-2 rounded-md text-sm font-medium transition duration-150">
                                    Profile
                                </a>
                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf
                                    <button type="submit" class="text-gray-600 hover:text-orange-500 px-3 py-2 rounded-md text-sm font-medium transition duration-150">
                                        Log Out
                                    </button>
                                </form>
                            @else
                                <a href="{{ route('login') }}" class="text-gray-600 hover:text-orange-500 px-3 py-2 rounded-md text-sm font-medium transition duration-150">
                                    Log in
                                </a>
                                <a href="{{ route('register') }}" class="ml-2 inline-flex items-center px-4 py-2 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-orange-600 hover:bg-orange-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-orange-500 transition duration-150">
                                    Register
                                </a>
                            @endauth
                        </div>
                        <div class="-mr-2 flex items-center sm:hidden">
                            <!-- Mobile menu button -->
                            <button type="button" class="mobile-menu-button inline-flex items-center justify-center p-2 rounded-md text-gray-500 hover:text-orange-500 hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-orange-500 transition duration-150" aria-expanded="false">
                                <span class="sr-only">Open main menu</span>
                                <!-- Icon when menu is closed -->
                                <svg class="block h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                                </svg>
                                <!-- Icon when menu is open -->
                                <svg class="hidden h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Mobile menu, show/hide based on menu state. -->
                <div class="mobile-menu hidden sm:hidden">
                    <div class="pt-2 pb-3 space-y-1">
                        <a href="{{ route('dashboard') }}" class="block pl-3 pr-4 py-2 border-l-4 {{ request()->routeIs('dashboard') ? 'border-orange-500 text-orange-700 bg-orange-50 font-semibold' : 'border-transparent text-gray-600 hover:bg-orange-50 hover:border-orange-300 hover:text-orange-700' }} text-base font-medium transition duration-150">
                            Home
                        </a>
                        <a href="{{ route('destinations') }}" class="block pl-3 pr-4 py-2 border-l-4 {{ request()->routeIs('destinations') ? 'border-orange-500 text-orange-700 bg-orange-50 font-semibold' : 'border-transparent text-gray-600 hover:bg-orange-50 hover:border-orange-300 hover:text-orange-700' }} text-base font-medium transition duration-150">
                            Destinations
                        </a>
                        <a href="{{ route('destinations') }}" class="block pl-3 pr-4 py-2 border-l-4 {{ request()->routeIs('destinations') ? 'border-orange-500 text-orange-700 bg-orange-50 font-semibold' : 'border-transparent text-gray-600 hover:bg-orange-50 hover:border-orange-300 hover:text-orange-700' }} text-base font-medium transition duration-150">
                            Activities
                        </a>
                        <a href="{{ route('about') }}" class="block pl-3 pr-4 py-2 border-l-4 {{ request()->routeIs('about') ? 'border-orange-500 text-orange-700 bg-orange-50 font-semibold' : 'border-transparent text-gray-600 hover:bg-orange-50 hover:border-orange-300 hover:text-orange-700' }} text-base font-medium transition duration-150">
                            About Us
                        </a>
                        <a href="{{ route('contact') }}" class="block pl-3 pr-4 py-2 border-l-4 {{ request()->routeIs('contact') ? 'border-orange-500 text-orange-700 bg-orange-50 font-semibold' : 'border-transparent text-gray-600 hover:bg-orange-50 hover:border-orange-300 hover:text-orange-700' }} text-base font-medium transition duration-150">
                            Contact
                        </a>
                    </div>
                    <div class="pt-4 pb-3 border-t border-gray-200">
                        @auth
                            <div class="flex items-center px-4">
                                <div class="flex-shrink-0">
                                    <div class="h-10 w-10 rounded-full bg-orange-100 flex items-center justify-center text-orange-600 font-bold">
                                        {{ substr(Auth::user()->name, 0, 1) }}
                                    </div>
                                </div>
                                <div class="ml-3">
                                    <div class="text-base font-medium text-gray-800">{{ Auth::user()->name }}</div>
                                    <div class="text-sm font-medium text-gray-500">{{ Auth::user()->email }}</div>
                                </div>
                            </div>
                            <div class="mt-3 space-y-1">
                                <a href="{{ route('profile.edit') }}" class="block px-4 py-2 text-base font-medium text-gray-600 hover:text-orange-700 hover:bg-orange-50 transition duration-150">
                                    Profile
                                </a>
                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf
                                    <button type="submit" class="block w-full text-left px-4 py-2 text-base font-medium text-gray-600 hover:text-orange-700 hover:bg-orange-50 transition duration-150">
                                        Log Out
                                    </button>
                                </form>
                            </div>
                        @else
                            <div class="mt-3 space-y-1">
                                <a href="{{ route('login') }}" class="block px-4 py-2 text-base font-medium text-gray-600 hover:text-orange-700 hover:bg-orange-50 transition duration-150">
                                    Log in
                                </a>
                                <a href="{{ route('register') }}" class="block px-4 py-2 text-base font-medium text-gray-600 hover:text-orange-700 hover:bg-orange-50 transition duration-150">
                                    Register
                                </a>
                            </div>
                        @endauth
                    </div>
                </div>
            </nav>

            <!-- Page Content -->
            <main>
                @yield('content')
            </main>
            
            <!-- Footer -->
            <footer class="bg-gray-800 text-white py-12">
                <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                    <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
                        <div>
                            <h3 class="text-lg font-bold mb-4">Kenya Safari</h3>
                            <p class="text-gray-400 mb-4">Discover the magic of Kenya with our expert-guided safari tours and adventures.</p>
                            <div class="flex space-x-4">
                                <a href="#" class="text-gray-400 hover:text-white">
                                    <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                        <path fill-rule="evenodd" d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z" clip-rule="evenodd" />
                                    </svg>
                                </a>
                                <a href="#" class="text-gray-400 hover:text-white">
                                    <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                        <path fill-rule="evenodd" d="M12.315 2c2.43 0 2.784.013 3.808.06 1.064.049 1.791.218 2.427.465a4.902 4.902 0 011.772 1.153 4.902 4.902 0 011.153 1.772c.247.636.416 1.363.465 2.427.048 1.067.06 1.407.06 4.123v.08c0 2.643-.012 2.987-.06 4.043-.049 1.064-.218 1.791-.465 2.427a4.902 4.902 0 01-1.153 1.772 4.902 4.902 0 01-1.772 1.153c-.636.247-1.363.416-2.427.465-1.067.048-1.407.06-4.123.06h-.08c-2.643 0-2.987-.012-4.043-.06-1.064-.049-1.791-.218-2.427-.465a4.902 4.902 0 01-1.772-1.153 4.902 4.902 0 01-1.153-1.772c-.247-.636-.416-1.363-.465-2.427-.047-1.024-.06-1.379-.06-3.808v-.63c0-2.43.013-2.784.06-3.808.049-1.064.218-1.791.465-2.427a4.902 4.902 0 011.153-1.772A4.902 4.902 0 015.45 2.525c.636-.247 1.363-.416 2.427-.465C8.901 2.013 9.256 2 11.685 2h.63zm-.081 1.802h-.468c-2.456 0-2.784.011-3.807.058-.975.045-1.504.207-1.857.344-.467.182-.8.398-1.15.748-.35.35-.566.683-.748 1.15-.137.353-.3.882-.344 1.857-.047 1.023-.058 1.351-.058 3.807v.468c0 2.456.011 2.784.058 3.807.045.975.207 1.504.344 1.857.182.466.399.8.748 1.15.35.35.683.566 1.15.748.353.137.882.3 1.857.344 1.054.048 1.37.058 4.041.058h.08c2.597 0 2.917-.01 3.96-.058.976-.045 1.505-.207 1.858-.344.466-.182.8-.398 1.15-.748.35-.35.566-.683.748-1.15.137-.353.3-.882.344-1.857.048-1.055.058-1.37.058-4.041v-.08c0-2.597-.01-2.917-.058-3.96-.045-.976-.207-1.505-.344-1.858a3.097 3.097 0 00-.748-1.15 3.098 3.098 0 00-1.15-.748c-.353-.137-.882-.3-1.857-.344-1.023-.047-1.351-.058-3.807-.058zM12 6.865a5.135 5.135 0 110 10.27 5.135 5.135 0 010-10.27zm0 1.802a3.333 3.333 0 100 6.666 3.333 3.333 0 000-6.666zm5.338-3.205a1.2 1.2 0 110 2.4 1.2 1.2 0 010-2.4z" clip-rule="evenodd" />
                                    </svg>
                                </a>
                                <a href="#" class="text-gray-400 hover:text-white">
                                    <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                        <path d="M8.29 20.251c7.547 0 11.675-6.253 11.675-11.675 0-.178 0-.355-.012-.53A8.348 8.348 0 0022 5.92a8.19 8.19 0 01-2.357.646 4.118 4.118 0 001.804-2.27 8.224 8.224 0 01-2.605.996 4.107 4.107 0 00-6.993 3.743 11.65 11.65 0 01-8.457-4.287 4.106 4.106 0 001.27 5.477A4.072 4.072 0 012.8 9.713v.052a4.105 4.105 0 003.292 4.022 4.095 4.095 0 01-1.853.07 4.108 4.108 0 003.834 2.85A8.233 8.233 0 012 18.407a11.616 11.616 0 006.29 1.84" />
                                    </svg>
                                </a>
                                <a href="#" class="text-gray-400 hover:text-white">
                                    <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                        <path fill-rule="evenodd" d="M19.812 5.418c.861.23 1.538.907 1.768 1.768C21.998 8.746 22 12 22 12s0 3.255-.418 4.814a2.504 2.504 0 0 1-1.768 1.768c-1.56.419-7.814.419-7.814.419s-6.255 0-7.814-.419a2.505 2.505 0 0 1-1.768-1.768C2 15.255 2 12 2 12s0-3.255.417-4.814a2.507 2.507 0 0 1 1.768-1.768C5.744 5 11.998 5 11.998 5s6.255 0 7.814.418ZM15.194 12 10 15V9l5.194 3Z" clip-rule="evenodd" />
                                    </svg>
                                </a>
                            </div>
                        </div>
                        <div>
                            <h3 class="text-lg font-bold mb-4">Quick Links</h3>
                            <ul class="space-y-2">
                                <li><a href="{{ route('dashboard') }}" class="text-gray-400 hover:text-white">Home</a></li>
                                <li><a href="{{ route('destinations') }}" class="text-gray-400 hover:text-white">Destinations</a></li>
                                <li><a href="{{ route('about') }}" class="text-gray-400 hover:text-white">About Us</a></li>
                                <li><a href="{{ route('contact') }}" class="text-gray-400 hover:text-white">Contact</a></li>
                            </ul>
                        </div>
                        <div>
                            <h3 class="text-lg font-bold mb-4">Popular Destinations</h3>
                            <ul class="space-y-2">
                                <li><a href="#" class="text-gray-400 hover:text-white">Maasai Mara</a></li>
                                <li><a href="#" class="text-gray-400 hover:text-white">Amboseli</a></li>
                                <li><a href="#" class="text-gray-400 hover:text-white">Tsavo</a></li>
                                <li><a href="#" class="text-gray-400 hover:text-white">Lake Nakuru</a></li>
                            </ul>
                        </div>
                        <div>
                            <h3 class="text-lg font-bold mb-4">Contact Us</h3>
                            <ul class="space-y-2 text-gray-400">
                                <li>Kimathi Street, Nairobi</li>
                                <li>Kenya, East Africa</li>
                                <li>info@kenyasafari.com</li>
                                <li>+254 700 123 456</li>
                            </ul>
                        </div>
                    </div>
                    <div class="border-t border-gray-700 mt-8 pt-8 text-center text-gray-400">
                        <p>&copy; {{ date('Y') }} Kenya Safari. All rights reserved.</p>
                    </div>
                </div>
            </footer>
        </div>
        
        <script>
            // Mobile menu toggle
            document.addEventListener('DOMContentLoaded', function() {
                const mobileMenuButton = document.querySelector('.mobile-menu-button');
                const mobileMenu = document.querySelector('.mobile-menu');
                
                mobileMenuButton.addEventListener('click', function() {
                    mobileMenu.classList.toggle('hidden');
                    const isOpen = !mobileMenu.classList.contains('hidden');
                    mobileMenuButton.setAttribute('aria-expanded', isOpen);
                    mobileMenuButton.querySelector('svg.block').classList.toggle('hidden');
                    mobileMenuButton.querySelector('svg.hidden').classList.toggle('hidden');
                });
            });
        </script>
    </body>
</html>

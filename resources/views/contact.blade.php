@extends('layouts.app')

@section('title', 'Contact Us - Kenya Safari')

@section('content')
<div class="py-8 bg-gray-50">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <!-- Hero Banner -->
        <div class="relative rounded-xl overflow-hidden mb-10 shadow-xl">
            <div class="h-64 md:h-80 bg-cover bg-center" style="background-image: url('https://images.unsplash.com/photo-1516426122078-c23e76319801?ixlib=rb-4.0.3&auto=format&fit=crop&w=1200&q=80')">
                <div class="absolute inset-0 bg-black/40"></div>
                <div class="relative h-full flex items-center justify-center z-10">
                    <div class="text-center text-white px-4">
                        <h1 class="text-4xl md:text-5xl font-bold mb-4">Contact Us</h1>
                        <p class="text-lg md:text-xl max-w-3xl mx-auto">Get in touch with our safari experts to plan your perfect Kenya adventure</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Contact Content -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mb-10">
            <!-- Contact Form -->
            <div class="md:col-span-2 bg-white rounded-xl shadow-lg p-8">
                <h2 class="text-2xl font-bold mb-6 text-gray-800">Send Us a Message</h2>
                <form>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
                        <div>
                            <label for="name" class="block text-sm font-medium text-gray-700 mb-1">Your Name</label>
                            <input type="text" id="name" name="name" class="w-full border border-gray-300 rounded-md px-3 py-2 focus:outline-none focus:ring-2 focus:ring-orange-500">
                        </div>
                        <div>
                            <label for="email" class="block text-sm font-medium text-gray-700 mb-1">Email Address</label>
                            <input type="email" id="email" name="email" class="w-full border border-gray-300 rounded-md px-3 py-2 focus:outline-none focus:ring-2 focus:ring-orange-500">
                        </div>
                    </div>
                    
                    <div class="mb-6">
                        <label for="subject" class="block text-sm font-medium text-gray-700 mb-1">Subject</label>
                        <input type="text" id="subject" name="subject" class="w-full border border-gray-300 rounded-md px-3 py-2 focus:outline-none focus:ring-2 focus:ring-orange-500">
                    </div>
                    
                    <div class="mb-6">
                        <label for="message" class="block text-sm font-medium text-gray-700 mb-1">Your Message</label>
                        <textarea id="message" name="message" rows="6" class="w-full border border-gray-300 rounded-md px-3 py-2 focus:outline-none focus:ring-2 focus:ring-orange-500"></textarea>
                    </div>
                    
                    <button type="submit" class="bg-orange-600 hover:bg-orange-700 text-white font-medium py-2 px-6 rounded-md transition duration-300">
                        Send Message
                    </button>
                </form>
            </div>
            
            <!-- Contact Information -->
            <div class="bg-white rounded-xl shadow-lg p-8">
                <h2 class="text-2xl font-bold mb-6 text-gray-800">Contact Information</h2>
                
                <div class="space-y-6">
                    <div>
                        <h3 class="font-bold text-lg mb-2">Office Location</h3>
                        <p class="text-gray-600">
                            Kimathi Street, Nairobi<br>
                            Kenya, East Africa
                        </p>
                    </div>
                    
                    <div>
                        <h3 class="font-bold text-lg mb-2">Email Us</h3>
                        <p class="text-gray-600">
                            info@kenyasafari.com<br>
                            bookings@kenyasafari.com
                        </p>
                    </div>
                    
                    <div>
                        <h3 class="font-bold text-lg mb-2">Call Us</h3>
                        <p class="text-gray-600">
                            +254 700 123 456<br>
                            +254 733 789 012
                        </p>
                    </div>
                    
                    <div>
                        <h3 class="font-bold text-lg mb-2">Business Hours</h3>
                        <p class="text-gray-600">
                            Monday - Friday: 8:00 AM - 6:00 PM<br>
                            Saturday: 9:00 AM - 4:00 PM<br>
                            Sunday: Closed
                        </p>
                    </div>
                </div>
                
                <div class="mt-8">
                    <h3 class="font-bold text-lg mb-4">Follow Us</h3>
                    <div class="flex space-x-4">
                        <a href="#" class="w-10 h-10 bg-gray-100 rounded-full flex items-center justify-center text-gray-600 hover:bg-orange-100 hover:text-orange-600 transition duration-300">
                            <span>FB</span>
                        </a>
                        <a href="#" class="w-10 h-10 bg-gray-100 rounded-full flex items-center justify-center text-gray-600 hover:bg-orange-100 hover:text-orange-600 transition duration-300">
                            <span>IG</span>
                        </a>
                        <a href="#" class="w-10 h-10 bg-gray-100 rounded-full flex items-center justify-center text-gray-600 hover:bg-orange-100 hover:text-orange-600 transition duration-300">
                            <span>TW</span>
                        </a>
                        <a href="#" class="w-10 h-10 bg-gray-100 rounded-full flex items-center justify-center text-gray-600 hover:bg-orange-100 hover:text-orange-600 transition duration-300">
                            <span>YT</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Map Section -->
        <div class="bg-white rounded-xl shadow-lg p-6 mb-10">
            <h2 class="text-2xl font-bold mb-4">Find Us</h2>
            <div class="h-96 bg-gray-200 rounded-lg flex items-center justify-center">
                <span class="text-gray-500">Map Coming Soon</span>
            </div>
        </div>
    </div>
</div>
@endsection
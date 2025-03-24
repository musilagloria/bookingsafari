@extends('layouts.app')

@section('title', 'About Us - Kenya Safari')

@section('content')
<div class="py-8 bg-gray-50">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <!-- Hero Banner -->
        <div class="relative rounded-xl overflow-hidden mb-10 shadow-xl">
            <div class="h-64 md:h-80 bg-cover bg-center" style="background-image: url('https://images.unsplash.com/photo-1516426122078-c23e76319801?ixlib=rb-4.0.3&auto=format&fit=crop&w=1200&q=80')">
                <div class="absolute inset-0 bg-black/40"></div>
                <div class="relative h-full flex items-center justify-center z-10">
                    <div class="text-center text-white px-4">
                        <h1 class="text-4xl md:text-5xl font-bold mb-4">About Kenya Safari</h1>
                        <p class="text-lg md:text-xl max-w-3xl mx-auto">Discover our story and passion for showcasing Kenya's natural beauty</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- About Content -->
        <div class="bg-white rounded-xl shadow-lg p-8 mb-10">
            <div class="max-w-4xl mx-auto">
                <h2 class="text-3xl font-bold mb-6 text-gray-800">Our Story</h2>
                <p class="text-gray-600 mb-6 text-lg">
                    Founded in 2010, Kenya Safari was born from a deep passion for wildlife conservation and a desire to share the breathtaking beauty of Kenya with the world. What started as a small family-operated tour company has grown into one of Kenya's premier safari operators.
                </p>
                <p class="text-gray-600 mb-6 text-lg">
                    Our team consists of experienced guides, conservation experts, and hospitality professionals who are dedicated to providing unforgettable safari experiences while promoting sustainable tourism practices that protect Kenya's precious ecosystems for future generations.
                </p>
                
                <div class="my-10 grid grid-cols-1 md:grid-cols-2 gap-8">
                    <div>
                        <h3 class="text-xl font-bold mb-4 text-gray-800">Our Mission</h3>
                        <p class="text-gray-600">
                            To provide exceptional safari experiences that connect people with Kenya's wildlife and landscapes while supporting conservation efforts and local communities.
                        </p>
                    </div>
                    <div>
                        <h3 class="text-xl font-bold mb-4 text-gray-800">Our Vision</h3>
                        <p class="text-gray-600">
                            To be the leading sustainable safari operator in East Africa, known for authentic experiences, conservation leadership, and positive community impact.
                        </p>
                    </div>
                </div>
                
                <h2 class="text-3xl font-bold mb-6 text-gray-800">Why Choose Us</h2>
                <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-10">
                    <div class="bg-orange-50 p-6 rounded-lg">
                        <div class="w-12 h-12 bg-orange-100 rounded-full flex items-center justify-center mb-4">
                            <span class="text-orange-600 text-xl">🌍</span>
                        </div>
                        <h3 class="font-bold text-lg mb-2">Local Expertise</h3>
                        <p class="text-gray-600">Our guides are born and raised in Kenya with intimate knowledge of wildlife and terrain.</p>
                    </div>
                    <div class="bg-orange-50 p-6 rounded-lg">
                        <div class="w-12 h-12 bg-orange-100 rounded-full flex items-center justify-center mb-4">
                            <span class="text-orange-600 text-xl">🌿</span>
                        </div>
                        <h3 class="font-bold text-lg mb-2">Sustainable Tourism</h3>
                        <p class="text-gray-600">We're committed to eco-friendly practices and supporting conservation efforts.</p>
                    </div>
                    <div class="bg-orange-50 p-6 rounded-lg">
                        <div class="w-12 h-12 bg-orange-100 rounded-full flex items-center justify-center mb-4">
                            <span class="text-orange-600 text-xl">⭐</span>
                        </div>
                        <h3 class="font-bold text-lg mb-2">Personalized Service</h3>
                        <p class="text-gray-600">Customized safari experiences tailored to your interests and preferences.</p>
                    </div>
                </div>
                
                <h2 class="text-3xl font-bold mb-6 text-gray-800">Our Team</h2>
                <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mb-10">
                    <div class="text-center">
                        <div class="w-32 h-32 bg-gray-300 rounded-full mx-auto mb-4"></div>
                        <h3 class="font-bold text-lg">John Kimani</h3>
                        <p class="text-gray-600">Founder & CEO</p>
                    </div>
                    <div class="text-center">
                        <div class="w-32 h-32 bg-gray-300 rounded-full mx-auto mb-4"></div>
                        <h3 class="font-bold text-lg">Sarah Omondi</h3>
                        <p class="text-gray-600">Head Safari Guide</p>
                    </div>
                    <div class="text-center">
                        <div class="w-32 h-32 bg-gray-300 rounded-full mx-auto mb-4"></div>
                        <h3 class="font-bold text-lg">David Mwangi</h3>
                        <p class="text-gray-600">Conservation Director</p>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Call to Action -->
        <div class="bg-gradient-to-r from-orange-500 to-orange-600 rounded-xl shadow-lg p-8 text-white mb-8">
            <div class="md:flex md:items-center md:justify-between">
                <div class="mb-6 md:mb-0 md:mr-8">
                    <h2 class="text-2xl font-bold mb-2">Ready to experience Kenya with us?</h2>
                    <p class="opacity-90">Let our expert team help you plan your dream safari adventure.</p>
                </div>
                <div>
                    <a href="{{ route('contact') }}" class="inline-block bg-white text-orange-600 font-bold py-3 px-8 rounded-lg transition duration-300 shadow-lg hover:bg-orange-50">
                        Contact Us
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
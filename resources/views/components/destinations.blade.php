<section id="destinations" class="section" style="background-color: #f8f8f8;">
    <div class="container">
        <h2 class="section-title">Popular Destinations</h2>
        
        <div class="grid grid-3">
            <!-- Destination 1 -->
            <div class="destination-card safari-card">
                <div class="destination-img">
                    <img src="https://images.unsplash.com/photo-1547970810-dc1eac37d174?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1000&q=80" alt="Masai Mara">
                </div>
                <div class="destination-content">
                    <h3 style="margin-bottom: 0.5rem;">Masai Mara</h3>
                    <p style="color: #666; margin-bottom: 1rem;">Home to the Great Migration and incredible wildlife viewing. The Masai Mara is Kenya's most famous wildlife reserve.</p>
                    @auth
                        <a href="{{ route('dashboard') }}" class="btn-outline">View Details</a>
                    @else
                        <a href="{{ route('login') }}" class="btn-outline">Login to Explore</a>
                    @endauth
                </div>
            </div>
            
            <!-- Destination 2 -->
            <div class="destination-card safari-card">
                <div class="destination-img">
                    <img src="https://images.unsplash.com/photo-1535267127361-a648a41f5a55?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1000&q=80" alt="Amboseli">
                </div>
                <div class="destination-content">
                    <h3 style="margin-bottom: 0.5rem;">Amboseli National Park</h3>
                    <p style="color: #666; margin-bottom: 1rem;">Famous for large elephant herds and views of Mount Kilimanjaro. Perfect for photography enthusiasts.</p>
                    @auth
                        <a href="{{ route('dashboard') }}" class="btn-outline">View Details</a>
                    @else
                        <a href="{{ route('login') }}" class="btn-outline">Login to Explore</a>
                    @endauth
                </div>
            </div>
            
            <!-- Destination 3 -->
            <div class="destination-card safari-card">
                <div class="destination-img">
                    <img src="https://images.unsplash.com/photo-1516426122078-c23e76319801?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1000&q=80" alt="Tsavo">
                </div>
                <div class="destination-content">
                    <h3 style="margin-bottom: 0.5rem;">Tsavo National Park</h3>
                    <p style="color: #666; margin-bottom: 1rem;">Kenya's largest park with diverse landscapes and wildlife. Split into Tsavo East and Tsavo West.</p>
                    @auth
                        <a href="{{ route('dashboard') }}" class="btn-outline">View Details</a>
                    @else
                        <a href="{{ route('login') }}" class="btn-outline">Login to Explore</a>
                    @endauth
                </div>
            </div>
        </div>
        
        <div class="cta-container" style="text-align: center; margin-top: 3rem;">
            @auth
                <a href="{{ route('dashboard') }}" class="btn-primary">View All Destinations</a>
            @else
                <div>
                    <p style="margin-bottom: 1rem; font-size: 1.1rem;">Create an account to explore all destinations and plan your safari</p>
                    <a href="{{ route('register') }}" class="btn-primary">Sign Up Now</a>
                </div>
            @endauth
        </div>
    </div>
</section>

<style>
    .section {
        padding: 5rem 2rem;
    }
    .section-title {
        text-align: center;
        font-size: 2rem;
        margin-bottom: 3rem;
        color: #333;
    }
    .container {
        max-width: 1200px;
        margin: 0 auto;
    }
    .grid {
        display: grid;
        gap: 2rem;
    }
    .grid-3 {
        grid-template-columns: repeat(1, 1fr);
    }
    .safari-card {
        transition: transform 0.3s ease;
    }
    .safari-card:hover {
        transform: translateY(-5px);
    }
    .destination-card {
        border-radius: 8px;
        overflow: hidden;
        box-shadow: 0 4px 6px rgba(0,0,0,0.1);
        background-color: white;
    }
    .destination-img {
        height: 250px;
        overflow: hidden;
    }
    .destination-img img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        transition: transform 0.3s ease;
    }
    .destination-card:hover .destination-img img {
        transform: scale(1.05);
    }
    .destination-content {
        padding: 1.5rem;
    }
    .btn-outline {
        border: 2px solid #E67E22;
        color: #E67E22;
        padding: 10px 24px;
        border-radius: 4px;
        font-weight: 600;
        transition: all 0.3s ease;
        text-decoration: none;
        display: inline-block;
    }
    .btn-outline:hover {
        background-color: #E67E22;
        color: white;
    }
    .btn-primary {
        background-color: #E67E22;
        color: white;
        padding: 12px 24px;
        border-radius: 4px;
        font-weight: 600;
        transition: all 0.3s ease;
        text-decoration: none;
        display: inline-block;
    }
    .btn-primary:hover {
        background-color: #D35400;
    }
    
    @media (min-width: 768px) {
        .grid-3 {
            grid-template-columns: repeat(3, 1fr);
        }
    }
</style>
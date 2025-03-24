<section class="hero">
    <div class="hero-content">
        <h1>Experience the Magic of Kenya Safari</h1>
        <p>Discover the breathtaking wildlife and landscapes of Kenya</p>
        <div class="hero-buttons">
            <a href="#destinations" class="btn-primary">Explore Destinations</a>
            <a href="#contact" class="btn-outline">Contact Us</a>
        </div>
    </div>
</section>

<style>
    .hero {
        background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('https://images.unsplash.com/photo-1523805009345-7448845a9e53?ixlib=rb-4.0.3&auto=format&fit=crop&w=2072&q=80');
        background-size: cover;
        background-position: center;
        height: 100vh;
        display: flex;
        align-items: center;
        justify-content: center;
        text-align: center;
        color: white;
    }
    
    .hero-content {
        max-width: 800px;
        padding: 0 20px;
    }
    
    .hero h1 {
        font-size: 3.5rem;
        font-weight: 700;
        margin-bottom: 1rem;
    }
    
    .hero p {
        font-size: 1.2rem;
        margin-bottom: 2rem;
    }
    
    .hero-buttons {
        display: flex;
        gap: 1rem;
        justify-content: center;
    }
    
    .btn-primary {
        background-color: #E67E22;
        color: white;
        padding: 12px 24px;
        border-radius: 4px;
        font-weight: 600;
        transition: all 0.3s ease;
    }
    
    .btn-primary:hover {
        background-color: #D35400;
    }
    
    .btn-outline {
        border: 2px solid white;
        color: white;
        padding: 12px 24px;
        border-radius: 4px;
        font-weight: 600;
        transition: all 0.3s ease;
    }
    
    .btn-outline:hover {
        background-color: white;
        color: #333;
    }
    
    @media (max-width: 768px) {
        .hero h1 {
            font-size: 2.5rem;
        }
        
        .hero-buttons {
            flex-direction: column;
        }
    }
</style>
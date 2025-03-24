<section id="features" class="features">
    <div class="container">
        <h2 class="section-title">Why Choose Us</h2>
        
        <div class="features-grid">
            <div class="feature-card">
                <div class="feature-icon">
                    <i class="fas fa-map-marked-alt"></i>
                </div>
                <h3>Expert Local Guides</h3>
                <p>Our experienced guides know the best spots for wildlife viewing.</p>
            </div>
            
            <div class="feature-card">
                <div class="feature-icon">
                    <i class="fas fa-camera"></i>
                </div>
                <h3>Perfect Photo Opportunities</h3>
                <p>Capture stunning wildlife moments with guidance from our experts.</p>
            </div>
            
            <div class="feature-card">
                <div class="feature-icon">
                    <i class="fas fa-bed"></i>
                </div>
                <h3>Luxury Accommodations</h3>
                <p>Stay in comfortable, authentic lodges and camps.</p>
            </div>
        </div>
    </div>
</section>

<style>
    .features {
        padding: 5rem 2rem;
        background-color: white;
    }
    
    .container {
        max-width: 1200px;
        margin: 0 auto;
    }
    
    .section-title {
        text-align: center;
        font-size: 2rem;
        margin-bottom: 3rem;
        color: #333;
    }
    
    .features-grid {
        display: grid;
        grid-template-columns: repeat(1, 1fr);
        gap: 2rem;
    }
    
    .feature-card {
        text-align: center;
        padding: 2rem;
        border-radius: 8px;
        box-shadow: 0 4px 6px rgba(0,0,0,0.1);
        transition: transform 0.3s ease;
    }
    
    .feature-card:hover {
        transform: translateY(-5px);
    }
    
    .feature-icon {
        font-size: 2.5rem;
        color: #E67E22;
        margin-bottom: 1rem;
    }
    
    .feature-card h3 {
        margin-bottom: 1rem;
        font-size: 1.25rem;
    }
    
    .feature-card p {
        color: #666;
    }
    
    @media (min-width: 768px) {
        .features-grid {
            grid-template-columns: repeat(3, 1fr);
        }
    }
</style>
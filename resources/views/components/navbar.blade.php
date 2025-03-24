<nav class="navbar">
    <div class="navbar-container">
        <a href="/" class="navbar-logo">Kenya Safari</a>
        <div class="navbar-links">
            <a href="#destinations">Destinations</a>
            <a href="#features">Experiences</a>
            <a href="#about">About</a>
            <a href="#contact">Contact</a>
        </div>
        <div class="auth-links">
            <a href="{{ url('/dashboard') }}" class="btn-primary">Dashboard</a>
        </div>
    </div>
</nav>

<style>
    .navbar {
        background-color: white;
        box-shadow: 0 2px 4px rgba(0,0,0,0.1);
        position: sticky;
        top: 0;
        z-index: 100;
    }
    .navbar-container {
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding: 1rem 2rem;
        max-width: 1200px;
        margin: 0 auto;
    }
    .navbar-logo {
        font-size: 1.5rem;
        font-weight: bold;
        color: #E67E22;
        text-decoration: none;
    }
    .navbar-links {
        display: flex;
        gap: 2rem;
    }
    .navbar-links a {
        color: #555;
        text-decoration: none;
        font-weight: 500;
        transition: color 0.3s ease;
    }
    .navbar-links a:hover {
        color: #E67E22;
    }
    .auth-links {
        display: flex;
        gap: 1rem;
        align-items: center;
    }
    .btn-outline {
        border: 2px solid #E67E22;
        color: #E67E22;
        padding: 8px 16px;
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
        padding: 10px 18px;
        border-radius: 4px;
        font-weight: 600;
        transition: all 0.3s ease;
        text-decoration: none;
        display: inline-block;
    }
    .btn-primary:hover {
        background-color: #D35400;
    }
    
    @media (max-width: 768px) {
        .navbar-links {
            display: none;
        }
        .navbar-container {
            padding: 1rem;
        }
    }
</style>
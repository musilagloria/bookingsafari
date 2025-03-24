@extends('layouts.app')

@section('title', 'Login - Kenya Safari')

@section('content')
<div class="auth-container">
    <div class="auth-card">
        <h2>Welcome Back</h2>
        <p class="auth-subtitle">Log in to your Kenya Safari account</p>
        
        <form method="POST" action="{{ route('login') }}" class="auth-form">
            @csrf
            
            <div class="form-group">
                <label for="email">Email</label>
                <input id="email" type="email" name="email" value="{{ old('email') }}" required autofocus />
                @error('email')
                    <span class="error-message">{{ $message }}</span>
                @enderror
            </div>
            
            <div class="form-group">
                <label for="password">Password</label>
                <input id="password" type="password" name="password" required />
                @error('password')
                    <span class="error-message">{{ $message }}</span>
                @enderror
            </div>
            
            <div class="form-group remember-me">
                <label>
                    <input type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                    <span>Remember me</span>
                </label>
            </div>
            
            <button type="submit" class="btn-primary full-width">Log in</button>
            
            <div class="auth-links-container">
                @if (Route::has('password.request'))
                    <a href="{{ route('password.request') }}" class="auth-link">Forgot your password?</a>
                @endif
                <p>Don't have an account? <a href="{{ url('/register') }}" class="auth-link">Sign up</a></p>
            </div>
        </form>
    </div>
</div>

<style>
    .auth-container {
        display: flex;
        justify-content: center;
        align-items: center;
        min-height: calc(100vh - 200px);
        padding: 2rem;
    }
    
    .auth-card {
        background-color: white;
        border-radius: 8px;
        box-shadow: 0 4px 6px rgba(0,0,0,0.1);
        padding: 2rem;
        width: 100%;
        max-width: 450px;
    }
    
    .auth-card h2 {
        text-align: center;
        margin-bottom: 0.5rem;
        color: #333;
    }
    
    .auth-subtitle {
        text-align: center;
        color: #666;
        margin-bottom: 2rem;
    }
    
    .auth-form {
        display: flex;
        flex-direction: column;
        gap: 1.5rem;
    }
    
    .form-group {
        display: flex;
        flex-direction: column;
        gap: 0.5rem;
    }
    
    .form-group label {
        font-weight: 500;
        color: #555;
    }
    
    .form-group input[type="email"],
    .form-group input[type="password"] {
        padding: 0.75rem;
        border: 1px solid #ddd;
        border-radius: 4px;
        font-size: 1rem;
    }
    
    .remember-me {
        flex-direction: row;
        align-items: center;
    }
    
    .remember-me label {
        display: flex;
        align-items: center;
        gap: 0.5rem;
        cursor: pointer;
    }
    
    .error-message {
        color: #e74c3c;
        font-size: 0.875rem;
    }
    
    .full-width {
        width: 100%;
    }
    
    .auth-links-container {
        text-align: center;
        margin-top: 1.5rem;
    }
    
    .auth-link {
        color: #E67E22;
        text-decoration: none;
    }
    
    .auth-link:hover {
        text-decoration: underline;
    }
</style>
@endsection

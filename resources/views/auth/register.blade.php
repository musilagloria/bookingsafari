@extends('layouts.app')

@section('title', 'Sign Up - Kenya Safari')

@section('content')
<div class="auth-container">
    <div class="auth-card">
        <h2>Create an Account</h2>
        <p class="auth-subtitle">Join Kenya Safari to plan your adventure</p>
        
        <form method="POST" action="{{ route('register') }}" class="auth-form">
            {{ csrf_field() }}
            
            <div class="form-group">
                <label for="name">Name</label>
                <input id="name" type="text" name="name" value="{{ old('name') }}" required autofocus />
                @error('name')
                    <span class="error-message">{{ $message }}</span>
                @enderror
            </div>
            
            <div class="form-group">
                <label for="email">Email</label>
                <input id="email" type="email" name="email" value="{{ old('email') }}" required />
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
            
            <div class="form-group">
                <label for="password_confirmation">Confirm Password</label>
                <input id="password_confirmation" type="password" name="password_confirmation" required />
            </div>
            
            <button type="submit" class="btn-primary full-width">Sign Up</button>
            
            <div class="auth-links-container">
                <p>Already have an account? <a href="{{ url('/login') }}" class="auth-link">Log in</a></p>
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
        background-color: #f8f9fa;
    }
    
    .auth-card {
        background-color: white;
        border-radius: 12px;
        box-shadow: 0 8px 20px rgba(0,0,0,0.1);
        padding: 2.5rem;
        width: 100%;
        max-width: 500px;
        transition: transform 0.3s ease;
    }
    
    .auth-card:hover {
        transform: translateY(-5px);
    }
    
    .auth-card h2 {
        text-align: center;
        margin-bottom: 0.5rem;
        color: #333;
        font-size: 2rem;
        font-weight: 600;
    }
    
    .auth-subtitle {
        text-align: center;
        color: #666;
        margin-bottom: 2.5rem;
        font-size: 1.1rem;
    }
    
    .auth-form {
        display: flex;
        flex-direction: column;
        gap: 1.8rem;
    }
    
    .form-group {
        display: flex;
        flex-direction: column;
        gap: 0.5rem;
    }
    
    .form-group label {
        font-weight: 500;
        color: #444;
        font-size: 0.95rem;
    }
    
    .form-group input {
        padding: 0.9rem;
        border: 1px solid #ddd;
        border-radius: 8px;
        font-size: 1rem;
        transition: border-color 0.3s ease, box-shadow 0.3s ease;
    }
    
    .form-group input:focus {
        outline: none;
        border-color: #E67E22;
        box-shadow: 0 0 0 3px rgba(230, 126, 34, 0.2);
    }
    
    .error-message {
        color: #e74c3c;
        font-size: 0.875rem;
        margin-top: 0.3rem;
    }
    
    .btn-primary {
        background-color: #E67E22;
        color: white;
        padding: 1rem;
        border: none;
        border-radius: 8px;
        font-weight: 600;
        font-size: 1.1rem;
        cursor: pointer;
        transition: all 0.3s ease;
        margin-top: 1rem;
    }
    
    .btn-primary:hover {
        background-color: #D35400;
        transform: translateY(-2px);
        box-shadow: 0 4px 8px rgba(0,0,0,0.1);
    }
    
    .btn-primary:active {
        transform: translateY(0);
    }
    
    .full-width {
        width: 100%;
    }
    
    .auth-links-container {
        text-align: center;
        margin-top: 2rem;
        font-size: 0.95rem;
    }
    
    .auth-link {
        color: #E67E22;
        text-decoration: none;
        font-weight: 500;
        transition: color 0.3s ease;
    }
    
    .auth-link:hover {
        color: #D35400;
        text-decoration: underline;
    }
    
    @media (max-width: 576px) {
        .auth-card {
            padding: 1.5rem;
        }
        
        .auth-card h2 {
            font-size: 1.75rem;
        }
        
        .auth-subtitle {
            font-size: 1rem;
            margin-bottom: 2rem;
        }
        
        .btn-primary {
            padding: 0.8rem;
        }
    }
</style>
@endsection


@section('scripts')
<script>
    $(document).ready(function() {
        $(".auth-form").validate();
    });
</script>
@endsection

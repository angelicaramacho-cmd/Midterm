@extends('layouts.app')

@section('title', 'Home - Student Registration System')

@section('content')
<div style="text-align: center; padding: 1rem 0;">
    <h1 style="color: #4a3e3d; font-size: 2.2rem; font-weight: 600; margin-bottom: 0.8rem;">
        Welcome to the Student Registration Portal
    </h1>
    
    <p style="color: #7a5c58; font-size: 1.05rem; line-height: 1.6; max-width: 520px; margin: 0 auto 2rem auto;">
    This portal allows new and returning students to submit their registration details, view their profile records, and complete their enrollment requests efficiently.
    </p>

    <!-- Naka-center na ang button container -->
    <div style="text-align: center; margin-top: 1.5rem;">
        <a href="{{ url('/register') }}" style="display: inline-block; background-color: #c86d51; color: #ffffff; text-decoration: none; padding: 0.8rem 2rem; border-radius: 8px; font-weight: 500; box-shadow: 0 4px 12px rgba(200, 109, 81, 0.25); transition: background 0.3s ease;">
           Register Now
           
        </a>
    </div>
</div>
@endsection
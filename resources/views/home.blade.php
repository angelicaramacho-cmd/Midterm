@extends('layouts.app')

@section('title', 'Home - Student Enrollment')

@section('content')
    <h1>Student Enrollment Portal</h1>
    <p>Welcome to the official online registration portal. Please proceed to fill out your details to receive your generated student credentials.</p>
    
    <div style="margin-top: 2rem;">
        <a href="{{ url('/register') }}" class="btn">
            Start Registration
        </a>
    </div>
@endsection
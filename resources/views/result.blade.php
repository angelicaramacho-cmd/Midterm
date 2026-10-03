@extends('layouts.app')

@section('title', 'Student Pass')

@section('content')
    <h1>Generated Student Pass</h1>
    <div style="background-color: var(--card-cream); padding: 15px; border-radius: 6px; margin-top: 15px;">
        <p><strong>Name:</strong> {{ $name }}</p>
        <p><strong>Age:</strong> {{ $age }}</p>
        <p><strong>Course:</strong> {{ $course }}</p>
        <p><strong>Email:</strong> {{ $email }}</p>
        <p><strong>Motto:</strong> "{{ $motto }}"</p>
    </div>
    <br>
    <a href="{{ url('/register') }}" class="btn">Register Another Student</a>
@endsection
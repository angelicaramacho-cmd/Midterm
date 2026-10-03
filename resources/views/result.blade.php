@extends('layouts.app')

@section('title', 'Student Profile')

@section('content')
<div class="profile-card">
    <h3>Student ID Card</h3>
    <p><strong>Name:</strong> {{ $name ?? 'Angelica Ramacho' }}</p>
    <p><strong>Age:</strong> {{ $age ?? '20' }} years old</p>
    <p><strong>Course:</strong> {{ $course ?? 'BSIT/MWD' }}</p>
    <p><strong>Email:</strong> {{ $email ?? 'angelicaramacho9@gmail.com' }}</p>
    <p><strong>Motto:</strong> <em>"{{ $motto ?? 'if it doesn\'t challenge you, it won\'t change you' }}"</em></p>
</div>


<div style="margin-top: 2rem; text-align: center;">
    <a href="{{ url('/register') }}" style="display: inline-block; background-color: #c86d51; color: #ffffff; text-decoration: none; padding: 0.8rem 1.8rem; border-radius: 8px; font-weight: 500; box-shadow: 0 4px 12px rgba(200, 109, 81, 0.25); transition: background 0.3s ease;">
        &larr; Back to Registration Form
    </a>
</div>
@endsection
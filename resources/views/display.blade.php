@extends('layouts.app')
@section('title', 'Student Profile Result')

@section('content')
    <div class="profile-card">
        <h3>Student ID Card</h3>
        <p><strong>Name:</strong> {{ $data['fullname'] }}</p>
        <p><strong>Age:</strong> {{ $data['age'] }} years old</p>
        <p><strong>Course:</strong> {{ $data['course'] }}</p>
        <p><strong>Email:</strong> {{ $data['email'] }}</p>
        <p><strong>Motto:</strong> <em>"{{ $data['motto'] }}"</em></p>
    </div>
    <br>
    <a href="{{ url('/register') }}">&larr; Back to Registration Form</a>
@endsection
@extends('layouts.app')

@section('title', 'Registration Form')

@section('content')
    <h1>Student Application Form</h1>
    <form action="{{ url('/display') }}" method="POST">
        @csrf
        <p><label>Full Name:</label><br><input type="text" name="name" required style="width:100%; padding:8px;"></p>
        <p><label>Age:</label><br><input type="number" name="age" required style="width:100%; padding:8px;"></p>
        <p><label>Course / Program:</label><br><input type="text" name="course" required style="width:100%; padding:8px;"></p>
        <p><label>Email Address:</label><br><input type="email" name="email" required style="width:100%; padding:8px;"></p>
        <p><label>Personal Motto:</label><br><input type="text" name="motto" required style="width:100%; padding:8px;"></p>
        <button type="submit">Submit Registration</button>
    </form>
@endsection
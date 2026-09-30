@extends('layouts.app')
@section('title', 'Student Registration Form')

@section('content')
    <h2>Student Registration Form</h2>
    <form action="{{ url('/display') }}" method="POST">
        @csrf
        <p><label>Full Name:</label><br><input type="text" name="fullname" style="width: 280px;" required></p>
        <p><label>Age:</label><br><input type="number" name="age" style="width: 280px;" required></p>
        <p><label>Course / Program:</label><br><input type="text" name="course" style="width: 280px;" required></p>
        <p><label>Email Address:</label><br><input type="email" name="email" style="width: 280px;" required></p>
        <p><label>Favorite Motto / Bio:</label><br><textarea name="motto" rows="4" style="width: 280px;"></textarea></p>
        <button type="submit">Generate Profile</button>
    </form>
@endsection
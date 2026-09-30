@extends('layouts.app')
@section('title', 'Home Page')

@section('content')
    <h1>Welcome to Student Information System</h1>
    <p>This page was successfully migrated from native PHP to Laravel Blade templates!</p>
    <p><a href="{{ url('/register') }}">Go to Student Registration Form &rarr;</a></p>
@endsection
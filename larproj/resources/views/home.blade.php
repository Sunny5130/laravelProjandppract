{{-- @extends('layouts.app')

@section('title', 'Home Page')

@section('content')
    <h2>Welcome to the Home Page</h2>
    <p>This is the content of the home page.</p>
@endsection --}}



@extends('layouts.app')

@section('title', 'Home')

@section('content')
    <h2>Welcome to the Home Page</h2>
    <p>This is a sample home page using Blade template inheritance.</p>

    @push('styles')
    <style>
        body { background-color: #6b2a2a; }
    </style>
    @endpush

    @push('scripts')
    <script>
        console.log('Home page loaded');
    </script>
    @endpush
@endsection


@extends('layouts.app')

@section('title', 'Profile')

@section('content')
    <h2>Developer Profile</h2>

    @if ($user)
        <article class="card">
            <p><strong>Username:</strong> jvmbeasca</p>
            <p><strong>Full name:</strong> John Vincent Beasca</p>
            <p><strong>Email:</strong> jmbeasca@fit.edu.ph</p>
        </article>
    @else
        <p>No user profile found.</p>
    @endif
@endsection
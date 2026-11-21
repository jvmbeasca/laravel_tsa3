@extends('layouts.app')

@section('title', 'Welcome')

@section('content')
    <h2>Today’s Tasks</h2>
    <p>{{ today()->format('F j, Y') }}</p>

    @forelse ($tasks as $task)
        <article class="card">
            <h3>{{ $task->title }}</h3>
            <p class="status">Status: {{ ucfirst($task->status) }}</p>
        </article>
    @empty
        <p>No tasks scheduled for today.</p>
    @endforelse
@endsection
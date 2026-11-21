@extends('layouts.app')

@section('title', 'Task List')

@section('content')
    <h2>All Tasks</h2>

    @forelse ($tasks as $task)
        <article class="card">
            <h3>{{ $task->title }}</h3>
            <p class="date">Date: {{ $task->task_date->format('F j, Y') }}</p>
            <p class="status">Status: {{ ucfirst($task->status) }}</p>
        </article>
    @empty
        <p>No tasks found.</p>
    @endforelse
@endsection
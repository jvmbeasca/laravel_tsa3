@extends('layouts.app')

@section('title', 'Task List')

@section('content')
    <h2>All Tasks</h2>

    @forelse ($tasks as $task)
        <article class="card">
            <h3>{{ $task->title }}</h3>
            <p>Date: {{ $task->task_date->format('F j, Y') }}</p>
            <p>Status: {{ ucfirst($task->status) }}</p>
        </article>
    @empty
        <p>No tasks found.</p>
    @endforelse
@endsection
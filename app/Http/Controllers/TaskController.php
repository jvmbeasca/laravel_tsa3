<?php

namespace App\Http\Controllers;

use App\Models\Task;
use App\Models\User;

class TaskController extends Controller
{
    public function welcome()
    {
        $tasks = Task::whereDate('task_date', today())
            ->orderBy('id')
            ->get();

        return view('welcome', compact('tasks'));
    }

    public function index()
{
    $tasks = Task::orderBy('task_date')
        ->orderBy('id')
        ->get();

    return view('task-list', compact('tasks'));
}

    public function profile()
    {
        $user = User::first();

        return view('profile', compact('user'));
    }

    public function about()
    {
        return view('about');
    }
}
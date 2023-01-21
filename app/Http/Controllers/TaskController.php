<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateTaskRequest;
use App\Models\Job;
use App\Models\Task;

class TaskController extends Controller
{
    public function index()
    {
        $tasks = Task::all();
        return view('task.index', ['tasks' => $tasks]);
    }

    public function taskWhere()
    {
        $tasks = Task::whereHas('job', function ($q) {
            $q->whereHas('project', function ($q) {
                $q->where('projects.price', '<', 100);
            });
        })->get();
        return view('task.index', ['tasks' => $tasks]);
    }

    public function create()
    {
        return view('task.create', ['jobs' => Job::all()]);
    }

    public function store(CreateTaskRequest $request)
    {
        Task::create([
            'name' => $request->name,
            'job_id' => $request->job_id
        ]);
        return redirect()->route('task.index');
    }
}

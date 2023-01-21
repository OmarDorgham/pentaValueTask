<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateJobRequest;
use App\Models\Job;
use App\Models\Project;

class JobController extends Controller
{
    public function index()
    {
        $jobs = Job::all();
        return view('job.index', ['jobs' => $jobs]);
    }

    public function create()
    {
        return view('job.create', ['projects' => Project::all()]);
    }

    public function store(CreateJobRequest $request)
    {
        Job::create([
            'name' => $request->name,
            'amount' => $request->amount,
            'project_id' => $request->project_id
        ]);
        return redirect()->route('job.index');
    }
}

<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateProjectRequest;
use App\Models\Account;
use App\Models\Project;

class ProjectController extends Controller
{
    public function index()
    {
        $projects = Project::all();
        return view('project.index', ['projects' => $projects]);
    }

    public function create()
    {
        return view('project.create', ['accounts' => Account::all()]);
    }

    public function store(CreateProjectRequest $request)
    {
        Project::create([
            'name' => $request->name,
            'price' => $request->price,
            'account_id' => $request->account_id
        ]);
        return redirect()->route('project.index');
    }
}

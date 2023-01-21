@extends('master')
@section('title')
    <title>Tasks Page</title>
@endsection

<form>

</form>

@section('content')
    <main role="main" class="container mt-5">
        <a class="btn btn-primary" href="{{route('task.create')}}">Create Task</a>
        <a class="btn btn-primary" href="{{route('task.where')}}">select tasks that belongs to project with price < 100</a>
        <table class="table">
            <thead>
            <tr>
                <th>#</th>
                <th>Name</th>
                <th>Job</th>
                <th>Project</th>
                <th>Account</th>
            </tr>
            </thead>
            <tbody>
            @foreach($tasks as $task)
                <tr>
                    <td>{{$task->id}}</td>
                    <td>{{$task->name}}</td>
                    <td>{{$task->job->name}}</td>
                    <td>{{$task->job->project->name}}</td>
                    <td>{{$task->job->project->account->name}}</td>
                </tr>
            @endforeach
            </tbody>
        </table>

    </main>

@endsection


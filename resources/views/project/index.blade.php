@extends('master')
@section('title')
    <title>Projects Page</title>
@endsection

<form>

</form>

@section('content')
    <main role="main" class="container mt-5">
        <a class="btn btn-primary" href="{{route('project.create')}}">Create Project</a>
        <table class="table">
            <thead>
            <tr>
                <th>#</th>
                <th>Name</th>
                <th>Price</th>
                <th>Account</th>
            </tr>
            </thead>
            <tbody>
            @foreach($projects as $project)
                <tr>
                    <td>{{$project->id}}</td>
                    <td>{{$project->name}}</td>
                    <td>{{$project->price}}</td>
                    <td>{{$project->account->name}}</td>
                </tr>
            @endforeach
            </tbody>
        </table>

    </main>

@endsection


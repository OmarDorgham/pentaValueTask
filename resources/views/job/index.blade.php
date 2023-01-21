@extends('master')
@section('title')
    <title>Jobs Page</title>
@endsection

<form>

</form>

@section('content')
    <main role="main" class="container mt-5">
        <a class="btn btn-primary" href="{{route('job.create')}}">Create Job</a>
        <table class="table">
            <thead>
            <tr>
                <th>#</th>
                <th>Name</th>
                <th>Amount</th>
                <th>Project</th>
                <th>Account</th>
            </tr>
            </thead>
            <tbody>
            @foreach($jobs as $job)
                <tr>
                    <td>{{$job->id}}</td>
                    <td>{{$job->name}}</td>
                    <td>{{$job->amount}}</td>
                    <td>{{$job->project->name}}</td>
                    <td>{{$job->project->account->name}}</td>
                </tr>
            @endforeach
            </tbody>
        </table>

    </main>

@endsection


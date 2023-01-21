@extends('master')
@section('title')
    <title>Accounts Page</title>
@endsection

<form>

</form>

@section('content')
    <main role="main" class="container mt-5">
        <a class="btn btn-primary" href="{{route('account.create')}}">Create Account</a>
        <table class="table">
            <thead>
            <tr>
                <th>#</th>
                <th>Name</th>
            </tr>
            </thead>
            <tbody>
            @foreach($accounts as $account)
                <tr>
                    <td>{{$account->id}}</td>
                    <td>{{$account->name}}</td>
                </tr>
            @endforeach
            </tbody>
        </table>

    </main>

@endsection


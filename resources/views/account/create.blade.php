@extends('master')
@section('title')
    <title>Create Account Page</title>
@endsection

<form>

</form>

@section('content')
    <main role="main" class="container mt-5">
        <form action="{{route('account.store')}}" method="POST">
            <div class="mb-3">
                <label for="name" class="form-label">Account Name</label>
                <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" id="name"
                       value="{{old('name')}}">
                @error('name')
                <p class="text-danger m-2">{{$message}}</p>
                @enderror
            </div>

            @csrf
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </main>

@endsection


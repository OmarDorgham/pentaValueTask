@extends('master')
@section('title')
    <title>Create Project Page</title>
@endsection

<form>

</form>

@section('content')
    <main role="main" class="container mt-5">
        <form action="{{route('project.store')}}" method="POST">
            <div class="mb-3">
                <label for="name" class="form-label">Project Name</label>
                <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" id="name"
                       value="{{old('name')}}">
                @error('name')
                <p class="text-danger m-2">{{$message}}</p>
                @enderror
            </div>
            <div class="mb-3">
                <label for="price" class="form-label">Project Price</label>
                <input type="number" class="form-control @error('price') is-invalid @enderror" name="price" id="price"
                       value="{{old('price')}}" step="0.1">
                @error('price')
                <p class="text-danger m-2">{{$message}}</p>
                @enderror
            </div>
            <div class="mb-3">
                <label for="account_id"> Account</label>
                <select class="form-select @error('account_id') is-invalid @enderror" id="account_id"
                        name="account_id">
                    <option value="">Select Account</option>

                    @foreach($accounts as $account)
                        <option value="{{$account->id}}"
                                @if(old('account_id')==$account->id) selected @endif>
                            {{$account->name}}
                        </option>
                    @endforeach
                </select>
                @error('account_id')
                <p class="text-danger m-2">{{$message}}</p>
                @enderror
            </div>

            @csrf
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </main>

@endsection


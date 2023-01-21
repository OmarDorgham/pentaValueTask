@extends('master')
@section('title')
    <title>Create Job Page</title>
@endsection

<form>

</form>

@section('content')
    <main role="main" class="container mt-5">
        <form action="{{route('job.store')}}" method="POST">
            <div class="mb-3">
                <label for="name" class="form-label">Job Name</label>
                <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" id="name"
                       value="{{old('name')}}">
                @error('name')
                <p class="text-danger m-2">{{$message}}</p>
                @enderror
            </div>
            <div class="mb-3">
                <label for="amount" class="form-label">Job Amount</label>
                <input type="number" class="form-control @error('amount') is-invalid @enderror" name="amount" id="amount"
                       value="{{old('amount')}}">
                @error('amount')
                <p class="text-danger m-2">{{$message}}</p>
                @enderror
            </div>
            <div class="mb-3">
                <label for="project_id"> Project</label>
                <select class="form-select @error('project_id') is-invalid @enderror" id="project_id"
                        name="project_id">
                    <option value="">Select Project</option>

                    @foreach($projects as $project)
                        <option value="{{$project->id}}"
                                @if(old('project_id')==$project->id) selected @endif>
                            {{$project->name}}
                        </option>
                    @endforeach
                </select>
                @error('project_id')
                <p class="text-danger m-2">{{$message}}</p>
                @enderror
            </div>

            @csrf
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </main>

@endsection


@extends('master')
@section('title')
    <title>Create Task Page</title>
@endsection

<form>

</form>

@section('content')
    <main role="main" class="container mt-5">
        <form action="{{route('task.store')}}" method="POST">
            <div class="mb-3">
                <label for="name" class="form-label">Task Name</label>
                <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" id="name"
                       value="{{old('name')}}">
                @error('name')
                <p class="text-danger m-2">{{$message}}</p>
                @enderror
            </div>

            <div class="mb-3">
                <label for="job_id"> Job</label>
                <select class="form-select @error('job_id') is-invalid @enderror" id="job_id"
                        name="job_id">
                    <option value="">Select Job</option>

                    @foreach($jobs as $job)
                        <option value="{{$job->id}}"
                                @if(old('job_id')==$job->id) selected @endif>
                            {{$job->name}}
                        </option>
                    @endforeach
                </select>
                @error('job_id')
                <p class="text-danger m-2">{{$message}}</p>
                @enderror
            </div>

            @csrf
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </main>

@endsection


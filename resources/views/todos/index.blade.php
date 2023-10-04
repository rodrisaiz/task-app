@extends('app')

@section('content')

    <div class="container w-25 border p-4 mt-4">
        <form action="{{ route('todos') }}" method="POST" >
            @csrf
            <div class="mb-3">
                <label for="title" class="form-label">Task title</label>
                <input type="text" name="title" class="form-control">
            </div>
            <button type="submit" class="btn btn-primary">Create a new task</button>
        </form>
    </div>
    
@endsection
@extends('layouts.app')



@section('content')

    <h1>Create Todo</h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <div class="card" style="width: 18rem;">
        <div class="card-body">
            <form action="{{ route('todo.store') }}" method="POST">
                @csrf

                <input class="form-control" type="text" name="title" placeholder="Todo title ..." value="{{ old('title') }}">

                <br>
                Completed <input type="checkbox" name="completed" class="form-check-input">
                <br>
                <br>

                <button type="submit" class="btn btn-primary">Add</button>
                {{-- <input type="submit" value="Add" class="btn btn-primary"> --}}

            </form>
        </div>
    </div>
@endsection

@extends('layouts.app')



@section('content')
    <h1>Todo</h1>


    @if (session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
    @endif



    <table class="table table-striped">
        <thead>
            <tr>
                <th>#</th>
                <th>Created</th>
                <th>Updated</th>
                <th>Title</th>
                <th>Completed ?</th>
                <th></th>
            </tr>
        </thead>
        <tbody>


            @forelse ($todos as $todo)
                <tr>
                    <td>{{ $todo->id }}</td>
                    <td>{{ $todo->created_at }}</td>
                    <td>{{ $todo->updated_at }}</td>
                    <td>{{ $todo->title }}</td>
                    <td>{{ $todo->completed ? 'done' : 'not done' }}</td>
                    <td>
                        <form action="{{ route('todo.destroy', $todo->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-link text-danger" type="submit">Delete</button>
                        </form>
                    </td>
                </tr>

            @empty
                <p>No todos !</p>
            @endforelse


        </tbody>
    </table>
@endsection

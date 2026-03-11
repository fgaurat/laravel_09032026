@extends('layouts.app')

@section('content')
    <h1>TodoList</h1>

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
                <th>Nb Todos</th>
                <th>Nb Completed Todos</th>
                <th></th>
            </tr>
        </thead>
        <tbody>


            @forelse ($todolists as $todoList)
                <tr>
                    <td>{{ $todoList->id }}</td>
                    <td>{{ $todoList->created_at }}</td>
                    <td>{{ $todoList->updated_at }}</td>
                    <td>{{ $todoList->title }}</td>
                    {{-- <td>{{ $todoList->todos->count() }}</td> --}}
                    <td>{{ $todoList->todos_count }}</td>
                    <td>{{ $todoList->completed_todos_count}}</td>
                    <td>

                    </td>
                </tr>

            @empty
                <p>No todos !</p>
            @endforelse


        </tbody>
    </table>
@endsection

@extends('layouts.app')


@section('title', 'Hello form')

@section('content')
    <h1>Hello form</h1>
    <form action="{{route('hello.upper')}}" method="POST">
        @csrf
        <input type="text" name="the_name" placeholder="the name ..."/>
        <br>
        <button type="submit" class="btn btn-primary">Envoyer</button>

    </form>

@endsection

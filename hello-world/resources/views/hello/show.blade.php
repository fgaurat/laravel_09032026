@extends('layouts.app')


@section('title', 'Hello show')

@section('content')
    <h1>Hello {{$firstName}} {{$name}}</h1>
@endsection

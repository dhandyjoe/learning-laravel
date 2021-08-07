@extends('layouts.main')

@section('container')

    @foreach ($posts as $p)
        <h1>{{ $p['title'] }}</h1>
        <h3>{{ $p['author'] }}</h3>
        <p>{{ $p['body'] }}</p>
    @endforeach


@endsection

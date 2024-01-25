@extends('layouts.app')


@section('title', 'Полеты')

@section('content')
    <h1>Список полетов</h1>
    <ul>
        @foreach($flights as $flight)
            <h3>{{ $flight->name }}</h3>
            <p> {{$flight->country}}</p>
        @endforeach
    </ul>
@endsection

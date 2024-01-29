@extends('layouts.app')
@section('header', 'Список:')

@section('content')
    <h1>Перечень статей:</h1>
    @foreach ($articles as $article)
        <ul>
            <li>
            <a href="articles/{{$article->id}}">{{$article->name}}</a>
            </li>
        </ul>

    @endforeach
@endsection

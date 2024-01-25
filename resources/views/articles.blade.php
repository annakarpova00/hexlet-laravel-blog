@extends('layouts.app')

<!-- Секция, содержимое которой обычный текст. -->
@section('title', 'Статьи')

<!-- Секция, содержащая HTML блок. Имеет открывающую и закрывающую часть. -->
@section('content')
    <h1>Список статей</h1>
    <ul>
    @foreach($articles as $article)
        <li>{{ $article->name }}</li>
        <p> {{$article->body}}</p>
    @endforeach
    </ul>
@endsection

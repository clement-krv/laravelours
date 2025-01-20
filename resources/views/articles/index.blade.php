@extends('layouts.master')

@section('content')

    <h1>Liste des articles</h1>

    <a href="{{ route('articles.create') }}">Créer un article</a>

    <ul>
        @foreach ($articles as $article)
            <li>
                <a href="{{ route('articles.show', $article->id) }}">{{ $article->title }}</a>
            </li>
        @endforeach
    </ul>

@endsection

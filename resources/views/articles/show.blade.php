@extends('layouts.master')

@section('content')
    <div class="container mx-auto p-4">
        <h1 class="text-4xl font-bold mb-4">{{ $articles->title }}</h1>
        <p class="text-lg text-gray-700 mb-6">{{ $articles->content }}</p>

        <a href="{{ route('articles.index') }}" class="text-blue-500 hover:text-blue-700 underline">Retour à la liste des articles</a>
    </div>
@endsection

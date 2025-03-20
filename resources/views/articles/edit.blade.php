@extends('layouts.master')

@section('content')
    <div class="container mx-auto p-4">
        <h1 class="text-4xl font-bold mb-4">Modifier l'article</h1>

        <form action="{{ route('articles.update', $articles->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div class="mb-4">
                <label for="title" class="block text-gray-700">Titre</label>
                <input type="text" name="title" id="title" value="{{ $articles->title }}" class="w-full border-gray-300 rounded-md">
            </div>

            <div class="mb-4">
                <label for="content" class="block text-gray-700">Contenu</label>
                <textarea name="content" id="content" class="w-full border-gray-300 rounded-md">{{ $articles->content }}</textarea>
            </div>

            <div class="mb-4">
                <label for="category_id" class="block text-gray-700">Catégorie</label>
                <select name="category_id" id="category_id" class="w-full border-gray-300 rounded-md">
                    <option value="">Aucune</option>
                    @foreach($categories as $category)
                        <option value="{{ $category->id }}" {{ $articles->category_id == $category->id ? 'selected' : '' }}>{{ $category->title }}</option>
                    @endforeach
                </select>
            </div>

            <div class="mb-4">
                <label for="image" class="block text-gray-700">Image</label>
                @if($articles->getFirstMediaUrl('image'))
                    <img src="{{ $articles->getFirstMediaUrl('image') }}" alt="{{ $articles->title }}" class="mb-4">
                @endif
                <input type="file" name="image" id="image" class="w-full border-gray-300 rounded-md">
            </div>

            <div class="mb-4">
                <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded-md">Mettre à jour</button>
            </div>
        </form>
    </div>
@endsection
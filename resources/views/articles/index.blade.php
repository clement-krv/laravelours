@extends('layouts.master')

@section('content')
    <div class="container mx-auto p-4">
        <h1 class="text-2xl text-center font-bold mb-4">Liste des articles</h1>

        <a href="{{ route('articles.create') }}" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-700">Créer un article</a>

        <table class="min-w-full bg-white border border-gray-200 mt-4">
            <thead>
                <tr class="bg-gray-100">
                    <th class="py-2 px-4 border-b">Titre</th>
                    <th class="py-2 px-4 border-b">Contenue</th>
                    <th class="py-2 px-4 border-b">Catégorie</th>
                    <th class="py-2 px-4 border-b">Date de création</th>
                    <th class="py-2 px-4 border-b">Dernière modification</th>
                    <th class="py-2 px-4 border-b">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($articles as $article)
                    <tr class="hover:bg-gray-50">
                        <td class="py-2 px-4 border-b">
                            <a href="{{ route('articles.show', $article->id) }}" class="text-blue-500 hover:underline">{{ $article->title }}</a>
                        </td>
                        <td class="py-2 px-4 border-b">
                            {{ $article->content }}
                        </td>
                        <td class="py-2 px-4 border-b">
                            {{ $article->category ? $article->category->title : 'Aucune catégorie' }}
                        </td>
                        <td class="py-2 px-4 border-b">
                            {{ $article->created_at->format('d/m/Y') }}
                        </td>
                        <td class="py-2 px-4 border-b">
                            {{ $article->updated_at->diffForHumans() }}
                        </td>
                        <td class="py-2 px-4 border-b">
                            <a href="{{ route('articles.edit', $article->id) }}" class="text-yellow-500 hover:underline">Modifier</a>
                            <form action="{{ route('articles.destroy', $article->id) }}" method="post" class="inline">
                                @csrf
                                @method('delete')
                                <button type="submit" class="text-red-500 hover:underline">Supprimer</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        {{ $articles->links() }}
    </div>

@endsection

@extends('layouts.master')

@section('content')

    <form action="{{ route('articles.store') }}" method="post">
        @csrf
        <div>
            <label for="title">Titre</label>
            <input type="text" name="title" id="title">
        </div>
        <div>
            <label for="content">Contenue</label>
            <textarea name="content" id="content"></textarea>
        </div>
        <button type="submit">Valider</button>

    </form>

@endsection

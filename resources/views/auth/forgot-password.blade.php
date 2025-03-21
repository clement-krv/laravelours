@extends('layouts.master')

@section('content')

    <form action="{{ route('password.email') }}" method="POST" class="bg-white shadow-md rounded p-4 max-w-lg mx-auto">
        @csrf
        <div class="mb-4">
            <label for="email" class="block text-gray-700 text-sm font-bold mb-2">Email</label>
            <input type="email" name="email" id="email" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
        </div>
        <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">Envoyer le lien de réinitialisation</button>
        <a href="{{ route('login') }}" class="text-blue-500 hover:text-blue-700 underline">J'ai déjà un compte</a>
    </form>

@endsection

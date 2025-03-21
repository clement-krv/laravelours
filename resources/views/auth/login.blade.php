@extends('layouts.master')

@section('content')

    <form action="{{ route('login') }}" method="POST" class="bg-white shadow-md rounded p-4 max-w-lg mx-auto">
        @csrf
        <div class="mb-4">
            <label for="email" class="block text-gray-700 text-sm font-bold mb-2">Email</label>
            <input type="email" name="email" id="email" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
        </div>
        <div class="mb-4">
            <label for="password" class="block text-gray-700 text-sm font-bold mb-2">Mot de passe</label>
            <input type="password" name="password" id="password" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
        </div>
        <div class="mb-4">
            {{-- Remember me  --}}
            <input type="checkbox" name="remember" id="remember" class="mr-2 leading-tight">
            <label for="remember" class="text-gray-700 text-sm font-bold">Se souvenir de moi</label>
        </div>
        <div class="mb-4">
            <a href="{{ route('password.request') }}" class="text-blue-500 hover:text-blue-700 underline">Mot de passe oublié ?</a>
        </div>
        <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">Connexion</button>
        <a href="{{ route('register') }}" class="text-blue-500 hover:text-blue-700 underline">Je n'ai pas de compte</a>
    </form>
@endsection

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravelours</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>

    @auth
        <nav class="bg-gray-800 text-white p-4">
            <div class="container mx-auto flex justify-between items-center">
                <a href="{{ route('articles.index') }}" class="text-white hover:underline">Accueil</a>
                <p> Bonjour {{ auth()->user()->name }}</p>
                <form action="{{ route('logout') }}" method="POST" class="inline">
                    @csrf
                    <button type="submit" class="text-white hover:underline">Déconnexion</button>
                </form>
            </div>
        </nav>
    @endauth

    @yield('content')
</body>
</html>

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ config('app.name') }} - @yield('title')</title>

    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous" defer></script> -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>
    <body>
        <h1>Accueil</h1>
            <section class="Image">
                <div class="tailleimage">
                <img class="tailleimage" src="image/cathy-pham-3jAN9InapQI-unsplash.jpg" alt="image de cathy pham">
                <img class="tailleimage" src="image/samuel-girven-VJ2s0c20qCo-unsplash.jpg" alt="image de samuel girven">



        <p>Vous êtes sur la page d'Accueil

        </p>

        <header>
            <h1>Salle de sport pour homme fort</h1>
            <nav>
                <a href="{{ route('main.accueil') }}">Accueil</a>
                <a href="{{ route('main.cours') }}">Cours</a>
                <a href="{{ route('main.tarifs') }}">Tarifs</a>
                <a href="{{ route('main.contact') }}">Contact</a>
                <a href="{{ route('main.mentions-legales') }}">MentionsLegales</a>
            </nav>
        

        </header>

        <div class="container">
        <section>
            @yield('content')

        </section>
        </div>

        <footer>
            @section('footer')
            Copyright 2022
            @show
        </footer>
    </body>
</html>
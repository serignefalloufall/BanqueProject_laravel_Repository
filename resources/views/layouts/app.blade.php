<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Accuiel</title>

        <link href="{{ asset('css/menu.css') }}" rel="stylesheet">
        <link href="{{ asset('css/gestionClient.css') }}" rel="stylesheet">
        <link href="{{ asset('css/gestionCompte.css') }}" rel="stylesheet">

        <script src="{{ asset('js/gestionClient.js') }}" type="text/javascript"></script>
        <script src="{{ asset('js/gestionCompte.js') }}" type="text/javascript"></script>
        
        
    </head>
    <body>
        <nav>
            <ul class="menu">
                <li class="logo"><a href="#">La banque du peuple</a></li>
                <li class="item"><a href="{{ route('addregion') }}">Gestion des region</a></li>
                <li class="item"><a href="{{ route('listeregion') }}">Liste region</a></li>

                <li class="item"><a href="{{ route('addclient') }}">Gestion des clients</a></li>
                <li class="item"><a href="{{ route('listeclient') }}">Liste clients</a></li>

                <li class="item"><a href="{{ route('addcompte') }}">Gestion des comptes</a></li>
                <li class="item"><a href="{{ route('listecompte') }}">Liste comptes</a></li>
            </ul>
        </nav>
        
        
        
        <main class="py-4">
            @yield('content')
        </main>

    </body>
</html>
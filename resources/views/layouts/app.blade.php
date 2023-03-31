<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> Magic World - @yield('title') - </title>
</head>
<body>
    <header>
        <p>Magic World</p>
        <nav>
            <ul>
                <li><a href="{{route('magics.index')}}">Tous les personnages</a></li>
                <li><a href="{{route('magics.create')}}">Créer un personnage</a></li>
            </ul>

        </nav>
    </header>
    <h1> @yield('title')</h1>

    <div>
    @yield('content') 
    </div>

</body>
</html>
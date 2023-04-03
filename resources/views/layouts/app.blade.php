<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @Vite('resources/css/app.css')
    <title> Magic World - @yield('title') - </title>
</head>

<body>
    <header>
        
        <nav class="nav-title">
           
            <p class="title">Magic World</p>
            <ul class="ul-title">
                <li class="li-title"><a href="{{route('magics.index')}}">Tous les personnages</a></li>
                <li class="li-title"><a href="{{route('magics.create')}}">Créer un personnage</a></li>
            </ul>

        </nav>
    </header>
    <h1 class="principal-title"> @yield('title')</h1>

    <div>
    @yield('content') 
    </div>

    <footer>
        <p>© 2023 - Magic World - </p>
    </footer>

</body>
</html>
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
            <?php
            $user = Auth::user();
            ?>

            @if (!isset($user)) 
            <ul class="ul-title">                        
                <li class="li-title"><a href="{{route('magics.index')}}">Catalogue des Magics</a></li>
                <li class="li-title"><a href="{{route('groupes.index')}}">Catalogue des Groupes</a></li>
                <li class="li-title"><a href="{{route('magics.create')}}">Créer un Magic</a></li>
                <li class="li-title"><a href="{{route('register.show')}}">S'inscrire</a></li>
                <li class="li-title"><a href="{{route('login.show')}}">Se connecter</a></li>
                
             
            </ul>              
            
            @endif
            @if (isset($user)) 
            <ul class="ul-title">                        
                <li class="li-title"><a href="{{route('magics.index')}}">Catalogue des Magics</a></li>
                <li class="li-title"><a href="{{route('groupes.index')}}">Catalogue des Groupes</a></li>
              

                <li class="li-title"><a href="{{route('magics.create')}}">Créer un Magic</a></li>
                <li class="li-title"><a href="{{route('groupes.create')}}">Créer un groupe</a></li>
                <li class="li-title"><a href="{{route('magics.search')}}">Rechercher un Magic</a></li>
                <li class="li-title"><a href="{{route('logout')}}">Se déconnecter</a></li>
              
            </ul>           
            @endif   
        
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
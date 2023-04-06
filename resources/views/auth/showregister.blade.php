@extends('layouts.app')

@section('title',"Formulaire d'inscription")

@section('content') 

    <form class="form-magic" action="{{ route('register.post') }}" method="post">
        @csrf

        <div class="">
            <label for="nom">Nom</label>
            <input id="nom" type="text" name="nom" value="{{ old('nom') }}" required />
        </div>

        <div class="">
            <label for="prenom">Prénom </label>
            <input id="prenom" type="text" name="prenom" value="{{ old('prenom') }}" required />
        </div>

        <div class="">
            <label for="pseudo">Pseudo </label>
            <input id="pseudo" type="text" name="pseudo" value="{{ old('pseudo') }}" required />
        </div>

        <div class="">
            <label for="email">Email </label>
            <input id="email" type="text" name="email" value="{{ old('email') }}" required />
        </div>

        <div class="">
            <label for="password">Mot de passe </label>
            <input id="password" type="password" name="password" value="{{ old('password') }}" required pattern="/^[a-zA-Z0-9!@#\$%\^\&*_=+-]{8,20}$/g" />
        </div>        

        <input type="submit" value="S'inscrire" />
    </form>

    @if($errors->any())
        @foreach($errors->all() as $error)
            <p class="error">{{ $error }}</p>
        @endforeach
    @endif
    
@endsection
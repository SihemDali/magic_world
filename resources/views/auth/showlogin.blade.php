@extends('layouts.app')

@section('title',"Formulaire de connexion")

@section('content') 

    <form class="form-magic" action="{{ route('login.post') }}" method="post">
        @csrf

        <div class="">
            <label for="email">Email </label>
            <input id="email" type="text" name="email" value="{{ old('email') }}" required />
        </div>

        <div class="">
            <label for="password">Mot de passe </label>
            <input id="password" type="password" name="password" value="{{ old('password') }}" required />
        </div>        

        <input type="submit" value="Se connecter" />
    </form>

    @if($errors->any())
        @foreach($errors->all() as $error)
            <p class="error">{{ $error }}</p>
        @endforeach
    @endif
    
@endsection
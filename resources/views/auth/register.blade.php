@extends('layouts.app')

@section('title','Inscription' )

@section('content') 

   <div class="div-show">
    <p> Inscription réussie!</p>
    <p> Welcomme to The Magic world !</p>
    <p>Nom : {{$request->nom}} </p>
    <p>Prénom : {{$request->prenom}} </p>
    <p>Pseudo : {{$request->pseudo}} </p>
    <p>Email : {{$request->email}} </p>

    <a href="{{route('login.show')}}"> Se connecter </a>
</div>
@endsection

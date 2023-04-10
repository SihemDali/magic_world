@extends('layouts.app')

@section('title','Inscription' )

@section('content') 

   <div class="div-show">
    <p> Inscription réussie!</p>
    <p><b>Welcomme to The Magic world !</b></p>
    <p><b>Nom :</b> {{$request->nom}} </p>
    <p><b>Prénom :</b> {{$request->prenom}} </p>
    <p><b>Pseudo :</b> {{$request->pseudo}} </p>
    <p><b>Email :</b> {{$request->email}} </p>

    <a href="{{route('login.show')}}"> Se connecter </a>
</div>
@endsection

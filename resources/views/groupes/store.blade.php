@extends('layouts.app')

@section('title',"Création d'un groupe" )

@section('content') 

<div class="div-show" >

    <p class="confirmation">Le groupe {{$groupe->nom}} a bien été créé!</p>
    <p>Nom: {{$groupe->nom}} </p>
    <p>Description: {{$groupe->description}} </p>
    <p>Nombre de places: {{$groupe->nombreDePlaces}} </p>
  
</div>
    
@endsection
@extends('layouts.app')

@section('title',"Modification du groupe" )

@section('content') 

<div class="div-show">

    <p class="confirmation">Le groupe a bien été modifié !</p>
    <p>Nom: {{$groupe->nom}} </p>
    <p>Description: {{$groupe->description}} </p>
    <p>Nombre de places: {{$groupe->nombreDePlaces}} </p>
 
</div>   
@endsection
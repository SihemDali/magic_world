@extends('layouts.app')

@section('title',"Création d'un personnage" )

@section('content') 

<div class="div-show" >

    <p class="confirmation">Le personnage {{$magic->nom}} a bien été créé!</p>
    <p>Nom: {{$magic->nom}} </p>
    <p>Description: {{$magic->description}} </p>
    <p>Spécialité: {{$magic->specialite}} </p>
    <p>Magie: {{$magic->magie}} </p>
    <p>Force: {{$magic->force}} </p>
    <p>Agilité: {{$magic->agilite}} </p>
    <p>Intelligence: {{$magic->intelligence}} </p>
    <p>Points de vie: {{$magic->pv}} </p>
</div>
    
@endsection
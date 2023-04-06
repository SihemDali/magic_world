@extends('layouts.app')

@section('title',"Modification du personnage" )

@section('content') 

<div class="div-show">

    <p class="confirmation">Le personnage a bien été modifié !</p>
    <p>Nom: {{$magic->nom}} </p>
    <p>Description: {{$magic->description}} </p>
    <p>Spécialité: {{$magic->specialite}} </p>
    <p>Magie: {{$magic->magie}} </p>
    <p>Force: {{$magic->force}} </p>
    <p>Agilité: {{$magic->agilite}} </p>
    <p>Intelligence: {{$magic->intelligence}} </p>
    <p>Points de vie: {{$magic->pv}} </p>
    <p>Groupe: {{$magic->groupe}} </p>
</div>   
@endsection
@extends('layouts.app')

@section('title',"Modification d'un personnage" )

@section('content') 

    <p>Le personnage a bien été modifié !</p>
    <p>Nom: {{$magic->nom}} </p>
    <p>Description: {{$magic->description}} </p>
    <p>Spécialité: {{$magic->specialite}} </p>
    <p>Magie: {{$magic->magie}} </p>
    <p>Force: {{$magic->force}} </p>
    <p>Agilité: {{$magic->agilite}} </p>
    <p>Intelligence: {{$magic->intelligence}} </p>
    <p>Points de vie: {{$magic->pv}} </p>
    
@endsection
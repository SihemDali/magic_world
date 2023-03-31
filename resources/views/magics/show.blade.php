@extends('layouts.app')

@section('title','Détails de'.$details->nom )

@section('content') 
   
    <p>Nom: {{$details->nom}} </p>
    <p>Description: {{$details->description}} </p>
    <p>Spécialité: {{$details->specialite}} </p>
    <p>Magie: {{$details->magie}} </p>
    <p>Force: {{$details->force}} </p>
    <p>Agilité: {{$details->agilite}} </p>
    <p>Intelligence: {{$details->intelligence}} </p>
    <p>Points de vie: {{$details->pv}} </p>

    <a href="{{route('magics.edit',['magic'=>$details->nom])}}"> Modifier </a>

@endsection

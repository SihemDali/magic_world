@extends('layouts.app')

@section('title','Détails du personnage : '.$details->nom )

@section('content') 
   <div class="div-show">
    <p>Nom : {{$details->nom}} </p>
    <p>Description : {{$details->description}} </p>
    <p>Spécialité : {{$details->specialite}} </p>
    <p>Magie : {{$details->magie}} </p>
    <p>Force : {{$details->force}} </p>
    <p>Agilité : {{$details->agilite}} </p>
    <p>Intelligence : {{$details->intelligence}} </p>
    <p>Points de vie : {{$details->pv}} </p>
    <p>Groupe : {{$details->groupe}} </p>
    <a href="{{route('magics.edit',['magic'=>$details->nom])}}"> Modifier </a>
</div>
@endsection

@extends('layouts.app')

@section('title','Détails du groupe : '.$details->nom )

@section('content') 
   <div class="div-show">
    <p>Nom : {{$details->nom}} </p>
    <p>Description : {{$details->description}} </p>
    <p>Nombre de places : {{$details->nombreDePlaces}} </p>
    <p>Magics du groupe {{$details->nom}} : </p>
    <ul class="ul-liste">
        @foreach ($personnages as $item)          
        <li>
            <h3 class="h-liste">{{$item->nom}}</h3>
            <p class="p-liste"><u><b> Nom </b></u>: {{$item->nom}}</p>
        </li>            
        @endforeach
    </ul>   
    </div>
@endsection

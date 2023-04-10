@extends('layouts.app')

@section('title','Détails du groupe : '.$details->nom )

@section('content') 
   <div class="div-show">
    <p><u><b>Nom </b></u> : {{$details->nom}} </p>
    <p><u><b>Description </b></u> : {{$details->description}} </p>
    <p><u><b>Nombre de places  </b></u> : {{$details->nombreDePlaces}} </p>
    <p><u><b>Magics du groupe</b></u> :</p>
    <ul class="ul-liste">
        @foreach ($personnages as $item)          
        <li> {{$item->nom}}
            <a href="{{route('magics.show',['magic'=>$item->nom])}}" class="a-liste">Voir détails</a>
        </li>            
        @endforeach
    </ul> 
    <a href="{{route('groupes.edit',['groupe'=>$details->nom])}}"> Modifier </a>  
    </div>
@endsection

@extends('layouts.app')

@section('title','Les groupes de Magics')

@section('content')   

    <ul class="ul-liste">
        @foreach ($groupes as $item)
            <li class="li-liste">
                <h3 class="h-liste">{{$item->nom}}</h3>
                <p class="p-liste"> <b><u> Nom </u></b> : {{$item->nom}}</p>
                <p class="p-liste"> <b><u>Description</u> </b> : {{$item->description}} </p>
                <p class="p-liste"> <b><u>Nombre de places </u></b> : {{$item->nombreDePlaces}} </p>
              
                <a href="{{route('groupes.show',['groupe'=>$item->nom])}}" class="a-liste">Voir détails</a>
            </li>
                   
        @endforeach
    </ul>


@endsection
@extends('layouts.app')

@section('title','Liste des personnages')

@section('content')   

    <ul class="ul-liste">
        @foreach ($magics as $item)
            <li class="li-liste">
                <h3 class="h-liste">{{$item->nom}}</h3>
                <p class="p-liste">Nom : {{$item->nom}}</p>
                <p class="p-liste">Description : {{$item->description}} </p>
                <p class="p-liste">Spécialité : {{$item->specialite}} </p>
                <p class="p-liste">Magie : {{$item->magie}} </p>
                <p class="p-liste">Force : {{$item->force}} </p>
                <p class="p-liste">Agilité : {{$item->agilite}} </p>
                <p class="p-liste">Intelligence : {{$item->intelligence}} </p>
                <p class="p-liste">Points de vie : {{$item->pv}} </p>
                <a href="{{route('magics.show',['magic'=>$item->nom])}}" class="a-liste">Voir détails</a>
            </li>
                   
        @endforeach
    </ul>


@endsection
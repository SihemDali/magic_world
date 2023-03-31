@extends('layouts.app')

@section('title','Liste des personnages')

@section('content')   

    <ul>
        @foreach ($magics as $item)
            <li>
                <h3>{{$item->nom}}</h3>
                <p>Nom:{{$item->nom}}</p>
                <p>Description: {{$item->description}} </p>
                <p>Spécialité: {{$item->specialite}} </p>
                <p>Magie: {{$item->magie}} </p>
                <p>Force: {{$item->force}} </p>
                <p>Agilité: {{$item->agilite}} </p>
                <p>Intelligence: {{$item->intelligence}} </p>
                <p>Points de vie: {{$item->pv}} </p>
                <a href="{{route('magics.show',['magic'=>$item->nom])}}">Voir détails</a>
            </li>
                   
        @endforeach
    </ul>


@endsection
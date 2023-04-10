@extends('layouts.app')

@section('title','Les Magics')

@section('content')   

    <ul class="ul-liste">
        @foreach ($magics as $item)
            <li class="li-liste">
                <h3 class="h-liste">{{$item->nom}}</h3>
                <p class="p-liste"><u><b> Nom </b></u>: {{$item->nom}}</p>
                <p class="p-liste"><u><b> Description </b></u>: {{$item->description}} </p>
                <p class="p-liste"><u><b> Spécialité </b></u> : {{$item->specialite}} </p>
                <p class="p-liste"><u><b> Magie </b></u> : {{$item->magie}} </p>
                <p class="p-liste"><u><b> Force </b></u> : {{$item->force}} </p>
                <p class="p-liste"><u><b> Agilité </b></u>: {{$item->agilite}} </p>
                <p class="p-liste"><u><b> Intelligence </b></u>: {{$item->intelligence}} </p>
                <p class="p-liste"><u><b> Points de vie </b></u>: {{$item->pv}} </p>
                <a href="{{route('magics.show',['magic'=>$item->nom])}}" class="a-liste">Voir détails</a>
            </li>
                   
        @endforeach
    </ul>


@endsection
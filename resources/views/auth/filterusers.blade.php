@extends('layouts.app')

@section('title','Résultat de la recherche')

@section('content')   

    <ul class="ul-liste">
        @foreach ($users as $item)
            <li class="li-liste">
                <h3 class="h-liste">{{$item->nom}}</h3>
                <p class="p-liste"><u><b> Pseudo : </b></u>: {{$item->pseudo}}</p>           
            </li>
                   
        @endforeach
    </ul>


@endsection
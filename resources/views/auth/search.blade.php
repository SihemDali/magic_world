@extends('layouts.app')

@section('title','Rechercher un joueur')

@section('content') 

    <form class="form-magic" action="{{ route('users.filter') }}" method="post">
        @csrf
       
        <div class="">
            <label for="nom">Nom</label>
            <input id="name" type="text" name="nom"  required />
        </div>        

        <input type="submit" value="Rechercher" />
    </form>

    @if($errors->any())
        @foreach($errors->all() as $error)
            <p class="error">{{ $error }}</p>
        @endforeach
    @endif
    
@endsection
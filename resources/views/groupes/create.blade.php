@extends('layouts.app')

@section('title',"Créer un groupe")

@section('content') 

    <form class="form-magic" action="{{ route('groupes.store') }}" method="post">
        @csrf

        <div class="">
            <label for="name">Nom : </label>
            <input id="name" type="text" name="nom" value="{{ old('name') }}" required />
        </div>

        <div class="">
            <label for="description">Description : </label>
            <textarea name="description" id="description" cols="30" rows="10" value="{{ old('description') }}" required ></textarea>
        </div>

        <div class="">
            <label for="nombreDePlaces">Nombre de places : </label>
            <input id="nombreDePlaces" type="number" name="nombreDePlaces" value="{{ old('nombreDePlaces') }}" required />
        </div>   

        <input type="submit" value="Créer" />
    </form>

    @if($errors->any())
        @foreach($errors->all() as $error)
            <p class="error">{{ $error }}</p>
        @endforeach
    @endif
    
@endsection
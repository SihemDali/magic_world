@extends('layouts.app')

@section('title','Modifier le groupe')

@section('content') 

    <form class="form-magic" action="{{route('groupes.update',['groupe'=>$details->nom])}}" method="post">
        @csrf
        @method('PUT')

        <div class="">
            <label for="nom">Nom : </label>
            <input id="name" type="text" name="nom" value="{{ $details->nom}}" required />
        </div>

        <div class="">
            <label for="description">Description : </label>
            <textarea name="description" id="description" cols="30" rows="10" value="{{ $details->description }}" required ></textarea>
        </div>

        <div class="">
            <label for="places">Nombre de places : </label>
            <input id="places" type="number" name="nombreDePlaces" value="{{ $details->nombreDePlaces }}" required />
        </div>         

        <input type="submit" value="Modifier" />
    </form>

    <h2 class="principal-title">Supprimer le groupe</h2>

    <form class="form-magic" action="{{ route('groupes.destroy',['groupe'=>$details->nom]) }}" method="post">
        @csrf
        @method('DELETE')

        <div >
            <input type="submit" value="Supprimer" />
        </div>
    </form>  


    @if($errors->any())
        @foreach($errors->all() as $error)
            <p class="error">{{ $error }}</p>
        @endforeach
    @endif
    
@endsection
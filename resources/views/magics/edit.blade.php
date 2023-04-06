@extends('layouts.app')

@section('title','Modifier le personnage')

@section('content') 

    <form class="form-magic" action="{{ route('magics.update', ['magic'=>$details->nom]) }}" method="post">
        @csrf
        @method('PUT')

        <div class="">
            <label for="nom">Nom</label>
            <input id="name" type="text" name="nom" value="{{ $details->nom}}" required />
        </div>

        <div class="">
            <label for="description">Description</label>
            <textarea name="description" id="description" cols="30" rows="10" value="{{ $details->description }}" required ></textarea>
        </div>

        <div class="">
            <label for="specialite">Spécialité</label>
            <select id="specialite" name="specialite" required>
                <option value="">--Choisir une spécialité--</option>             
                <option value="Guerrier" {{$details->specialite ==='Guerrier' ? 'selected' : ''}}>Guerrier</option>
                <option value="Mage" {{$details->specialite ==='Mage' ? 'selected' : ''}}>Mage</option>
                <option value="Druide" {{$details->specialite ==='Druide' ? 'selected' : ''}}>Druide</option>
                <option value="Assassin" {{$details->specialite ==='Assassin' ? 'selected' : ''}}>Assassin</option>
                <option value="Berserker" {{$details->specialite ==='Berserker' ? 'selected' : ''}}>Berserker</option>
                <option value="Archer" {{$details->specialite ==='Archer' ? 'selected' : ''}}>Archer</option>
            </select>
        </div>

        <div class="">
            <label for="groupe">Groupe : </label>
            <input id="groupe" type="text" name="groupe" value="{{ $details->groupe}}" required />
        </div>

        <input type="submit" value="Modifier" />
    </form>

    <h2 class="principal-title">Supprimer le personnage</h2>

    <form class="form-magic" action="{{ route('magics.destroy',['magic'=>$details->nom]) }}" method="post">
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
@extends('layouts.app')

@section('title','Rechercher un personnage')

@section('content') 

<h2 class="h2-search">Recherche par nom : </h2>

    <form class="form-magic" action="{{ route('magics.filter') }}" method="post">
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

<h2 class="h2-search">Recherche par spécialité : </h2>

<form class="form-magic" action="{{ route('magics.filterspecialite') }}" method="post">
    @csrf
       
    <div class="">
        <label for="specialite">Spécialité : </label>
        <select id="specialite" name="specialite" required>
            <option value="">--Choisir une spécialité--</option>
            <option value="Guerrier">Guerrier</option>
            <option value="Mage">Mage</option>
            <option value="Druide">Druide</option>
            <option value="Assassin">Assassin</option>
            <option value="Berserker">Berserker</option>
            <option value="Archer">Archer</option>
        </select>
    </div>

    <input type="submit" value="Rechercher" />
</form>

@if($errors->any())
    @foreach($errors->all() as $error)
        <p class="error">{{ $error }}</p>
    @endforeach
@endif


    
@endsection
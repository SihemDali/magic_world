@extends('layouts.app')

@section('title',"Créer un personnage")

@section('content') 

    <form class="form-magic" action="{{ route('magics.store') }}" method="post">
        @csrf

        <div class="">
            <label for="name">Nom</label>
            <input id="name" type="text" name="nom" value="{{ old('name') }}" required />
        </div>

        <div class="">
            <label for="description">Description</label>
            <textarea name="description" id="description" cols="30" rows="10" value="{{ old('description') }}" required ></textarea>
        </div>

        <div class="">
            <label for="specialite">Spécialité</label>
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

        <input type="submit" value="Créer" />
    </form>

    @if($errors->any())
        @foreach($errors->all() as $error)
            <p class="error">{{ $error }}</p>
        @endforeach
    @endif
    
@endsection
@extends('layouts.app')

@section('title','Filtrer les personnages')

@section('content') 

    <form class="form-magic" action="{{ route('magics.filter') }}" method="post">
        @csrf
       

        <div class="">
            <label for="nom">Nom</label>
            <input id="name" type="text" name="nom"  required />
        </div>        

        <input type="submit" value="Filtrer" />
    </form>

    @if($errors->any())
        @foreach($errors->all() as $error)
            <p class="error">{{ $error }}</p>
        @endforeach
    @endif
    
@endsection
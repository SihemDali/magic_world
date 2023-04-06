@extends('layouts.app')

@section('title','Profil' )

@section('content') 

   <div class="div-show">
    <p>Vous êtes connecté en tant que {{ $user->nom  }}  {{ $user->prenom}} </p>    
   </div>
@endsection
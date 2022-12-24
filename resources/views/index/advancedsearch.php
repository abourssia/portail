@extends('layouts.homemaster')

@section('title', 'RESULTAT ')

@section('content')

    @foreach ($labos as $labos)
    titre : {{$labos -> intitule}} region :  {{$labos -> region}} 
    domaine :  {{$labos -> domaine}}
    <br>

    @endforeach

@endsection
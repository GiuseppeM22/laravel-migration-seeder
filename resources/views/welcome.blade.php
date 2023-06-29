@extends('layouts.app')

@section('content')
<div class="container my-3">
    <h1>Lista treni:</h1>
    @foreach ($trains as $train)
        <h2>Azienda: {{$train->azienda}}</h2>
        <p>tratta: {{$train->stazione_di_partenza}} -> {{$train->stazione_di_arrivo}}</p>
        <p>orari: {{$train->orario_di_partenza}} -> {{$train->orario_di_arrivo}}</p>
        <p>In Orario: {{$train->in_orario? 'Si' : 'No'}}</p>
    @endforeach
</div>
@endsection


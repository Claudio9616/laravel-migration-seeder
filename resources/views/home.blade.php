@extends('layouts.main')
@section('table-content')
<table class="table table-dark table-striped">
@forelse ($trains as $train)
    <thead>
      <tr>
        <th scope="col">CODICE TRENO</th>
        <th scope="col">STAZIONE DI PARTENZA</th>
        <th scope="col">STAZIONE DI ARRIVO</th>
        <th scope="col">ORARIO DI PARTENZA</th>
        <th scope="col">ORARIO DI ARRIVO</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <th scope="row">{{$train->codice_treno}}</th>
        <td>{{$train->stazione_di_partenza}}</td>
        <td>{{$train->stazione_di_arrivo}}</td>
        <td>{{$train->orario_di_partenza}}</td>
        <td>{{$train->orario_di_arrivo}}</td>
      </tr>
    </tbody>
@empty
    <h1>SIAMO IN ITALIA E NON CI SONO TRENI CHE FUNZIONANO</h1>
@endforelse
</table>
@endsection
 

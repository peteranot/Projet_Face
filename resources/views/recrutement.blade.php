@extends('layouts.app')

@section('content')
<div class="container">
  <p><label><u><b>Demandeur d'emploie</b></u></label>
    {{-- <form class="form-inline my-4 my-lg-0">
      <input class="form-control mr-sm-4" type="search" placeholder="Rechercher des demandeurs d'emploie" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Rechercher</button>
    </form> --}}
  </p>

  <div class="card-deck">
    @foreach($listjobseeker as $value)
    <div class="card">
      {{-- <img class="card-img-top" src="" alt="Photo de profils"> --}}
      <div class="card-body">
        <h3 class="card-title">{{ $value['firstname'] }} {{ $value['lastname'] }}</h3>
        <p class="card-text">Lieux d'habitation : {{ $value['home'] }}</p>
        <p class="card-text">Tél : {{ $value['phone'] }}</p>
        <p class="card-text">Adresse e-mail : {{ $value['email'] }}</p>
        <p class="card-text"><u><b>Description de la demande : </b></u></p>
        <p>{{ $value['description'] }}</p>
      </div>
    </div>
    @endforeach
  </div>
</div> <!-- Fin container -->
@endsection


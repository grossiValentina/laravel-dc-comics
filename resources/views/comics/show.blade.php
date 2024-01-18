@extends('layouts.app')

@section('content')
    <div class="container">
        <h2 class="pb-3">fumetto: {{ $comic->title }}</h2>
        
        <div class="card" style="width: 18rem;">
            <img src="{{ $comic->thumb }}" class="card-img-top" alt="{{ $comic->title }}">
            <div class="card-body">
              <p class="card-text text-center">Tipo: {{ $comic->type }}</p>
              <h6 class="text-center">{{ $comic->price }}</h6>
              <p class="card-text text-center">Serie: {{ $comic->series }}</p>
            </div>
          </div>

          <div>
            <h6 class="pt-5">Descrizione:</h6>
            <p class="pt-2">{{ $comic->description }}</p>
          </div>
    </div>
@endsection
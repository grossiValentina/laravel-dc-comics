@extends('layouts.app')

@section('content')

<div class="container">
    <h2>Modifica il fumetto {{ $comic->title }}</h2>
</div>

<div class="row justify-content-center pt-3">
    <div class="col-6">

        {{-- Validation - error message --}}
        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

        <form action="{{ route('comics.update', ['comic' => $comic->id]) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="mb-3">
                <label for="title" class="form-label">Titolo</label>
                <input type="text" class="form-control" id="title" name="title" value="{{ old('title', $comic->title) }}">

                <div class="mb-3">
                    <label for="decription" class="form-label">Descrizione</label>
                    <textarea class="form-control" id="description" name="description">{{ old('description', $comic->description) }}</textarea>
                </div>

                <div class="mb-3">
                    <label for="thumb" class="form-label">Immagine</label>
                    <input type="text" class="form-control" id="thumb" name="thumb" value="{{ old('thumb', $comic->thumb) }}">
                </div>

                <div class="mb-3">
                    <label for="price" class="form-label">Prezzo</label>
                    <input type="text" class="form-control" id="price" name="price" value="{{ old('price', $comic->price) }}">
                </div>

                <div class="mb-3">
                    <label for="series" class="form-label">Serie</label>
                    <input type="text" class="form-control" id="series" name="series" value="{{ old('series', $comic->series) }}">
                </div>

                <div class="mb-3">
                    <label for="sale_date" class="form-label">Data</label>
                    <input type="text" class="form-control" id="sale_date" name="sale_date" value="{{ old('sale_date', $comic->sale_date) }}">
                </div>

                <div class="mb-3">
                    <label for="type" class="form-label">Tipologia</label>
                    <select class="form-select" name="type" id="type">
                        <option  @selected(old('type', $comic->type) === 'comic book')  value="comic book">Comic Book</option>
                        <option  @selected(old('type', $comic->type) === 'graphic novel')  value="graphic novel">Graphic Novel</option>
                    </select>
                </div>

                <button class="btn btn-warning mt-2" type="submit">Salva</button>
        </form>
    </div>
</div>

@endsection

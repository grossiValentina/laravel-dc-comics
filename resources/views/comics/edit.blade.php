@extends('layouts.app')

@section('content')

<div class="container">
    <h2>Modifica il fumetto {{ $comic->title }}</h2>
</div>

<div class="row justify-content-center pt-3">
    <div class="col-6">

        <form action="">
        
            <div class="mb-3">
                <label for="title" class="form-label">Titolo</label>
                <input type="text" class="form-control" id="title" name="title" value="{{ $comic->title }}">

                <div class="mb-3">
                    <label for="decription" class="form-label">Descrizione</label>
                    <textarea class="form-control" id="description" name="description">{{ $comic->description }}</textarea>
                </div>

                <div class="mb-3">
                    <label for="thumb" class="form-label">Immagine</label>
                    <input type="text" class="form-control" id="thumb" name="thumb" value="{{ $comic->thumb }}">
                </div>

                <div class="mb-3">
                    <label for="price" class="form-label">Prezzo</label>
                    <input type="text" class="form-control" id="price" name="price" value="{{ $comic->price }}">
                </div>

                <div class="mb-3">
                    <label for="series" class="form-label">Serie</label>
                    <input type="text" class="form-control" id="series" name="series" value="{{ $comic->series }}">
                </div>

                <div class="mb-3">
                    <label for="sale_date" class="form-label">Data</label>
                    <input type="text" class="form-control" id="sale_date" name="sale_date" value="{{ $comic->sale_date }}">
                </div>

                <div class="mb-3">
                    <label for="type" class="form-label">Tipologia</label>
                    <select class="form-select" name="type" id="type">
                        <option @selected($comic->type === 'comic book') value="comic book">Comic Book</option>
                        <option @selected($comic->type === 'graphic novel') value="graphic novel">Graphic Novel</option>
                    </select>
                </div>

                <button class="btn btn-warning mt-2" type="submit">Salva</button>
        </form>
    </div>
</div>

@endsection

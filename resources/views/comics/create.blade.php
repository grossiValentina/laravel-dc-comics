@extends('layouts.app')

@section('content')
    <div>
        <h1 class="text-center pt-4">Crea un nuovo fumetto</h1>
    </div>

    <div class="row justify-content-center pt-3">
        <div class="col-6">

            <form action="{{ route('comics.store') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="title" class="form-label">Titolo</label>
                    <input type="text" class="form-control" id="title" name="title">

                    <div class="mb-3">
                        <label for="decription" class="form-label">Descrizione</label>
                        <textarea class="form-control" id="description" name="description"></textarea>
                    </div>

                    <div class="mb-3">
                        <label for="thumb" class="form-label">Immagine</label>
                        <input type="text" class="form-control" id="thumb" name="thumb">
                    </div>

                    <div class="mb-3">
                        <label for="price" class="form-label">Prezzo</label>
                        <input type="text" class="form-control" id="price" name="price">
                    </div>

                    <div class="mb-3">
                        <label for="series" class="form-label">Serie</label>
                        <input type="text" class="form-control" id="series" name="series">
                    </div>

                    <div class="mb-3">
                        <label for="sale_date" class="form-label">Data</label>
                        <input type="text" class="form-control" id="sale_date" name="sale_date">
                    </div>

                    <div class="mb-3">
                        <label for="type" class="form-label">Tipologia</label>
                        <select class="form-select" name="type" id="type">
                            <option value="">Seleziona</option>
                            <option value="comic book">Comic Book</option>
                            <option value="graphic novel">Graphic Novel</option>
                        </select>
                    </div>

                    <button class="btn btn-primary mt-2" type="submit">Salva</button>
            </form>
        </div>
    </div>
@endsection

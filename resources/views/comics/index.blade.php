@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="d-flex mt-4 mb-4 justify-content-around">
            <h2 class="text-center">Lista dei Fumetti</h2>
            <a class="btn btn-primary" href="{{ route('comics.create') }}">Crea un nuovo fumetto</a>
        </div>

        @if (Session::has('messaggio'))
            <div class="alert alert-success" role="alert">
                <h4 class="alert-heading">Ben Fatto!</h4>
                <p>{{ Session::get('messaggio') }}</p>
            </div>
        @endif


        <table class="table table-striped pt-4 m-auto">
            <thead>
                <tr>
                    <th scope="col">titolo</th>
                    <th scope="col">descrizione</th>
                    <th scope="col">copertina</th>
                    <th scope="col">prezzo</th>
                    <th scope="col">serie</th>
                    <th scope="col">data</th>
                    <th scope="col">tipologia</th>
                    <th scope="col">seleziona</th>
                </tr>
            </thead>
            <tbody>

                @foreach ($comics as $comic)
                    <tr>
                        <th scope="row">{{ $comic->title }}</th>
                        <!--Str::words limita il numero di parole in una stringa (4 parole)-->
                        <td>{{ Str::words($comic->description, 4) }}</td>
                        <!--Str::limit tronca la stringa data alla lunghezza specificata (10 caratteri)-->
                        <td>{{ Str::limit($comic->thumb, 10) }}</td>
                        <td>{{ $comic->price }}</td>
                        <td>{{ $comic->series }}</td>
                        <td>{{ $comic->sale_date }}</td>
                        <td>{{ $comic->type }}</td>
                        <td>
                            <a class="btn btn-primary"
                                href="{{ route('comics.show', ['comic' => $comic->id]) }}">dettagli</a>
                        </td>
                        <td>
                            <a class="btn btn-warning"
                                href="{{ route('comics.edit', ['comic' => $comic->id]) }}">modifica</a>
                        </td>
                        <td>
                            <form action="{{ route('comics.destroy', ['comic' => $comic->id]) }}" method="POST">
                                @csrf
                                @method('DELETE')

                                <button class="btn btn-danger" type="submit">cancella</button>
                            </form>
                        </td>
                    </tr>
                @endforeach

            </tbody>
        </table>

    </div>
@endsection

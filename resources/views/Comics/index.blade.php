@extends('layouts.app')

@section('content')
    <section>
        <div class="container">
            <h1>Lista dei comics</h1>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Titolo</th>
                        <th>Tipo</th>
                        <th>Serie</th>
                        <th>Azioni</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($comics as $comic)
                        <tr>
                            <td>
                                <h3>{{ $comic->title }}</h3>
                            </td>
                            <td>
                                <p>{{ $comic->type }}</p>

                            </td>
                            <td>
                                <p>{{ $comic->series }}</p>

                            </td>
                            <td>
                                <div class="button">
                                    <a href="{{ route('comics.show', $comic->id) }}" class="btn btn-success">Dettagli</a>
                                </div>
                            </td>
                            <td>
                                <div class="button">
                                    <a href="{{ route('comics.edit', $comic->id) }}" class="btn btn-warning">Modifica</a>
                                </div>
                            </td>
                            <td>
                                <form action="{{ route('comics.destroy', $comic->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">Cancella</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>

        </div>
    </section>
@endsection

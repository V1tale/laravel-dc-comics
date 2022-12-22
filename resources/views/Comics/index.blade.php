@extends('layouts.app')

@section('content')
    <section>
        <div class="container">
            <h1>Lista dei comics</h1>
            <a href="{{ route('home') }}">Vai alla home</a>
            <table>
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
                                    <a href="{{ route('comics.show', $comic->id) }}" class="btn btn-success">O</a>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>

        </div>
    </section>
@endsection

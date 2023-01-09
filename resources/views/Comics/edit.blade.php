@extends('layouts.app')
@section('content')
    <section>
        <div class="container">
            <h2 class="text-center">Modifica {{ $comic->title }}</h2>
            <form action="{{ route('comics.update', $comic->id) }}" method="POST">
                @csrf
                @method('PUT')
                <label for="title">Titolo</label>
                <input type="text" class="form-control" id="title" name="title", value="{{ $comic->title }}">
                <label for="type">Tipologia</label>
                <input type="text" class="form-control" id="type" name="type" value="{{ $comic->type }}">
                <label for="thumb">Cover</label>
                <input type="text" class="form-control" id="thumb" name="thumb" value="{{ $comic->thumb }}">
                <label for="series">Modifica Serie</label>
                <input type="text" class="form-control" id="series" name="series" value="{{ $comic->series }}">
                <label for="sale_date">Data d'uscita</label>
                <input type="text" class="form-control" id="sale_date" name="sale_date" value="{{ $comic->sale_date }}">
                <label for="price">Prezzo</label>
                <input type="text" class="form-control" id="price" name="price" value="€ {{ $comic->price }} ">
                <label for="description">Descrizione</label>
                <textarea class="form-control" name="description" id="description" rows="5">{{ $comic->description }}</textarea>
                <button class="btn btn-primary" type="submit">Modifica</button>
            </form>
        </div>
    </section>
@endsection

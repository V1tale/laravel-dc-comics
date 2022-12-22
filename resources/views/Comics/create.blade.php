@extends('layouts.app')

@section('content')
    <section>
        <div class="container">
            <h2 class="text-center">Aggiungi un Comics</h2>
            <form action="" method="">
                @csrf

                <label for="title">Titolo</label>
                <input type="text" class="form-control" id="title" name="title", placeholder="Aggiungi Titolo">
                <label for="type">Tipologia</label>
                <input type="text" class="form-control" id="type" name="type">
                <label for="series">Aggiungi Serie</label>
                <input type="text" class="form-control" id="series" name="series">
                <label for="type">Tipologia</label>
                <input type="text" class="form-control" id="type" name="type">
                <label for="sale_date">Data d'uscita</label>
                <input type="text" class="form-control" id="sale_date" name="sale_date">
                <label for="price">Prezzo</label>
                <input type="text" class="form-control" id="price" name="price" value="€ ">
                <label for="description">Descrizione</label>
                <textarea class="form-control" name="description" id="description" rows="5"></textarea>
                <button class="btn btn-success" type="submit">Aggiungi</button>
            </form>
        </div>
    </section>
@endsection

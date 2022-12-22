@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>{{ $comic->title }}</h2>
        <div class="row">
            <div class="col-6">
                <div class="box">
                    <img src="{{ $comic->thumb }}" alt="">
                </div>
            </div>
            <div class="content col-6">
                <h2>Title</h2>
                <h3>{{ $comic->title }}</h3>
                <h2>Type</h2>
                <h3>{{ $comic->type }}</h3>
                <h2>Series</h2>
                <h3>{{ $comic->series }}</h3>
                <h2>Price</h2>
                <h3>{{ $comic->price }}</h3>
                <h2>Sale Date</h2>
                <h3>{{ $comic->sale_date }}</h3>
                <h2>Description</h2>
                <p>{{ $comic->description }}</p>
            </div>
        </div>
    </div>
@endsection

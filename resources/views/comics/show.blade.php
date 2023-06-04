@extends('layout.app')

@section('content')
<div class="bg-dark">
    <div class="container p-5 d-flex justify-content-center">
        <div class="card w-50 p-4 bg-danger-subtle">
            <img src="{{ $comic->image }}" alt="{{ $comic->title }}" class="rounded-5">
            <div class="card-body">
                <h2>{{ $comic->title }}</h2>
                <p>{{ $comic->description }}</p>
                <p>{{ $comic->price }}</p>
                <p>{{ $comic->series }}</p>
                <p>{{ $comic->type }}</p>
                <p>{{ $comic->sale_date }}</p>
                <p class="fw-bold">Artisti: {{ $comic->artists }}</p>
                <p class="fw-bold">Scrittori: {{ $comic->writers }}</p>
            </div>
        </div>
    </div>
</div>
@endsection

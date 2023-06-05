@extends('layout.app')

@section('content')
<h1 class="text-center py-4">Modifica Comic: {{$comic->series}}</h1>
<div class="container bg-success p-5 rounded-5 mb-5">
    <form action="{{ route(('comics.update'), $comic->id) }}" method="POST" class="text-white">
        @csrf
        @method('PUT')
        <div class="mb-3">
          <label for="title" class="form-label">Titolo</label>
          <input type="text" class="form-control" name="title" id="title" value="{{$comic->title}}">
        </div>
        <div class="mb-3">
            <label for="image" class="form-label">Immagine</label>
            <input type="text" class="form-control" name="image" id="image" value="{{$comic->image}}">
        </div>
        <div class="mb-3">
            <label for="price" class="form-label">Prezzo</label>
            <input type="text" class="form-control" name="price" id="price" value="{{$comic->price}}">
        </div>
        <div class="mb-3">
            <label for="series" class="form-label">Serie</label>
            <input type="text" class="form-control" name="series" id="series" value="{{$comic->series}}">
        </div>
        <div class="mb-3">
            <label for="sale_date" class="form-label">Data di vendità</label>
            <input type="date" class="form-control" name="sale_date" id="sale_date" value="{{$comic->sale_date}}">
        </div>
        <div class="mb-3">
            <label for="type" class="form-label">Tipo</label>
            <input type="text" class="form-control" name="type" id="type" value="{{$comic->type}}">
        </div>
        <div class="mb-3">
            <label for="artists" class="form-label">Artisti</label>
            <input type="text" class="form-control" name="artists" id="artists" value="{{$comic->artists}}">
        </div>
        <div class="mb-3">
            <label for="writers" class="form-label">Scrittori</label>
            <input type="text" class="form-control" name="writers" id="writers" value="{{$comic->writers}}">
        </div>
        <div class="form-floating mb-3">
            <textarea class="form-control" placeholder="Leave a comment here" name="description" id="description" style="height: 100px">{{$comic->description}}</textarea>
            <label for="description">Descrizione</label>
        </div>
        <button type="submit" class="btn btn-primary">Invio</button>
    </form>
</div>
@endsection

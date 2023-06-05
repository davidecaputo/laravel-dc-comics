@extends('layout.app')

@section('content')
<h1 class="text-center py-4">Inscerisci un nuovo prodotto</h1>
<div class="container bg-success p-5 rounded-5 mb-5">
    <form action="{{ route('comics.store') }}" method="POST" class="text-white">
        @csrf
        <div class="mb-3">
          <label for="title" class="form-label">Titolo</label>
          <input type="text" class="form-control" name="title" id="title">
        </div>
        <div class="mb-3">
            <label for="image" class="form-label">Immagine</label>
            <input type="text" class="form-control" name="image" id="image">
        </div>
        <div class="mb-3">
            <label for="price" class="form-label">Prezzo</label>
            <input type="text" class="form-control" name="price" id="price">
        </div>
        <div class="mb-3">
            <label for="series" class="form-label">Serie</label>
            <input type="text" class="form-control" name="series" id="series">
        </div>
        <div class="mb-3">
            <label for="sale_date" class="form-label">Data di vendità</label>
            <input type="date" class="form-control" name="sale_date" id="sale_date">
        </div>
        <div class="mb-3">
            <label for="type" class="form-label">Tipo</label>
            <input type="text" class="form-control" name="type" id="type">
        </div>
        <div class="mb-3">
            <label for="artists" class="form-label">Artisti</label>
            <input type="text" class="form-control" name="artists" id="artists">
        </div>
        <div class="mb-3">
            <label for="writers" class="form-label">Scrittori</label>
            <input type="text" class="form-control" name="writers" id="writers">
        </div>
        <div class="form-floating mb-3">
            <textarea class="form-control" placeholder="Leave a comment here" name="description" id="description" style="height: 100px"></textarea>
            <label for="description">Descrizione</label>
        </div>
        <button type="submit" class="btn btn-primary">Invio</button>
        <button type="reset" class="btn btn-primary">Reset</button>
    </form>
</div>
@endsection

@extends('layout.app')

@section('content')
<div class="h-100 bg-danger">
    <h1 class="text-center text-white py-4">Comics</h1>
    <h2 class="text-center pb-5"><a href="{{ route('comics.create') }}" class="text-info-emphasis">Clicca qui per inserire un nuovo Comic</a></h2>
    <div class="content">
        <div class="row mx-5">
            @foreach ($comics as $comic)
            <div class="col-3 mb-5">
                <div class="card h-100 p-4">
                    <img src="{{$comic->image}}" alt="{{$comic->title}}" class="rounded-5">
                    <div class="card-body">
                        <h2>{{$comic->title}}</h2>
                        <p>{{$comic->description}}</p>
                        <p>{{$comic->price}}</p>
                        <p>{{$comic->series}}</p>
                        <p>{{$comic->type}}</p>
                        <p>{{$comic->sale_date}}</p>
                        <p class="fw-bold">Artisti: {{$comic->artists}}</p>
                        <p class="fw-bold">Scrittori: {{$comic->writers}}</p>
                        <a href="{{ route('comics.show', ['comic'=> $comic->id]) }}" class="btn btn-success">Dettagli</a>
                        <a href="{{ route('comics.edit', $comic->id) }}" class="btn btn-warning">Modifica</a>
                        <form action="{{route('comics.destroy', $comic->id)}}" method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger" type="submit">Elimina</button>
                        </form>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
@endsection

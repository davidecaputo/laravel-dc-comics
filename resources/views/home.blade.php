@extends('layout.app')

@section('content')
<div class="vh-100 bg-dark text-white d-flex flex-column justify-content-center">
    <h1 class="text-center pt-5">Homepage</h1>
    <h2 class="text-primary text-center"><a href="{{ route('comics.index') }}">Comics</a></h2>
</div>
@endsection

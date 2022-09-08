@extends('layouts.main')

@section('main-content')
    <div class="cards-container d-flex flex-wrap gap-4 justify-content-center">
        @forelse ($movies as $movie)
            @include('includes.movieCards')
        @empty
        <p>OPS!! NON CI SONO FILM</p>
        @endforelse           
    </div>       
@endsection
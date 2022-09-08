@extends('layouts.main')

@section('main-content')
    <h2 class="text-center pt-5 display-2">TOP 3 FILM</h2>
    <div class="cards-container d-flex flex-wrap gap-4 justify-content-center">
        @forelse ($movies as $movie)
            @include('includes.movieCards')
        @empty
        <p>OPS!! NON CI SONO FILM</p>
        @endforelse           
    </div>       
@endsection
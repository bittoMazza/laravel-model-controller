@extends('layouts.main')

@section('main-content')
    @forelse ($movies as $movie)
     <div class="card-movie py-3">
        <h2>{{ $movie->title }}</h2>
        <h3>{{ $movie->original_title }}</h3>
        <h3>{{ $movie->nationaliyìty }}</h3>
        <h3>{{ $movie->date }}</h3>
        <h3>{{ $movie->vote }}</h3>
     </div>
    @empty
        
    @endforelse
@endsection
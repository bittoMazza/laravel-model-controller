<div class="card-movie py-4">
    <h3 class="text-center">Titolo : <span> {{ $movie->title }} </span> </h3>
    <h4>Titolo originale : {{ $movie->original_title }}</h4>
    <h4>Lingua originale : {{ $movie->nationality }}</h4>
    <h4>Data di uscita : {{ $movie->date }}</h4>
    <h4>Voto : {{ $movie->vote }}</h4>
 </div>
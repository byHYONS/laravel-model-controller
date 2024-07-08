
{{-- @dd($movie) --}}
<div class="card">

    {{-- ? info card --}}
    <div class="hidden">
        <p> 
            <strong>Titolo: </strong> {{ $movie->title }} 
        </p>

        <p>
             <strong>Titolo originale: </strong> {{ $movie->original_title }} 
        </p>

        <p> 
            <strong>Voto: </strong> {{$movie->vote}}
        </p>
        
        <p>
            <strong>Nazionalità: </strong> {{$movie->nationality}}         
        </p>

    </div>


</div>
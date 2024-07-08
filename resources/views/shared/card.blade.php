
{{-- @dd($movie) --}}
<div class="card">

    <!-- info in hover -->
    <div class="hidden">
        <p> 
            <strong>Titolo:</strong> {{ $movie->title }} 
        </p>

        <p>
             <strong>Titolo originale:</strong> {{ $movie->original_title }} 
        </p>

        <!-- voto: stars -->
        <p> 
            <strong>Voto: {{$movie->vote}} </strong>
        </p>
        
        <!-- lingua: bandiera -->
        <p>
            <strong>Nazionalità:</strong> {{$movie->nationality}}         
        </p>

    </div>


</div>
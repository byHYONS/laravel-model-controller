<main>
   
    <div class="container-80">
        {{-- ? info risultati --}}
        <div class="results">
            @if (count($movies))
            
                <p>risultati: 
                    <strong> {{ count($movies) }} </strong>
                </p>

            @endif
        </div>

        <div class="row gap-25 py-50">
            
            {{-- ? ciclo i risultati --}}
            @foreach ($movies as $movie)

                <div class="col">

                    {{-- ? creo anchor per dettaglio movie --}}
                    <a href="{{route('movie', ['id' => $movie->id]) }}">
                        
                        {{-- ? includo il componente card --}}
                        @include('shared.card')

                    </a>

                </div>
                
            @endforeach

        </div>

    </div>
    
</main>
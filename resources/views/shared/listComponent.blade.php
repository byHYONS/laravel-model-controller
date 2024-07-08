<main>
    <!-- per la modale -->
    <div class="ovrlay" :class="{'hidden': overlay}">
    </div>
    <div class="container-80">
        <!-- info risultati -->
        <div v-show="store.results.length" class="results">
            <p>risultati: <strong> {{ count($movies) }} </strong></p>
        </div>

        <div class="row gap-25 py-50">
            
            {{-- ? ciclo i risultati --}}
            @foreach ($movies as $movie)

                <div class="col">
                    {{-- ? includo il componente dard --}}
                    @include('shared.card')
                </div>
                
            @endforeach

        </div>

    </div>
</main>
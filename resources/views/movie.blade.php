@extends('layouts.app')

@section('movie')

<div class="container-80">
    {{-- ? info risultati --}}
    <div class="results">
        

        <div class="card">

            {{-- ? info card --}}
            <div class="hidden">
                <h2>Dettaglio film</h2>
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
                <p>
                    <strong>Data uscita: </strong> {{ \Carbon\Carbon::parse($movie['date'])->format('d/m/Y')}}         
                </p>
        
            </div>
        
        
        </div>
        
        <p class="link"><a href="{{route('home')}}">Torna alla home</a></p>


    </div>

    

</div>


@endsection
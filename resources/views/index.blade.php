{{-- @dd($movies) --}}
{{-- ? estendo il layout all'index --}}
@extends( 'layouts.app' )

{{-- ? creo il componente per stampare i film --}}
@section( 'listsMovie' )

    {{-- ? includo listComponent --}}
    @include('shared.listComponent')

@endsection

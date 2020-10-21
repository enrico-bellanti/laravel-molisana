@extends('layouts.layout-main') 

@section('mainContent')
    {{-- MAIN --}}
    <main>
        <div class="product-wrapper">
            <div class="product-info-container">
                <h1>{{$data["titolo"]}}</h1>
                <img src="{{$data["src-h"]}}" alt="">
                <img src="{{$data["src-p"]}}" alt="">
                <p>{!!$data["descrizione"]!!}</p>
            </div>
        </div>
    </main>
    {{-- /MAIN --}}
@endsection
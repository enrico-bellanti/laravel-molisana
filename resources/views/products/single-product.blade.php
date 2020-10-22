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
            {{-- ARROWS --}}
            @if ($id > 0)
              <a class="arrows arrow-prev" href="{{route("single-product", $id - 1)}}"><i class="fas fa-angle-left"></i></a>
            @endif
            @if ($id < $length -1)
                <a class="arrows arrow-next" href="{{route("single-product", $id + 1)}}"><i class="fas fa-angle-right"></i></a>     
            @endif
            {{-- /ARROWS --}}
        </div>
    </main>
    {{-- /MAIN --}}
@endsection
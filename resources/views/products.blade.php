@extends('layouts.layout-main') 

@section('mainContent')
    {{-- MAIN --}}
    <main>
        <div class="main-wrapper">
            @if (!empty($products))
                @foreach ($products as $key => $type)
                    <h2>{{ucfirst(trans("$key"))}}</h2>
                    <ul class="products">
                        @foreach ($type as $product)
                            <li class="product">
                                <img src="{{$product["src"]}}" alt="pasta-img">
                                <div class="product-layout"></div>
                            <a class="product-name" href="{{route("single-product")}}"><h3>{{$product["titolo"]}}</h3></a>
                                <a class="icon-cutlery" href="#"><img src="{{asset('images/icon.svg')}}" alt=""></a>
                            </li>
                        @endforeach
                    </ul>
                @endforeach
            @endif
        </div>
    </main>
    {{-- /MAIN --}}
@endsection
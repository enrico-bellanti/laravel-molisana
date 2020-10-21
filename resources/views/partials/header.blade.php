{{-- HEADER --}}
<header>
    {{-- header-top --}}
    <div class="header-top">
        <div class="logo-wrapper">
        <img src="{{asset('images/marchio-sito-test.png')}}" alt="">
        </div>
    </div>
    {{-- /header-top --}}
    {{-- header-bottom --}}
    <div class="header-bottom">
        <nav class="header-nav">
            <ul class="header-nav-list">
            <li><a href="{{route("home")}}">Home</a></li>
                <li><a class="active" href="{{route("products")}}">Prodotti</a></li>
                <li><a href="{{route("news")}}">News</a></li>
            </ul>
        </nav>
    </div>
    {{-- /header-bottom --}}
</header>
{{-- /HEADER --}}
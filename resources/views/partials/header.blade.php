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
                <li><a class="{{ Route::currentRouteName() ==  'home' ? 'active' : ''  }}" id="home" href="{{route("home")}}">Home</a></li>
                <li><a class="{{ Route::currentRouteName() ==  'products' ? 'active' : ''  }}" id="products" href="{{route("products")}}">Prodotti</a></li>
                <li><a class="{{ Route::currentRouteName() ==  'news' ? 'active' : ''  }}" id="news" href="{{route("news")}}">News</a></li>
            </ul>
        </nav>
    </div>
    {{-- /header-bottom --}}
</header>
{{-- /HEADER --}}
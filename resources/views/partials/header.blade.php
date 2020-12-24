<header>
    <div class="logo">
        <img src="{{asset('images/logo-la-molisana.png')}}" alt="">
    </div>
    <nav>
        <ul>
            <li>
                <a class="{{Request::route()->getName() == 'home'? 'active' : null}}"href="{{ route('home')}}">Home</a>
            </li>
            <li>
                <a class="{{Request::route()->getName() == 'products'? 'active' : null}}"href="{{route('products')}}">Prodotti</a>
            </li>
            <li>
                <a class="{{Request::route()->getName() == 'news'? 'active' : null}}"href="{{route('news')}}">News</a>
            </li>
        </ul>
    </nav>

</header>

<header>
    <div class="header-top">
        <img src="{{asset('img/molisana-logo.png')}}" alt="La Molisana - logo">
    </div>
    <div class="header-bottom">
        <ul>
            <li>
                <a class="{{ Request::route()->getName() == 'homepage' ? 'active' : ''}}" href="{{ url('/') }}">
                    Home
                </a>
            </li>
            <li>
                <a class="{{ Request::route()->getName() == 'pageProducts' ? 'active' : ''}}" href="{{ route('pageProducts') }}">
                    Prodotti
                </a>
            </li>
            <li>
                <a class="{{ Request::route()->getName() == 'pageNews' ? 'active' : ''}}" href="{{ route('pageNews') }}">
                    News
                </a>
            </li>
        </ul>
    </div>
</header>

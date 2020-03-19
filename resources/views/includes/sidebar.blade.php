<header>
    <div>
        <div class="contenedor">
            <a href="{{ url('/home') }}"><img src="assets/img/logoSmart.png" width="80" height="50"></a>
            <nav>
                <ul>
                    <li><a href="{{ url('/home') }}">Inicio</a></li>
                    <li><a href="{{ url('/contact') }}">Contactanos</a></li>
                    <li><a href="{{ url('/destinations') }}">Destinos</a></li>
                </ul>
            </nav>
        </div>
    </div>

@yield('carousel')

</header>

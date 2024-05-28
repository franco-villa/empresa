<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
        <a class="navbar-brand" href="/" style="color:#777"><span style="font-size:15pt">&#9820;</span> Empresa</a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        @if( true || Auth::check() )
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                <li class="nav-item {{ Request::is('servicios') ? 'active' : ''}}">
                        <a class="nav-link" href="{{url('/servicios')}}">
                            <span class="glyphicon glyphicon-film" aria-hidden="true"></span>
                            Servicios
                        </a>
                    </li>
                    <li class="nav-item {{ Request::is('proyectos') ? 'active' : ''}}">
                        <a class="nav-link" href="{{url('/proyectos')}}">
                            <span class="glyphicon glyphicon-film" aria-hidden="true"></span>
                            Proyectos
                        </a>
                    </li>
                    <li class="nav-item {{ Request::is('clientes') ? 'active' : ''}}">
                        <a class="nav-link" href="{{url('/clientes')}}">
                            <span class="glyphicon glyphicon-film" aria-hidden="true"></span>
                            Clientes
                        </a>
                    </li>
                    <li class="nav-item {{ Request::is('blog') ? 'active' : ''}}">
                        <a class="nav-link" href="{{url('/blog')}}">
                            <span class="glyphicon glyphicon-film" aria-hidden="true"></span>
                            Blog
                        </a>
                    </li>
                    <li class="nav-item {{ Request::is('contacto') ? 'active' : ''}}">
                        <a class="nav-link" href="{{url('/contacto')}}">
                            <span class="glyphicon glyphicon-film" aria-hidden="true"></span>
                            Contacto
                        </a>
                    </li>
                    <!-- <li class="nav-item {{  Request::is('catalog/create') ? 'active' : ''}}">
                        <a class="nav-link" href="{{url('/catalog/create')}}">
                            <span>&#10010</span> Nueva película
                        </a>
                    </li> -->
                </ul>

                <!-- <ul class="navbar-nav navbar-right">
                    <li class="nav-item">
                        <form action="{{ url('/logout') }}" method="POST" style="display:inline">
                            {{ csrf_field() }}
                            <button type="submit" class="btn btn-link nav-link" style="display:inline;cursor:pointer">
                                Cerrar sesión
                            </button>
                        </form>
                    </li>
                </ul> -->
            </div>
        @endif
    </div>
</nav>
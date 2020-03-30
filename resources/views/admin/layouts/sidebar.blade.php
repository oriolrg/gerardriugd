    @section('menu')
        <nav id="sidebar">
            <ul class="list-unstyled components">
                <li class="entrades">
                    <a href="{{asset('/administra/crearProjecte')}}">Nou Projecte</a>
                </li>
                <li class="entrades">
                    <a href="{{asset('/administra/llistatProjectes')}}">Llistar Projectes</a>
                </li>
                <li class="entrades">
                    <a href="{{asset('/administra/nosaltres')}}">Nosaltres</a>
                </li>
            </ul>
        </nav>
    @endsection
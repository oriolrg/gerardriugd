<section class="nav-bar">
    <div class="container">
        <div class="nav-container">
            <div class="brand">
                <a class="navbar-brand" href="#cos"><img class="logo responsiveImage" src="img/LogoGerard.png" alt="{{isset($nosaltres->nom) ? $nosaltres->nom : ''}}"></a>
            </div>
            <nav>
                <div class="nav-mobile"><a id="nav-toggle" href="#!"><span></span></a></div>
                <ul class="nav-list">
                    <li>
                        <a href="{{ URL::asset('') }}" title="Projects"><i class="fas fa-home fa-2x"></i></a>
                    </li>
                    <li>
                        <a href="{{ URL::asset('nosaltres') }}" title="Nosaltres"><i class="fas fa-users fa-2x"></i></a>
                    </li>
                    <li>
                        <a href="mailto:{{isset($nosaltres->email) ? $nosaltres->email : ''}}" title="Correu"><i class="fas fa-at fa-2x"></i></a>
                    </li>
                    <li>
                        <a href="{{isset($nosaltres->instagram) ? $nosaltres->instagram : ''}}" title="Instagram" target="_blank"><i class="fab fa-instagram fa-2x"></i></a>
                    </li>
                    <li>
                        <a href="{{ URL::asset('idioma/ca') }}" title="Català">CA</a>
                    </li>
                    <li>
                        <a href="{{ URL::asset('idioma/es') }}" title="Castellno">ES</a>
                    </li>
                    <li>
                        <a href="{{ URL::asset('idioma/en') }}" title="English">EN</a>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
</section>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script  src="{{ asset('js/funcions.js') }}"></script>
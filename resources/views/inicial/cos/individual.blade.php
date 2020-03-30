@foreach ($projectes as $projecte)
<div class="portfolio-modal modal fade" id="{{$projecte->nomFotos}}" tabindex="-1" role="dialog" aria-hidden="true">
    <section class="nav-bar">
        <div class="container">
            <div class="nav-container">
                <div class="brand">
                    <a class="navbar-brand" href="#page-top"><img class="logo responsiveImage" src="img/LogoGerard.png" alt="{{ $nosaltres->nom }}"></a>
                </div>
            </div>
        </div>
    </section>
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                        <i class="fa fa-times fa-5x" aria-hidden="true"></i>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 mx-auto">
                        <div class="modal-body">
                            <img class="individual img-fluid d-block mx-auto" src="{{ asset('public/profile_images/').'/'.$projecte->imatge }}" alt="{{$projecte->titol}}" title="{{$projecte->titol}}">
                            @foreach ($projecte->paquetImatge as $imatge)
                                <img class="individual img-fluid d-block mx-auto" src="{{ asset('public/profile_images/').'/'.$imatge->imatge }}" alt="{{$projecte->titol}}" title="{{$projecte->titol}}">
                            @endforeach
                        </div>
                    </div>
                    <div class="col-lg-4 mx-auto">
                        <div class="modal-body">
                            <!-- Project Details Go Here -->
                            <h2 class="text-uppercase">{{$projecte->titol}}</h2>
                            <p class="item-intro text-muted">{{$projecte->descripcioCurta}}</p>
                            <ul class="list-inline">
                                <li>{{$projecte->descripcioLlarga}}</li>
                                <li></li>
                            </ul>
                                <a  class="col-3 col-xs-3 col-sm-3 col-md-3 col-lg-3 boto" data-dismiss="modal">
                                    <i class="fas fa-home fa-2x"></i>
                                </a>
                                <a  class="col-3 col-xs-3 col-sm-3 col-md-3 col-lg-3 boto" href="{{$projecte->instagram}}" title="Instagram" target="_blank">
                                    <i class="fab fa-instagram fa-2x"></i>
                                </a>
                                <a class="col-3 col-xs-3 col-sm-3 col-md-3 col-lg-3 boto" href="mailto:gerard@gerardriudesign.com" title="Correu">
                                    <i class="fas fa-at fa-2x"></i>
                                </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endforeach
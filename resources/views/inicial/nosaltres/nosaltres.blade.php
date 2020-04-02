<!-- Services -->
<section id="cos">
    <div class="container">
        <div class="row">
            <img class="bannerNosaltres" src="{{ asset('public/profile_images/').'/'.$nosaltres->imatge }}" style="width: 100%;"/>
            <div class="col-lg-12 mx-auto">
                <div class="modal-body">
                    <h1 class="text-uppercase text-muted">{{isset($nosaltres->titol) ? $nosaltres->titol : ''}}</h1>
                    <h2 class="item-intro text-muted">{!!isset($nosaltres->textCurt) ? $nosaltres->textCurt : ''!!}</h2>
                    <h4 class="item-intro text-white">{!!isset($nosaltres->textLlarg) ? $nosaltres->textLlarg : ''!!}</h4>
                </div>
            </div>
        </div>
    </div>
</section>

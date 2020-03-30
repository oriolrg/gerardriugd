<!-- Services -->
<section id="cos">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 mx-auto">
                <div class="modal-body">
                    <p class="item-intro text-white">{{isset($nosaltres->nom) ? $nosaltres->nom : ''}}</p>
                    <p class="item-intro text-white">{{isset($nosaltres->descripcioCurta) ? $nosaltres->descripcioCurta : ''}}</p>
                    <p class="item-intro text-white">{{isset($nosaltres->descripcioLlarga) ? $nosaltres->descripcioLlarga : ''}}</p>
                    <p class="item-intro text-white">{{isset($nosaltres->telefon) ? $nosaltres->telefon : ''}}</p>
                    <p class="item-intro text-white">{{isset($nosaltres->adressa) ? $nosaltres->adressa : ''}}</p>
                    <p class="item-intro text-white">{{isset($nosaltres->email) ? $nosaltres->email : ''}}</p>
                </div>
            </div>
        </div>
    </div>
</section>

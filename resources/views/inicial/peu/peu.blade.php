<!-- Footer -->
<div style="clear: both"></div>
<footer class="peu">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <a href="https://tecnolord.cat"><span>Oriol Riu </span><span class="copyright">Copyright &copy; <span>TecnoLord</span></span></a>
            </div>
            <div class="col-md-4">
                <ul class="list-inline quicklinks">
                    <li class="list-inline-item">
                        <span>{{isset($nosaltres->adressa) ? $nosaltres->adressa : ''}}</span>
                    </li>
                </ul>
            </div>
            <div class="col-md-4">
                <ul class="list-inline quicklinks">
                    <li class="list-inline-item">
                        <span>{{isset($nosaltres->nom) ? $nosaltres->nom : ''}}</span>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</footer>
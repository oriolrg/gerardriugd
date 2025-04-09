  
<h2>Noslatres</h2>
  <table>
        <tbody>
            <tr>
                <label>
                <td>
                    <div class="multillenguatge">
                        <label for="description">Titol Nosaltres Català</label>
                        <textarea type="text" name="titol" id="titol" class="form-control" placeholder="Descripció..." rows="6" value="@isset($editdataTranslation) {{$editdataTranslation['titol']['ca']}} @endisset" >@isset($editdataTranslation) {{$editdataTranslation['titol']['ca']}} @endisset</textarea>
                        <label for="description">Text curt Nosaltres Català</label>
                        <textarea type="text" name="textCurta" id="textCurta" class="form-control" placeholder="Descripció..." rows="6" value="@isset($editdataTranslation) {{$editdataTranslation['textCurt']['ca']}} @endisset" >@isset($editdataTranslation) {{$editdataTranslation['textCurt']['ca']}} @endisset</textarea>
                        <label for="description">Text llarg Nosaltres Català</label>
                        <textarea type="text" name="textLlarga" id="textLlarga" class="form-control" placeholder="Descripció..." rows="6" >@isset($editdataTranslation) {{$editdataTranslation['textLlarg']['ca']}} @endisset</textarea>
                        <label for="description">Titol Nosaltres Castellà</label>
                        <textarea type="text" name="titolES" id="titolES" class="form-control" placeholder="Descripció..." rows="6" value="@isset($editdataTranslation) {{$editdataTranslation['titol']['es']}} @endisset" >@isset($editdataTranslation) {{$editdataTranslation['titol']['es']}} @endisset</textarea>
                        <label for="description">Text curt Nosaltres Castellà</label>
                        <textarea type="text" name="textCurtaES" id="textCurtaES" class="form-control" placeholder="Descripció..." rows="6" value="@isset($editdataTranslation) {{$editdataTranslation['textCurt']['es']}} @endisset" >@isset($editdataTranslation) {{$editdataTranslation['textCurt']['es']}} @endisset</textarea>
                        <label for="description">Text llarg Nosaltres Castellà</label>
                        <textarea type="text" name="textLlargaES" id="textLlargaES" class="form-control" placeholder="Descripció..." rows="6" >@isset($editdataTranslation) {{$editdataTranslation['textLlarg']['es']}} @endisset</textarea>
                        <label for="description">Titol Nosaltres Anglès</label>
                        <textarea type="text" name="titolEN" id="titolEN" class="form-control" placeholder="Descripció..." rows="6" value="@isset($editdataTranslation) {{$editdataTranslation['titol']['en']}} @endisset" >@isset($editdataTranslation) {{$editdataTranslation['titol']['en']}} @endisset</textarea>
                        <label for="description">Text curt Nosaltres Anglès</label>
                        <textarea type="text" name="textCurtaEN" id="textCurtaEN" class="form-control" placeholder="Descripció..." rows="6" value="@isset($editdataTranslation) {{$editdataTranslation['textCurt']['en']}} @endisset" >@isset($editdataTranslation) {{$editdataTranslation['textCurt']['en']}} @endisset</textarea>
                        <label for="description">Text llarg Nosaltres Anglès</label>
                        <textarea type="text" name="textLlargaEN" id="textLlargaEN" class="form-control" placeholder="Descripció..." rows="6" >@isset($editdataTranslation) {{$editdataTranslation['textLlarg']['en']}} @endisset</textarea>
                    </div>
                    <div id="uploadimage1">
                        <div id="selectImage">
                            <div class="main" class="col-md-12 col-md-offset">
                                
                                <div class="col-md  justify-content-center">
                                    <label>Selecciona la imatge</label><br/>
                                    <div id="message1"></div>
                                    <div id="selectImage">
                                        <input type="file" name="fileNosaltres" id="profileImagePortada" value="{{isset($editdata) ? $editdata->url_imatge : ''}}"/>
                                    </div>
                                    <hr id="line">
                                    <div id="image_previewPortada" ></div>
                                </div>
                                <label>
                                    <strong>Recomanacions: </strong>
                                    <ul>
                                        <li class="seo">Per tal de millorar el posicionament SEO, </br>puja una imatge amb nom relacionat amb la seva descripció (Ex. mussol.jpeg)</li>
                                        <li>Màxim 500 kb</li>
                                    </ul>
                                </label>
                            </div>
                        </div>
                    </div>
            </tr>
        </tbody>
    </table>
    


<h2>SEO</h2> Informació per a posicionament de google
    <table>
        <tbody>
            <tr>
                <label>
                <td>
                    <label for="title">Titol de la Web </label>
                    <input type="text" name="nom" id="nom" class="form-control" placeholder="Nom..." value="{{isset($editdata) ? $editdata->nom : ''}}"  maxlength="30" >
                    <div class="multillenguatge">
                        <label for="description">Descripcio curta Català</label>
                        <textarea type="text" name="descripcioCurta" id="descripcioCurta" class="form-control" placeholder="Descripció..." rows="6" value="@isset($editdataTranslation) {{$editdataTranslation['descripcioCurta']['ca']}} @endisset" >@isset($editdataTranslation) {{$editdataTranslation['descripcioCurta']['ca']}} @endisset</textarea>
                        <label for="description">Descripcio llarga Català</label>
                        <textarea type="text" name="descripcioLlarga" id="descripcioLlarga" class="form-control" placeholder="Descripció..." rows="6" >@isset($editdataTranslation) {{$editdataTranslation['descripcioLlarga']['ca']}} @endisset</textarea>
                        <label for="description">Descripcio curta Castellà</label>
                        <textarea type="text" name="descripcioCurtaES" id="descripcioCurtaES" class="form-control" placeholder="Descripció..." rows="6" value="@isset($editdataTranslation) {{$editdataTranslation['descripcioCurta']['es']}} @endisset" >@isset($editdataTranslation) {{$editdataTranslation['descripcioCurta']['es']}} @endisset</textarea>
                        <label for="description">Descripcio llarga Castellà</label>
                        <textarea type="text" name="descripcioLlargaES" id="descripcioLlargaES" class="form-control" placeholder="Descripció..." rows="6" >@isset($editdataTranslation) {{$editdataTranslation['descripcioLlarga']['es']}} @endisset</textarea>
                        <label for="description">Descripcio curta Anglès</label>
                        <textarea type="text" name="descripcioCurtaEN" id="descripcioCurtaEN" class="form-control" placeholder="Descripció..." rows="6" value="@isset($editdataTranslation) {{$editdataTranslation['descripcioCurta']['en']}} @endisset" >@isset($editdataTranslation) {{$editdataTranslation['descripcioCurta']['en']}} @endisset</textarea>
                        <label for="description">Descripcio llarga Anglès</label>
                        <textarea type="text" name="descripcioLlargaEN" id="descripcioLlargaEN" class="form-control" placeholder="Descripció..." rows="6" >@isset($editdataTranslation) {{$editdataTranslation['descripcioLlarga']['en']}} @endisset</textarea>
                    </div>
                    <label for="title">Email</label>
                    <input type="mail" name="email" id="email" class="form-control" placeholder="Email..." value="{{isset($editdata) ? $editdata->email : ''}}"  maxlength="30" >
                    <label for="title">Telèfon</label>
                    <input type="phone" name="telefon" id="telefon" class="form-control" placeholder="Telèfon..." value="{{isset($editdata) ? $editdata->telefon : ''}}"  maxlength="30" >
                    <label for="title">Adressa</label>
                    <input type="text" name="adressa" id="adressa" class="form-control" placeholder="Adressa..." value="{{isset($editdata) ? $editdata->adressa : ''}}"  maxlength="60" >
                    <label for="description">Paraules clau descriptives</label>
                    <textarea type="text" name="paraulesClau" id="paraulesClau" class="form-control" placeholder="Disseny, Design, Barcelona, BCN, Vins, ..." rows="6" value="@isset($editdata) {{$editdata->paraulesClau}} @endisset" >@isset($editdata) {{$editdata->paraulesClau}} @endisset</textarea>

                </td>
            </tr>
        </tbody>
    </table>
    <label for="description">Enllaç a Instagram</label>
    <input type="text" name="instagram" id="instagram" class="form-control" placeholder="Enllaç Instagram..." rows="6" value="@isset($editdata) {{$editdata->instagram}} @endisset" >

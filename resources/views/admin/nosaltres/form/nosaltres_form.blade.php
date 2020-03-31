  
<h2>Noslatres</h2>
  <table>
        <tbody>
            <tr>
                <label>
                <td>
                    <label for="title">Nom</label>
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


<h2>SEO</h2>
    <table>
        <tbody>
            <tr>
                <label>
                <td>
                    <label for="title">Nom</label>
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

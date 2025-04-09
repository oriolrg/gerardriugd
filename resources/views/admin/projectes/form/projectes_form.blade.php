    <table>
        <thead>
            <tr>
                <th>Català</th>
                <th>Castellà</th>
                <th>Anglès</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <label for="title">Titol</label>
                <input type="text" name="nom" id="nom" class="form-control" placeholder="Nom..." value="{{isset($editdata) ? $editdata->titol : ''}}"  maxlength="30" required>
                <td>
                    <label for="description">Descripcio curta</label>
                    <textarea type="text" name="descripcioCurta" id="descripcioCurta" class="form-control" placeholder="Descripció..." rows="6" required>@isset($editdataTranslation['descripcioCurta']['ca']) {{$editdataTranslation['descripcioCurta']['ca']}} @endisset</textarea>
                    <label for="description">Descripcio llarga</label>
                    <textarea type="text" name="descripcioLlarga" id="descripcioLlarga" class="form-control" placeholder="Descripció..." rows="6" required>@isset($editdataTranslation['descripcioLlarga']['ca']) {{$editdataTranslation['descripcioLlarga']['ca']}} @endisset</textarea>
                </td>
                <td>
                    <label for="description">Descripcio</label>
                    <textarea type="text" name="descripcioCurtaES" id="descripcioCurtaES" class="form-control" placeholder="Descripció..." rows="6" >@isset($editdataTranslation['descripcioCurta']['es']) {{$editdataTranslation['descripcioCurta']['es']}} @endisset</textarea>
                    <label for="description">Descripcio llarga</label>
                    <textarea type="text" name="descripcioLargaES" id="descripcioLargaES" class="form-control" placeholder="Descripció..." rows="6" >@isset($editdataTranslation['descripcioLlarga']['es']) {{$editdataTranslation['descripcioLlarga']['es']}} @endisset</textarea>
                </td>
                <td>
                    <label for="description">Descripcio</label>
                    <textarea type="text" name="descripcioCurtaEN" id="descripcioCurtaEN" class="form-control" placeholder="Descripció..." rows="6" >@isset($editdataTranslation['descripcioCurta']['en']) {{$editdataTranslation['descripcioCurta']['en']}} @endisset</textarea>
                    <label for="description">Descripcio llarga</label>
                    <textarea type="text" name="descripcioLargaEN" id="descripcioLargaEN" class="form-control" placeholder="Descripció..." rows="6" >@isset($editdataTranslation['descripcioLlarga']['en']) {{$editdataTranslation['descripcioLlarga']['en']}} @endisset</textarea>
                </td>
            </tr>
        </tbody>
    </table>
    <label for="description">Data</label>
    <input type="date" name="data" id="data" class="form-control" placeholder="Data..." rows="6" value="@isset($editdata){{ date('Y-m-d', strtotime($editdata->data)) }}@endisset" required>
    <label for="description">Enllaç a Instagram</label>
    <input type="text" name="instagram" id="instagram" class="form-control" placeholder="Enllaç Instagram..." rows="6" value="@isset($editdata) {{$editdata->instagram}} @endisset" required>

@if(!@isset($editdata))
<label for="title">Introdueix un nom identificatiu per les imatges</label>
<input type="text" name="nomFotos" id="frase" class="form-control" placeholder="NomImatges" value="{{isset($editdata) ? $editdata->nomFotos : ''}}"  maxlength="30" pattern="[A-Za-z0-9]{1,20}" required="required">
<hr id="line">
    <legend>Imatge Portada</legend>
    <legend>Quantes files o columnes ocupa</legend>
    <select id="filescolumnes" name="filescolumnes">
        <option value="colum" @isset($editdata) 
            @if($editdata->filescolumnes === 'colum') selected 
            @endif @endisset>1 fila 1 columna</option>
        <option value="colum2" @isset($editdata) 
            @if($editdata->filescolumnes == 'colum2') selected 
            @endif @endisset>1 fila 2 columnes</option>
        <option value="colum3" @isset($editdata) 
            @if($editdata->filescolumnes == 'colum3') selected 
            @endif @endisset>1 fila 3 columnes</option>
        <option value="fila2" @isset($editdata) 
            @if($editdata->filescolumnes == 'fila2') selected
            @endif @endisset>2 files 1 columnes</option>
        <option value="fila3" @isset($editdata) 
            @if($editdata->filescolumnes == 'fila3') selected 
            @endif @endisset>3 files 1 columna</option>
        <option value="colum3fila2" @isset($editdata) 
            @if($editdata->filescolumnes == 'colum3fila2') selected 
            @endif @endisset>2 files 3 columnes</option>
        <option value="colum2fila3" @isset($editdata) 
            @if($editdata->filescolumnes == 'colum2fila3') selected 
            @endif @endisset>3 files 2 columnes</option>
    </select>
    @include('admin.uploadimage.uploadimagePortada')
    <legend>Imatges Paquet</legend>
    @include('admin.uploadimage.uploadimagePaquet')
@endif

@isset($editdata)
@include('admin.uploadimage.changeimage')
@endisset
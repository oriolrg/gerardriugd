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
                <label>
                <td>
                    <label for="title">Nom</label>
                    <input type="text" name="nom" id="nom" class="form-control" placeholder="Nom..." value="{{isset($editdata) ? $editdata->nom : ''}}"  maxlength="30" >
                    <label for="description">Descripcio curta</label>
                    <textarea type="text" name="descripcioCurta" id="descripcioCurta" class="form-control" placeholder="Descripció..." rows="6" value="@isset($editdata) {{$editdata->descripcioCurta}} @endisset" >
                    <label for="description">Descripcio llarga</label>
                    <textarea type="text" name="descripcioLlarga" id="descripcioLlarga" class="form-control" placeholder="Descripció..." rows="6" >@isset($editdata) {{$editdata->descripcioLlarga}} @endisset</textarea>
                    <label for="title">Email</label>
                    <input type="mail" name="email" id="email" class="form-control" placeholder="Email..." value="{{isset($editdata) ? $editdata->email : ''}}"  maxlength="30" >
                    <label for="title">Telèfon</label>
                    <input type="phone" name="telefon" id="telefon" class="form-control" placeholder="Telèfon..." value="{{isset($editdata) ? $editdata->telefon : ''}}"  maxlength="30" >
                    <label for="title">Adressa</label>
                    <input type="text" name="adressa" id="adressa" class="form-control" placeholder="Adressa..." value="{{isset($editdata) ? $editdata->adressa : ''}}"  maxlength="30" >
                    <label for="description">Paraules clau descriptives</label>
                    <textarea type="text" name="paraulesClau" id="paraulesClau" class="form-control" placeholder="Disseny, Design, Barcelona, BCN, Vins, ..." rows="6" value="@isset($editdata) {{$editdata->paraulesClau}} @endisset" >

                </td>
            </tr>
        </tbody>
    </table>
    <label for="description">Enllaç a Instagram</label>
    <input type="text" name="instagram" id="instagram" class="form-control" placeholder="Enllaç Instagram..." rows="6" value="@isset($editdata) {{$editdata->instagram}} @endisset" >

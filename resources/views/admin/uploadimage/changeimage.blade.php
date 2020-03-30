<div id="uploadimage1">
	<div id="selectImage">
		<div class="main" class="col-md-12 col-md-offset">
			<div class="col-md  justify-content-center">
				<legend>Modifica les imatges</legend>
				<div id="message1"></div>
				<hr id="line">
				<legend>Imatge Portada</legend>
				<div id="image_previewPortada" >
					<div id="imatgePortada">
						<img id="profileImage" class="thumb {{$editdata->imatge}}" src="{{ URL::asset('public/') }}/profile_images/{{$editdata->imatge}}">
						<input type="button" class="btn btn-small btn-danger eliminar" data="{{$editdata->imatge}}" value="Elimina aquesta imatge"/>
					</div>
					<div id="inputFilePortada">
					</div>
				</div>
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
				<hr id="line">
				<label>Imatges Paquet</label><br/>
				@foreach ($editdata->paquetImatge as $paquetImatge)
					<div id="image_previewPortada" >
						<div id="imatgePaquet{{$paquetImatge->id}}">
							<div id="{{$paquetImatge->imatge}}">
								<img id="profileImage" class="thumb {{$paquetImatge->imatge}}" src="{{ URL::asset('public/') }}/profile_images/{{$paquetImatge->imatge}}"  name="{{$paquetImatge->id}}">
								<input type="button" class="btn btn-small btn-danger eliminarImatgePaquet" data="{{$paquetImatge->imatge}}" name="{{$paquetImatge->id}}" value="Elimina aquesta imatge"/>
							</div>
						</div>
						<div id="inputFile">
						</div>
					</div>
				@endforeach
			</div>
		</div>
	</div>
	@include('admin.uploadimage.uploadimagePaquet')
</div>
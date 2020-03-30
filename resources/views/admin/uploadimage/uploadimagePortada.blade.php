<div id="uploadimage1">
	<div id="selectImage">
	    <div class="main" class="col-md-12 col-md-offset">
			
	        <div class="col-md  justify-content-center">
				<label>Selecciona la imatge</label><br/>
			    <div id="message1"></div>
			    <div id="selectImage">
			        <input type="file" name="file1" id="profileImagePortada" value="{{isset($editdata) ? $editdata->url_imatge : ''}}"/>
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
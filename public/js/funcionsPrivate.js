
$(document).ready(function(){
    $('#profileImagePortada').on('change', function(){ //on file input change
       if (window.File && window.FileReader && window.FileList && window.Blob) //check File API supported browser
       {
   
           var data = $(this)[0].files; //this file data
            
           $.each(data, function(index, file){ //loop though each file
               if(/(\.|\/)(gif|jpe?g|png)$/i.test(file.type)){ //check supported file type
                   var fRead = new FileReader(); //new filereader
                   fRead.onload = (function(file){ //trigger function on successful read
                   return function(e) {
                       var img = $('<img/>').addClass('thumb').attr('src', e.target.result); //create image element 
                       $('#image_previewPortada').append(img); //append image to output element
                   };
                   })(file);
                   fRead.readAsDataURL(file); //URL representing the file's data.
               }
           });
            
       }else{
           alert("Your browser doesn't support File API!"); //if File API is absent
       }
    });
   });
$(document).ready(function(){
 $('#profileImage').on('change', function(){ //on file input change
    if (window.File && window.FileReader && window.FileList && window.Blob) //check File API supported browser
    {

        var data = $(this)[0].files; //this file data
         
        $.each(data, function(index, file){ //loop though each file
            if(/(\.|\/)(gif|jpe?g|png)$/i.test(file.type)){ //check supported file type
                var fRead = new FileReader(); //new filereader
                fRead.onload = (function(file){ //trigger function on successful read
                return function(e) {
                    var img = $('<img/>').addClass('thumb').attr('src', e.target.result); //create image element
                    $('#preview_img').append(img); //append image to output element
                    var container = document.getElementById("nouInput");
                    var input = document.createElement("input");
                    input.type = "file";
                    input.name = "filemultiple";
                    input.id = "profileImage";
                    container.appendChild(input);
                };
                })(file);
                fRead.readAsDataURL(file); //URL representing the file's data.
            }
        });
         
    }else{
        alert("Your browser doesn't support File API!"); //if File API is absent
    }
 });
});
$(document).ready(function() {
    $(".btn-success").click(function(){ 
        var html = $(".clone").html();
        $(".increment").after(html);
    });
    $("body").on("click",".btn-danger",function(){ 
        $(this).parents(".control-group").remove();
    });
  });

  //borrar imatges
$(document).ready(function(){
    $(".eliminar").click(function(){
        var nom = $(this).attr("data");
        var nom = $(this).attr("data");
        $('#imatgePortada').hide();
        var container = document.getElementById("inputFilePortada");
        var input = document.createElement("input");
        input.type = "file";
        input.name = "selectImagePortada";
        input.id = "profileImagePortada";
        container.append(input);
        var input2 = document.createElement("input");
        input2.type = "text";
        input2.name = "nomImatgePortada";
        input2.value = nom;
        input2.setAttribute("type", "hidden");
        container.append(input2);
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $.ajax({
            type: "DELETE",
            url: "/gerardDesign/administra/projecte/imatge/"+nom+"/eliminaimatge",
            data: input2.value,
            success: function (data) {
                console.log(data);
            },
            error: function (data) {
                console.log(data.msg);
            },
            datatype: 'application/json',
            //dataType: dataType
        });
    });
    $(".eliminarImatgePaquet").click(function(){
        var nom = $(this).attr("data");
        var id = $(this).attr("name");
        $('#imatgePaquet'+id).hide();
        $('#selectImagePaquet'+id).show();
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $.ajax({
            type: "DELETE",
            url: "/gerardDesign/administra/projecte/imatge/"+nom+"/eliminaimatge",
            data: nom,
            success: function (data) {
                console.log(data);
            },
            error: function (xhr, status, error) {
                var err = eval("(" + xhr.responseText + ")");
                console.log(err.Message);
                console.log(xhr.responseText);
            },
            datatype: 'application/json',
            //dataType: dataType
        });
    });
});
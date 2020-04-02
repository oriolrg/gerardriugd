(function($) { 
    $(function() { 
      $('nav ul li a:not(:only-child)').click(function(e) {
        $(this).siblings('.nav-dropdown').toggle();
        $('.dropdown').not($(this).siblings()).hide();
        e.stopPropagation();
      });
      $('html').click(function() {
        $('.nav-dropdown').hide();
      });
      $('#nav-toggle').click(function() {
        $('nav ul').slideToggle();
      });
      $('#nav-toggle').on('click', function() {
        this.classList.toggle('active');
      });
    }); 
  })(jQuery);

  //carrega dinamica imatges pakets
  $(document).ready(function(){
    $(".projecteportada").click(function(){
      var projecteId = $( this ). attr("id");
      var imatge ='';
      $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
      });
      $.ajax({
        type: "get",
        url: "pakage/"+projecteId,
        data: projecteId,
        success: function (result) {
          jQuery.each(result, function(index, imatgePaket) {
            imatge += '<img class="individual img-fluid d-block mx-auto" src="public/profile_images/'+imatgePaket.imatge+'" alt="2" title="2">';
          });
          console.log(imatge);
          $('#paket'+projecteId).append(imatge)
        },
        error: function (data) {
            console.log(data.msg);
        },
        datatype: 'application/json',
        //dataType: dataType
      }); 
    });
  });
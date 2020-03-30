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

  $(document).ready(function(){
    $(".portfolio-link").click(function(){
      $("#portfolioModal1").modal('show');
    });
  });


  // Este es el método que vamos a llamar
// cada vez que se detecte una intersección
function onScrollEvent(entries, observer) {
  entries.forEach(function(entry) {
      if (entry.isIntersecting) {
          var attributes = entry.target.attributes;
          var src = attributes['data-src'].textContent;
          entry.target.src = src;
          entry.target.classList.add('visible');
      }
  });
}

// Utilizamos como objetivos todos los
// elementos que tengan la clase lazyLoad,
// que vimos en el HTML de ejemplo.
var targets = document.querySelectorAll('.lazyLoad');

// Instanciamos un nuevo observador.
var observer = new IntersectionObserver(onScrollEvent);

// Y se lo aplicamos a cada una de las
// imágenes.
targets.forEach(function(entry) {
  observer.observe(entry);
});


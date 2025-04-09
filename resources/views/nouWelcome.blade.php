<!-- nouWelcome.blade.php-->
<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="Estudio de diseño gráfico en Barcelona especializado en Branding y Packaging. Creación de identidad visual para productos y marcas. +20 años de experiencia."/>
        <meta name="keywords" content="diseño gráfico Barcelona, estudio de branding, diseño de packaging, diseño de etiquetas, branding para vino, Gerard Riu, diseñador gráfico, identidad visual, packaging creativo, agencia de diseño gráfico"/>
        <meta name="author" content="Oriol Riu Gispert, Tecnolord i Gerard Riu Gisperd" />
        <meta name="copyright" content="Oriol Riu Gispert, Tecnolord" />
        <meta property="og:title" content="Gerard Riu Design | Branding & Packaging Barcelona">
        <meta property="og:image" content="https://gerardriugd.com/img/LogoGRD.png?">
        <meta property="og:description" content="Estudio especializado en diseño de packaging y branding para vinos y productos gourmet">
        <meta name="google-site-verification" content="OTUIb95yZIPKrmK3COFog64n6E8z7ZNHhpTTU40UYt0" />
        <meta property="og:url" content="https://gerardriugd.com/">
        <meta property="og:type" content="website">.
        <title>Gerard Riu Design | Branding & Packaging</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,600">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:300">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.6/css/all.css">
        <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
        <link href="{{ asset('css/style.css') }}?v={{ time() }}" rel="stylesheet">
        <!--<link href="{{ asset('css/principal.css') }}" rel="stylesheet">
        <link href="{{ asset('css/navigataur.css') }}" rel="stylesheet">-->

        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
        <!--<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>-->
	
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
                


        <!-- Favicon and touch icons -->
        <link rel="shortcut icon" href="{{ asset('ico/Logo_GRD.png?') }}">
        <style>
        
        
    </style>
    </head>
    <body  style="background-color: white;" >
        
 
    @include('inicial.cos.' . $section)
    <!-- Metadatos estructurados para SEO -->
    <script type="application/ld+json">
    {
    "@context": "https://schema.org",
    "@type": "ProfessionalService",
    "name": "Gerard Riu Design",
    "image": "https://gerardriugd.com/img/LogoGRD.png",
    "url": "https://gerardriugd.com",
    "telephone": "+34 670 29 65 15",
    "address": {
        "@type": "PostalAddress",
        "streetAddress": "Carrer de Legalitat, 95",
        "addressLocality": "Barcelona",
        "postalCode": "08024",
        "addressCountry": "ES"
    },
    "hasOfferCatalog": {
        "@type": "OfferCatalog",
        "itemListElement": [
        {
            "@type": "Offer",
            "name": "Diseño de Packaging Premium",
            "category": "Servicios para marcas gourmet"
        }
        ]
    },
    "description": "Estudio de diseño gráfico en Barcelona especializado en Branding y Packaging. Identidad visual para productos gourmet.",
    "sameAs": [
        "https://www.instagram.com/gerard_riu_graphic_design/",
        "https://es.linkedin.com/company/gerardriudesign"
    ]
    }
    </script>
    </script>
    <script src="{{ asset('js/main.js') }}?v=<?php echo time(); ?>"></script>
    </body>
</html>

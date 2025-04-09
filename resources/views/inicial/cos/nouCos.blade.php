<!-- nouCos.php -->
<main style="background-color: white;" >
    <div class="slideshow-container" id="inicio">
        <!-- Slide 1 -->
        <div class="slide active" style="background-color: white;" >
            <div class="slide-content">
                <div class="logo"><h1 style="color:white">Gerard Riu Design</h1>
                    <h1 style="color:white"> BRANDING & PACKAGING</h1>
                    <a href="/"><img src="/img/LogoGRD.png?"  aria-label="Logo de Gerard Riu Design"  alt="Logo de Gerard Riu Design"></img></a>
                </div>
                <h2 style="font-weight: 800;
                font-size: 8vw;">Gerard Riu Design</h2>
                <p style="font-weight: 200;
                font-size: 3vw;  line-height: 0.6;">Estrategia, creatividad y diseño para marcas y productos.</p>
                <p style="font-weight: 200;
                font-size: 3vw;  line-height: 0.6;">Diseño gráfico especializado en Branding & Packaging.</p>
            </div>
        </div>

        <!-- Slide 2 -->
        <div class="slide" style="background-image: url('{{ $slides[2] ?? '/img/FEmporda3.jpg' }}');" aria-label="Diseño de packaging - Ejemplo de trabajo de Gerard Riu Design">
            <div class="slide-content"style="opacity:0">
            </div>
        </div>

        <!-- Slide 3 -->
        <div class="slide" style="background-image: url('{{ $slides[3] ?? '/img/FEmporda3.jpg' }}');"  aria-label="Diseño de packaging - Ejemplo de trabajo de Gerard Riu Design">                     
            <div class="slide-content"style="opacity:0">
            </div>
        </div>

        <!-- Slide 4 -->
        <div class="slide" style="background-image: url('{{ $slides[4] ?? '/img/FEmporda3.jpg' }}');"  aria-label="Diseño de packaging - Ejemplo de trabajo de Gerard Riu Design">
            <div class="slide-content"style="opacity:0">
            </div>
        </div>

        <!-- Slide 5 -->
        <div class="slide" style="background-image: url('{{ $slides[5] ?? '/img/FEmporda3.jpg' }}');"  aria-label="Diseño de packaging - Ejemplo de trabajo de Gerard Riu Design">
            <div class="slide-content"style="opacity:0">
            </div>
        </div>
        <!-- Slide 6 -->
        <div class="slide" style="background-color: white;">
            <div class="slide-content" id="contacto">
                <div class="logo"><h1 style="color:white; position:absolute;opacity: 0;">Gerard Riu Design</h1>
                    <h1 style="color:white; position:absolute;opacity: 0;"> BRANDING & PACKAGING</h1>
                    <h2>
                        <a href="/"><img   alt="Gerard Riu Design - Logo del estudio de branding y packaging en Barcelona" src="/img/LogoGRD.png?"  style="width: 60%; max-width: 18rem;"></img></a>
                    </h2>
                </div>
                <p style="font-weight: bold;
                font-size: 3rem;">Podríamos seguir con más diapositivas. ¿Pero hasta cuántas?</p>
                <p style="font-weight: 200;
                font-size: 3rem;">Llevo más de 20 años trabajando para diferentes marcas de diferentes sectores. Y esto da para muchas diapositivas.</p>
                <p style="font-weight: 200;
                font-size: 3rem;">Si lo que te interesa es ver más proyectos, más diapositivas. Lo mejor es que te pases por 
                <a href="https://www.instagram.com/gerard_riu_graphic_design/" 
                style="color:red; text-decoration: none;" 
                target="_blank" 
                rel="noopener noreferrer">
                Instagram
                </a> 
                o  
                <a href="https://es.linkedin.com/in/gerard-riu-gispert-681649b1" 
                style="color:red; text-decoration: none;" 
                target="_blank" 
                rel="noopener noreferrer">
                LinkedIn
                </a>.
                Allí podrás ver y cotillear tooodo lo que quieras. </p>
                <p style="font-weight: 200; font-size: 3rem;">
                ¡Ahora! si lo que te interesa es saber en qué y como ayudamos a todas esas marcas.
                <a style="color:red;  text-decoration: none;" href="mailto:gerard@gerardriugd.com">
                O mejor aún, en como puedo ayudarte a ti o a tu marca, entonces estás en el sitio correcto! Solo tienes que contactarme.
                </a> 
                Yo haré el resto. Sin coste alguno.... Ni spams de por medio.
                </p>
                <p style="font-weight: 200; font-size: 3rem;">Lo prometo.</p>
                <p style="font-weight: 200; font-size: 3rem;">
                ¿Quieres saber más sobre mi? 
                <a  href="/brandeador" style="color:red; text-decoration: none;">
                    Aquí te cuento más.
                </a>
                Pero creo que no hay nada como conocerse personalmente y charlar 20 minutitos.
                </p>
            </div>
        </div>
    </div>

    <div class="dots-container">
        <span class="dot active" onclick="currentSlide(0)"></span>
        <span class="dot" onclick="currentSlide(1)"></span>
        <span class="dot" onclick="currentSlide(2)"></span>
        <span class="dot" onclick="currentSlide(3)"></span>
        <span class="dot" onclick="currentSlide(4)"></span>
        <span class="dot" onclick="currentSlide(5)"></span>
    </div>
</main>
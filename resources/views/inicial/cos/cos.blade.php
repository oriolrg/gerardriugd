<!-- Services -->
<section id="cos">
    <div class="container">
        <div class="wrapper">
            @foreach ($projectes as $projecte)
                <div  id="{{$projecte->id}}" class="{{$projecte->filescolumnes}}"><a class="projecteportada" id="{{$projecte->id}}" data-toggle="modal" data-target="#{{$projecte->nomFotos}}"><img class="imageGrid responsiveImage" src="{{ asset('public/profile_images/').'/'.$projecte->imatge }}" alt="{{$projecte->nomFotos}}" title="{{$projecte->titol}}"></a></div>
            @endforeach
        </div>
    </div>
</section>

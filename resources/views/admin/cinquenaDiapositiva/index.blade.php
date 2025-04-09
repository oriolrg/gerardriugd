
@extends('admin.layouts.app')
@extends('admin.layouts.sidebar')
@section('content')
    <!-- Page Content Holder -->
        <div id="content">
            @if (session()->has('success_message'))
                <div class="alert alert-success">
                    {{ session()->get('success_message') }}
                </div>
            @endif

            @if (session()->has('error_message'))
                <div class="alert alert-danger">
                    {{ session()->get('error_message') }}
                </div>
            @endif
            <h2>
                Pantalla 5
                <!--<a class="btn btn-small btn-success" href="{{ URL::to('admin/entrada/create') }}">
                    <span class="plus">+ </span><strong>Nova Entrada</strong>
                </a>-->
            </h2>
            @if (Session::has('message'))
                <div class="alert alert-info">{{ Session::get('message') }}</div>
            @endif
            <form method="POST" action="{{ route('administra.imatge.pantalla', ['id' => 5]) }}" enctype="multipart/form-data">
                @csrf

                <div class="form-group">
                    <label for="background_image">Imatge de fons:</label>
                    <input type="file" name="file1" class="form-control">
                </div>

                <button type="submit" class="btn btn-primary">Desa</button>
            </form>

            <hr>

            <h3>Imatges guardades</h3>
            <div class="row">
                @foreach ($images as $image)
                    <div class="col-md-3 text-center">
                        <img src="{{ asset('img/slides/slide5/' . $image) }}" class="img-thumbnail" style="width: 100%; max-height: 500px;">
                        <form method="POST" action="{{ route('administra.imatge.elimina', ['id' => 5,'filename' => $image]) }}">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm mt-2">Eliminar</button>
                        </form>
                    </div>
                @endforeach
            </div>
        </div>

@endsection

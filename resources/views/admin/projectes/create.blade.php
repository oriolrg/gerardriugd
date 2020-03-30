@extends('admin.layouts.app')
@extends('admin.layouts.sidebar')   
@section('content')
    <div id="content">
    <h2>Nou Projecte</h2>
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
        <form method="POST" action="{{ URL::to('administra/crearProjecte') }}" enctype="multipart/form-data">
            @csrf
            @include('admin.projectes.form.projectes_form')
            <button type="submit" class="btn btn-primary  justify-content-center" >
                <i class="glyphicon glyphicon-send"> Enviar </i>
            </button>
        </form>
    </div>
@endsection
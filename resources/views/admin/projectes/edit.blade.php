@extends('admin.layouts.app')
@extends('admin.layouts.sidebar')   
@section('content')
    <div id="content">
    <h2>Edita Projecte</h2>
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
        <form method="POST" action="{{ URL::to('administra/projecte') }}/{{isset($editdata) ? $editdata->id : ''}}" enctype="multipart/form-data">
            {{ method_field('PUT') }}
            @csrf
            <input type="hidden" name="projecte_id" value="{{isset($editdata) ? $editdata->id : ''}}">
            @include('admin.projectes.form.projectes_form')
            <button type="submit" class="btn btn-primary entrada" >
                <i class="glyphicon glyphicon-send"> Enviar </i>
            </button>
        </form>
    </div>
@endsection
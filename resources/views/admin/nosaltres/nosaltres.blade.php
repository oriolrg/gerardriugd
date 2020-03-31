@extends('admin.layouts.app')
@extends('admin.layouts.sidebar')   
@section('content')
    <div id="content">
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
        <form method="POST" action="{{ URL::to('administra/nosaltres') }}" enctype="multipart/form-data">
            {{ method_field('POST') }}
            @csrf
            <input type="hidden" name="id" value="{{isset($editdata) ? $editdata->id : ''}}">
            @include('admin.nosaltres.form.nosaltres_form')
            <button type="submit" class="btn btn-primary entrada" >
                <i class="glyphicon glyphicon-send"> Enviar </i>
            </button>
        </form>
    </div>
@endsection
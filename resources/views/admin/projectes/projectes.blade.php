
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
            <h2>Llistat de Projectes</h2>
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
            </nav>
            <h2>
                Projectes
                <!--<a class="btn btn-small btn-success" href="{{ URL::to('admin/entrada/create') }}">
                    <span class="plus">+ </span><strong>Nova Entrada</strong>
                </a>-->
            </h2>
            @if (Session::has('message'))
                <div class="alert alert-info">{{ Session::get('message') }}</div>
            @endif
            <table class="table table-striped table-bordered">
                <thead>
                    <tr>
                        <td>Projecte</td>
                        <td>Foto</td>
                        <!--<td>Operativa fins a</td>-->
                        <td>Accions</td>
                    </tr>
                </thead>
                <tbody>
                @if(@isset($projectes))
                    @foreach($projectes as $key => $projecte)
                        <tr>
                            <td>{{ $projecte->titol }}</td>
                            <td><img src="{{ URL::asset('public/') }}/profile_images/{{$projecte->imatge}}" alt="{{ $projecte->titol }}" class="img-responsive" width="130em" height="130em"></td>
                            <!-- we will also add show, edit, and delete buttons -->
                            <td>
                                <!-- edit this nerd (uses the edit method found at GET /nerds/{id}/edit -->
                                <a class="btn btn-small btn-info" href="{{ URL::to('administra/projecte/' . $projecte->id . '/edit') }}">Edia el Projecte</a>
                                <!--<a class="btn btn-small btn-primary" href="{{ URL::to('administra/projecte/' . $projecte->id . '/desactiva') }}">Desactiva el Projecte</a>-->
                                <!-- Si es la reserva no es pot borrar -->
                                    <form action="{{ URL::to('administra/projecte/' . $projecte->id) }}" method="POST">
                                        {{ method_field('DELETE') }}
                                        @csrf
                                        <input type="hidden" name="id" value="{{$projecte->id}}"/>
                                        <input type="submit" class="btn btn-small btn-danger eliminarProjecte" value="Elimina definitivament aquesta Projecte"/>
                                    </form>
                            </td>
                        </tr>
                    @endforeach
                @endif
                </tbody>
            </table>
        </div>

@endsection

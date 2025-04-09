
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
                Pantalla 1
                <!--<a class="btn btn-small btn-success" href="{{ URL::to('admin/entrada/create') }}">
                    <span class="plus">+ </span><strong>Nova Entrada</strong>
                </a>-->
            </h2>
            @if (Session::has('message'))
                <div class="alert alert-info">{{ Session::get('message') }}</div>
            @endif
            <script src="https://cdn.ckeditor.com/ckeditor5/39.0.1/classic/ckeditor.js"></script>
            <script>
                document.addEventListener("DOMContentLoaded", function() {
                    ClassicEditor
                        .create(document.querySelector('#editor'), {
                            toolbar: [ 'bold', 'italic', 'link', 'bulletedList', 'numberedList' ],
                            enterMode: 'paragraph', // <p> en prémer Enter
                            shiftEnterMode: 'br',    // <br> en Shift+Enter
                            height: 400,
                            width: 400
                        })
                        .then(editor => {
                            editor.editing.view.change(writer => {
                                writer.setStyle('min-height', '400px', editor.editing.view.document.getRoot());
                                writer.setStyle('min-width', '500px', editor.editing.view.document.getRoot());
                            });
                            console.log("CKEditor carregat correctament!");
                        })
                        .catch(error => {
                            console.error("Error carregant CKEditor:", error);
                        });
                });
            </script>
            <form method="POST" action="">
                @csrf
                <div class="form-group">
                    <label for="textEditor">Contingut:</label>
                    <textarea id="editor" name="text" class="form-control" style="width:400px;">{{ $text ?? '' }}</textarea>
                </div>
                <button type="submit" class="btn btn-primary">Desa</button>
            </form>
        </div>

@endsection

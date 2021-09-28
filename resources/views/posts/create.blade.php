@extends('layouts.app')

@section('content')
    <h1>Create Post</h1>
    {!! Form::open(['action' => ['App\Http\Controllers\PostController@store', 'method' =>'POST', 'enctype' =>'multipart/form-data']]) !!}
        <div class="form-group">
            {{Form::label('title', 'Title')}}
            {{Form::text('title', '' , ['class'=> 'form-control','placeholder'=> 'Input title here'])}}
        </div>
        <div class="form-group">
            {{Form::label('body', 'Body')}}
            {{Form::textarea('body', '' ,['id' => 'editor', 'class' => 'form-control', 'placeholder'=> 'Input body here'])}} 
            
        </div>
        <div class="form-group">
            {{Form::file('cover_image')}}
        </div>
        {{Form::submit('Submit',['class'=> 'btn btn-primary'])}}
    {!! Form::close() !!}  

@endsection

@section('ck-editor')
    <script src="https://cdn.ckeditor.com/ckeditor5/29.2.0/classic/ckeditor.js"></script>

    <script>
        ClassicEditor
            .create(document.querySelector('#editor'))
            .catch( error => {
                console.error( error );
            } );
    </script>
@endsection

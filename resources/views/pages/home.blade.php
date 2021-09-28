@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <div class="card-body">
                        <a href="/posts/create" class="btn btn-primary">Create Post</a>
                        <h3 class="py-5">Your Blog Post</h3>

                        @if(count($posts) >0)
                        <table class="table table-striped pt-3">
                            <tr>
                                <th scope="col ">Title</th>
                                <th scope="col ">Poster</th>
                                <th scope="col ">Edit</th>
                                <th scope="col ">Delete</th>
                            </tr>
                            @foreach($posts as $post)
                            <tr>
                                <td class="table-light">{{$post->title}}</td>
                                <td class="table-light">{{$post->user-> name}}</td>
                                <td class="table-light"><a href="/posts/{{$post->id}}/edit" class="btn btn-primary">Edit</a></td>
                                <td class="table-light">
                                {!! Form::open(['action'=> ['App\Http\Controllers\PostController@destroy', $post->id ], 'method'=> 'POST']) !!}
                                    {{Form::hidden('_method', 'DELETE')}}
                                    {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
                                {!!Form::close()!!}
                                </td>
                            </tr>
                            @endforeach
                        </table>
                        @else
                        <p>You have no Posts</p>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

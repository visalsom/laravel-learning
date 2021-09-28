@extends('layouts.app')

@section('content')
<div class="container">
    <h1>{{ $title }}</h1>
    @if(count($cover) > 0)
        <ul class="list-group">
        @foreach ($cover as $a)
            <li class="list-group-item">{{$a}}</li>
        @endforeach
        </ul>
    @endif
</div>
@endsection
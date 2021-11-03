@extends('layouts.app')

@section('content')
    <div class="container-fluid text-center">
        <h1>{{$post->title}}</h1>
        <div class="col-md-8">
            {{$post->image}}
        </div>
    </div>
@endsection

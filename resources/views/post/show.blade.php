@extends('layouts.app')

@section('content')
    <div class="container-fluid text-center">
        <h1 class="mb-4">{{$post->title}}</h1>
        <div class="row">
            <div class="col-md-5">
                <img class="img-fluid" src="{{ URL::to('/') }}/images/{{$post->image}}" alt="{{$post->title}}">
            </div>
            <div class="col-md-7">
                <p class="text-left">{{$post->content}}</p>
            </div>
        </div>

    </div>
@endsection

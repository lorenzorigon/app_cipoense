@extends('layouts.app')

@section('content')
    <div class="container-fluid text-center">
            <div class="offset-3 col-md-6">
            <h1 class="">{{$post->title}}</h1>
            <p class="text-right"><span class="font-italic" style="color: gray">{{$post->user->name}} </span>  {{date('d/M', strtotime($post->created_at))}}</p>
            </div>


        <div class="row">
            <div class="col-md-5">
                <img class="img-fluid" src="{{ URL::to('/') }}/images/{{$post->image}}" alt="{{$post->title}}">
            </div>
            <div class="col-md-7">
                <div class="justify-content-center text-left">{!!  $post->content !!}</div>
            </div>
            <div class="col-12 text-right">
                <p class="mr-4">Fonte: <a  target="_blank" href="{{$post->link_source}}">{{$post->source}}</a></p>
            </div>
        </div>
    </div>
@endsection

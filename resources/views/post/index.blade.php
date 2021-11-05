@extends('layouts.app')

@section('content')

    @if(isset($posts))
        <div class="container shadow-lg bg-white">
            <div class="row">
                <!-- Banner principal e Propaganda-->
                <div class="col-md-12 mb-4 row ">
                    <div class="col-md-7 text-center mt-2 p-2 shadow-sm bg-white">
                        <img class="col-md-8 img-fluid"
                             src="{{ URL::to('/') }}/images/{{$posts[0]->image}}"
                             alt="{{$posts[0]->title}}">
                        <h1>{{$posts[0]->title}}</h1>
                        <p class="mt-4 text-left">{{$posts[0]->description}}</p>
                        <a href="{{route('post.show', ['post' => $posts[0]->id])}}" class="btn btn-outline-info">Saiba
                            mais</a>
                    </div>
                    <div class="offset-1 col-md-4 p-4 mt-2 mb-2" style="border: 1px solid black;">
                        <p>Propaganda Principal</p>
                    </div>
                </div>
                <!-- Fim Banner principal-->

                <div class="row mt-2 justify-content-center">
                    @for($i = 0 ; $i < $posts->count(); $i++)
                        <div class="shadow-sm p-3 bg-white rounded col-md-5 text-center mt-1 ml-1">
                            <img class="img-fluid"
                                 style="height: 250px"
                                 src="{{ URL::to('/') }}/images/{{$posts[$i]->image}}"
                                 alt="{{$posts[$i]->title}}">
                            <h1>{{$posts[$i]->title}}</h1>
                            <p class="mt-4 text-left">{{$posts[$i]->description}}</p>
                            <a href="{{route('post.show', ['post' => $posts[$i]->id])}}" class="btn btn-outline-info">Saiba
                                mais</a>
                        </div>
                    @endfor
                </div>
            </div>
        </div>
    @endif
@endsection

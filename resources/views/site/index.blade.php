@extends('layouts.app')

@section('content')

    @if($posts->items() != [])
        <div class="container">
            <div class="row shadow-lg bg-white">
                <!-- Banner principal e Propaganda-->
                <div class="col-md-12 mb-4 row ">
                    <div class="col-md-7 text-center mt-2 p-2">
                        <img class="col-md-8 img-fluid"
                             src="{{ URL::to('/') }}/images/{{$posts[0]->image}}"
                             alt="{{$posts[0]->title}}">
                        <h1>{{$posts[0]->title}}</h1>
                        <p class="mt-4 text-center">{{$posts[0]->description}}</p>
                        <a href="{{route('show', ['post' => $posts[0]->id])}}" class="btn btn-outline-info">Saiba
                            mais</a>
                    </div>
                    <div class="offset-1 col-md-4 p-4 mt-2 mb-2">
                        <div class="card align-items-center text-center">
                            <img class="card-img-top img-fluid" style="max-height: 200px" src="https://cdn.pixabay.com/photo/2021/10/27/19/09/cat-6748193_960_720.jpg" alt="">
                            <div class="card-body">
                                <h5 class="card-title">Gato Falante</h5>
                                <p class="card-text">Faça seu gato falar hoje mesmo!</p>
                                <a href="#" class="btn btn-primary"> 55 984091612</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Fim Banner principal-->

                <div class="row mt-2 justify-content-center">
                    @for($i = 0 ; $i < $posts->count(); $i++)
                        <div class="p-3 col-md-5 text-center mt-1 ml-1">
                            <img class="img-fluid"
                                 style="height: 250px"
                                 src="{{ URL::to('/') }}/images/{{$posts[$i]->image}}"
                                 alt="{{$posts[$i]->title}}">
                            <h1>{{$posts[$i]->title}}</h1>
                            <p class="mt-4">{{$posts[$i]->description}}</p>
                            <a href="{{route('show', ['post' => $posts[$i]->id])}}" class="btn btn-outline-info">Saiba
                                mais</a>
                        </div>
                    @endfor
                        <div class="offset-3 col-md-6 p-4">
                            {{$posts->render()}}
                        </div>
                </div>
            </div>
        </div>
    @endif
@endsection

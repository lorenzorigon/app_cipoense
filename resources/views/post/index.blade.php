@extends('layouts.app')

@section('content')


    <div class="container">
        <div class="row">
            <!-- Banner principal e Propaganda-->

            <div class="col-md-12 mb-4 row">
                <div class="col-md-8 text-center mt-2">
                    <img class="col-md-8 img-fluid"
                         src="{{ URL::to('/') }}/images/{{$posts[0]->image}}"
                         alt="{{$posts[0]->title}}">
                    <h1>{{$posts[0]->title}}</h1>
                    <p class="mt-4 text-left">{{$posts[0]->description}}</p>
                    <a href="{{route('post.show', ['post' => $posts[0]->id])}}" class="btn btn-outline-info">Saiba mais</a>
                </div>
                <div class="col-md-4" style="border: 1px solid black;">
                    <p>Propaganda Principal</p>
                </div>
            </div>
            <!-- Fim Banner principal-->
            <div class="row">
                <div class="col-md-4 text-center mt-2">
                    <img class="img-fluid"
                         src="https://cdn.pixabay.com/photo/2021/10/28/20/20/hut-6750482_960_720.jpg"
                         alt="notebook">
                    <h1>Lorem Ipsulum</h1>
                    <p class="mt-4 text-left">Lorem ipsum dolor sit amet, consectetur adipisicing elit. sas kksndo
                        dsamd
                        olsa id dsad dsa.</p>
                    <a href="#" class="btn btn-outline-info">Saiba mais</a>
                </div>
                <div class="col-md-4 text-center mt-2">
                    <img class="img-fluid"
                         src="https://cdn.pixabay.com/photo/2021/10/28/20/20/hut-6750482_960_720.jpg"
                         alt="notebook">
                    <h1>Lorem Ipsulum</h1>
                    <p class="mt-4 text-left">Lorem ipsum dolor sit amet, consectetur adipisicing elit. sas kksndo
                        dsamd
                        olsa id dsad dsa.</p>
                    <a href="#" class="btn btn-outline-info">Saiba mais</a>
                </div>
            </div>
        </div>
    </div>
@endsection

@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                @if(isset($post))
                    <form action="{{route('post.update', ['post' => $post->id])}}" method="post" enctype="multipart/form-data">
                    @method('PATCH')
                @else
                    <form action="{{route('post.store')}}" method="post" enctype="multipart/form-data">
                @endif
                        @csrf

                        @if(isset($post))
                            <h1 class="text-center">Editar Notícia</h1>
                        @else
                            <h1 class="text-center">Adicionar Notícia</h1>
                        @endif

                        <div class="mb-3">
                            <label for="title" class="form-label">Título</label>
                            <input type="text" class="form-control" id="title" name="title"
                                   placeholder="{{isset($post) ? $post->title : ''}}" value="{{$post->title}}">
                        </div>
                        <div class="mb-3">
                            <label for="description" class="form-label">Descrição</label>
                            <textarea class="form-control" id="content"
                                      name="description">{{isset($post) ? $post->description : ''}}</textarea>
                        </div>
                        <div class="mb-3">
                            <label for="content" class="form-label">Conteúdo</label>
                            <textarea class="form-control" id="content"
                                      name="content">{{isset($post) ? $post->content : ''}}</textarea>
                        </div>
                        <div class="mb-3">
                            <label for="image">Escolha a imagem: </label>
                            <input type="file" id="image" class="form-control-file" name="image">
                        </div>
                        <button type="submit" class="btn btn-success">Adicionar Notícica</button>
                    </form>
            </div>
        </div>
    </div>
@endsection




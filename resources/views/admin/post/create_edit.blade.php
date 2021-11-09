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

                        @if(session('message'))
                            <p class="alert alert-success text-center">{{session('message')}}</p>
                        @endif

                        @if(isset($post))
                            <h1 class="text-center">Editar Notícia</h1>
                        @else
                            <h1 class="text-center">Adicionar Notícia</h1>
                        @endif

                        <div class="mb-3 form-group">
                            <label for="title" class="form-label">Título</label>
                            <input type="text" class="form-control" id="title" name="title"
                                   placeholder="{{isset($post) ? $post->title : ''}}" value="{{isset($post->title) ? $post->title : ''}}">
                        </div>

                        @error('title')
                            <p class="alert alert-danger text-center p-1">{{$message}}</p>
                        @enderror


                        <div class="mb-3 form-group row align-items-center">
                            <label for="source" class="col-1 form-label">Fonte</label>
                            <input class=" ml-2 col-4 form-control mr-4" id="source" name="source" value="{{isset($post) ? $post->source : ''}}">
                            <label for="link_source" class="col-1 form-label">Link</label>
                            <input class=" ml-2 col-5 form-control" id="link_source" name="link_source" value="{{isset($post) ? $post->link_source : ''}}">
                        </div>

                        @error('source')
                        <p class="alert alert-danger text-center p-1">Preencha a Fonte</p>
                        @enderror
                        @error('link_source')
                        <p class="alert alert-danger text-center p-1">Preencha o link</p>
                        @enderror

                        <div class="mb-3">
                            <label for="category" class="form-label">Categoria</label>
                            <select class="ml-2 form-select" name="category">
                                @foreach($categories as $category)
                                    <option value="{{$category->id}}"
                                   @if(isset($post)) {{ ($post->category_id == $category->id) ? 'selected' : '' }} @endif>
                                        {{$category->name}}
                                    </option>
                                @endforeach
                            </select>
                        </div>

                        @error('category_id')
                        <p class="alert alert-danger text-center p-1">Selecione a categoria!</p>
                        @enderror

                        <div class="mb-3">
                            <label for="description" class="form-label">Descrição</label>
                            <input id="xx" type="hidden" name="description" value="{{isset($post) ? $post->description : ''}}">
                            <trix-editor input="xx">{{isset($post) ? $post->description : ''}}</trix-editor>
                        </div>

                        @error('description')
                        <p class="alert alert-danger text-center p-1">Preencha a Descrição</p>
                        @enderror

                        <div class="mb-3">
                            <label for="content" class="form-label">Conteúdo</label>
                            <input id="x" type="hidden" name="content" value="{{isset($post) ? $post->content : ''}}">
                            <trix-editor input="x">{{isset($post) ? $post->content : ''}}</trix-editor>
                        </div>

                        @error('content')
                        <p class="alert alert-danger text-center p-1">Preencha o conteúdo</p>
                        @enderror

                        <div class="mb-3">
                            <label for="image">Escolha a imagem: </label>
                            <input type="file" id="image" class="form-control-file" name="image">
                        </div>

                        @error('image')
                        <p class="alert alert-danger text-center p-1">Selecione uma imagem!</p>
                        @enderror

                        <button type="submit" class="btn btn-success">{{isset($post) ? "Editar Notícia" : "Adicionar Notícica" }}</button>
                    </form>
                    </form>
            </div>
        </div>
    </div>

@endsection




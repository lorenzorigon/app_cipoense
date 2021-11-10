@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header text-center">
                <h3>Bem vindo {{auth()->user()->name}}</h3>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-sm-7">
                        <div class="card text-center">
                            <div class="card-body">
                                <a href=""><h3 class="card-title">Postagens</h3></a>
                                <table class="table table-striped table-bordered" style="max-width: 900px">
                                    <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Título</th>
                                        <th scope="col">Categoria</th>
                                        <th scope="col"></th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($posts as $post)
                                        <tr>
                                            <th scope="row">{{$post->id}}</th>
                                            <td>{{$post->title}}</td>
                                            <td>{{$post->category->name}}</td>
                                            <td>
                                                <div class="row ml-2">
                                                    <a href="{{route('post.show', ['post' => $post->id])}}"
                                                       class="btn btn-primary">Visualizar</a>
                                                    <a href="{{route('post.edit', ['post' => $post->id])}}"
                                                       class="btn btn-success ml-2">Editar</a>
                                                    <form action="{{route('post.destroy', ['post' => $post->id])}}"
                                                          method="post">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="btn btn-danger ml-2">Excluir
                                                        </button>
                                                    </form>
                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                                <a href="{{route('post.create')}}" class="btn btn-success float-left">Adicionar Postagem</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-5">
                        <div class="card text-center">
                            <div class="card-body">
                                <a href=""><h3 class="card-title">Categorias</h3></a>
                                <table class="table table-striped table-bordered" style="max-width: 500px">
                                    <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Categoria</th>
                                        <th scope="col"></th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($categories as $category)
                                        <tr>
                                            <th scope="row">{{$category->id}}</th>
                                            <td>{{$category->name}}</td>
                                            <td>
                                                <div class="row ml-2">
                                                    <a href="{{route('category.edit', ['category' => $category->id])}}"
                                                       class="btn btn-success ml">Editar</a>
                                                    <form
                                                        action="{{route('category.destroy', ['category' => $category->id])}}"
                                                        method="post">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="btn btn-danger ml-2">Excluir
                                                        </button>
                                                    </form>
                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                                <a href="{{route('category.create')}}" class="btn btn-success float-left">Adicionar Categoria</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-footer text-muted">

            </div>
        </div>
    </div>
@endsection

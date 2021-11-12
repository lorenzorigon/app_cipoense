@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
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
                                <a href="{{route('show', ['post' => $post->id])}}" class="btn btn-primary">Visualizar</a>
                                <a href="{{route('post.edit', ['post' => $post->id])}}" class="btn btn-success ml-2">Editar</a>
                                <form action="{{route('post.destroy', ['post' => $post->id])}}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger ml-2">Excluir</button>
                                </form>
                            </div>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection

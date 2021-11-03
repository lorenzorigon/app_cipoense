@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <form action="{{route('post.store')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <h1 class="text-center">Adicionar Notícia</h1>
                    <div class="mb-3">
                        <label for="title" class="form-label">Título</label>
                        <input type="text" class="form-control" id="title" name="title">
                    </div>
                    <div class="mb-3">
                        <label for="description" class="form-label">Descrição</label>
                        <textarea  class="form-control" id="content" name="description"></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="content" class="form-label">Conteúdo</label>
                        <textarea  class="form-control" id="content" name="content"></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="image">Escolha a imagem: </label>
                        <input type="file"  id="image" class="form-control-file" name="image">
                    </div>
                    <button type="submit" class="btn btn-success">Adicionar Notícica</button>
                </form>
            </div>
        </div>
    </div>
@endsection




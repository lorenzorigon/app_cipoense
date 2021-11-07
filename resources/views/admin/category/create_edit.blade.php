@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                @if(isset($category))
                    <form action="{{route('category.update', ['category' => $category->id])}}" method="post">
                        @method('PUT')
                @else
                            <form action="{{route('category.store')}}" method="post">
                @endif
                                @csrf

                                @if(session('message'))
                                    <p class="alert alert-success text-center">{{session('message')}}</p>
                                @endif

                                @if(isset($category))
                                    <h1 class="text-center">Editar Categoria</h1>
                                @else
                                    <h1 class="text-center">Adicionar Categoria</h1>
                                @endif

                                <div class="mb-3 form-group">
                                    <label for="name" class="form-label">Categoria</label>
                                    <input type="text" class="form-control" id="name" name="name"
                                           placeholder="{{isset($category) ? $category->name : ''}}"
                                           value="{{isset($category->name) ? $category->name : ''}}">
                                </div>
                                <button type="submit"
                                        class="btn btn-success">{{isset($category) ? "Editar Categoria" : "Adicionar Categoria" }}</button>
                            </form>
            </div>
        </div>
    </div>
@endsection




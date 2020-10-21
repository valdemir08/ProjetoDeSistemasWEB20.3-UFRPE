@extends('layouts.app')

@section('content')

    <br><br>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <span >Editar</span>
                </div>
                <form action="{{route('files.update', $file->id)}}" enctype="multipart/form-data" method="POST">
                    <br>
                    @csrf
                    <input type="hidden" name="_method" value="PUT">
                    <input class="form-input" type="text" name = "name" placeholder="Nome" value="{{$file->name}}" required>
                    <input class="form-input" type="text" name = "author" placeholder="Autor" value="{{$file->author}}" required>
                    <select class="form-select" name="type" value="{{$file->type}}" required >
                        <option>Livro</option>
                        <option>Artigo</option>
                    </select>
                    <br>
                    <button class="btn btn-success" style="margin: 2%">Atualizar</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection

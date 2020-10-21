@extends('layouts.app')

@section('content')

    <br><br>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12 ">
            <div class="card">
                <div class="card-header">
                    <span class="float-left">Livros/Artigos </span>
                    <a href="{{route('files.create')}}" class="float right btn btn-primary" >Enviar Ficheiro</a>
                </div>
                <div class="card-body ">
                    <table class="table table-bordered ">
                        <thead>
                        <tr>
                            <td>Nome</td>
                            <td>Autor</td>
                            <td>Tipo</td>
                            <td>Area</td>
                            <td>Ações</td>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($dados as $dado)
                            <tr>
                                <td>{{$dado->name}}</td>
                                <td>{{$dado->author}}</td>
                                <td>{{$dado->type}}</td>
                                <td>{{$dado->area}}</td>
                                <td>
                                    <div class="row" >
                                        <div class="btn col-3">
                                            <a href="{{route('files.show', $dado->id)}}" >View</a>
                                        </div>
                                        <div class=" btn col-3 text-gray-500">
                                            <a href="{{route('files.edit', $dado->id)}}" >Edit</a>
                                        </div>
                                        <div class="col-3 ">
                                            <a class="btn" href="{{ asset('arquivos/'.$dado->name_md5) }}" download="">Download</a>
                                        </div>
                                        <div class="btn col-3" >
                                            <form action="{{route('files.destroy', $dado->id)}}" method="POST">
                                                @csrf
                                                <input type="hidden" name="_method" value="DELETE">
                                                <button type="submit" class="text-red-500">Delete</button>
                                            </form>
                                        </div>
                                    </div>
                                </td>

                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

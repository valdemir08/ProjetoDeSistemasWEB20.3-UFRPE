@extends('layouts.app')

@section('content')

    <br><br>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <span >Enviar</span>
                </div>
                <form action="{{route('files.store')}}" enctype="multipart/form-data" method="POST">
                    <br>
                    @csrf

                    <div >
                        <input type="hidden" name="name_md5" value="archname">
                    <input class="form-input" type="text" name = "name" placeholder="Nome" required>
                    <input class="form-input" type="text" name = "author" placeholder="Autor" required>
                    <select class="form-select" name="type" required >
                        <option>Livro</option>
                        <option>Artigo</option>
                    </select>

                    <select class="form-select " name="area" required>
                        <option value="exatas">Ciências Exatas </option>
                        <option value="biologicas">Ciências Biológicas </option>
                        <option value="engenharia_tecnologia">Engenharia/Tecnologia </option>
                        <option value="saude">Ciências da Saúde</option>
                        <option value="agrarias">Ciências Agrárias</option>
                        <option value="sociais">Ciências Sociais</option>
                        <option value="humanas">Ciências Humanas</option>
                        <option value="linguistica">Lingüística</option>
                        <option value="letras">Letras</option>
                        <option value="artes">Artes</option>
                    </select>
                    <br><br>
                    <input type="file" name="file">
                    <br>
                    <button class="btn btn-success" style="margin: 2%">Criar</button>

                    </div>

                </form>
            </div>
        </div>
    </div>
</div>
@endsection

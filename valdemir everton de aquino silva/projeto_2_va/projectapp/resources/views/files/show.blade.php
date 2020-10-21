@extends('layouts.app')

@section('content')

    <br><br>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <span >Detalhes</span>
                </div>
                <div class="card-body">
                    <h1>{{$file->name}}</h1>
                    <p>Autor: {{$file->author}}</p>
                    <p>área: {{$file->area}}</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

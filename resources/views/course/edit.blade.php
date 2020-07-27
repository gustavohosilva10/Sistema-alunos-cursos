@extends('layouts.app')

@section('title', 'Cursos')

@section('content')

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta charset="utf-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card text-dark bg-secondary border-dark shadow-lg mb-5">
                    <div class="card-header text-light text-uppercase bg-dark font-weight-bold">
                        Lista de cursos
                    </div>
                    <div class="card border">
                        <div class="card-body">
                            <form action="/course/{{$course->id}}" method="POST">
                                @csrf
                                <div class="form-group">
                                    <label for="name">Nome da Categoria</label>
                                    <input type="text" class="form-control" name="name" value="{{$course->name}}"
                                        id="name" placeholder="Nome curso">
                                </div>
                                <button type="submit" class="btn btn-primary btn-sm">Salvar</button>
                                <button type="cancel" class="btn btn-danger btn-sm">Cancelar</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
@endsection
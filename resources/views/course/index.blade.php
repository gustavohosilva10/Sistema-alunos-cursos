@extends('layouts.app')

@section('title', 'Cursos')

@section('content')

<!doctype html>
<html lang="pt-br">

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
                    <div class="card-body py-5">

                        <div class="card border">
                            <div class="card-body">
                                <h5 class="card-title">Cadastro de cursos</h5>

                                @if(count($course) > 0)
                                <table class="table table-ordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>Código</th>
                                            <th>Nome do curso</th>
                                            <th>Ações</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($course as $course)
                                        <tr>
                                            <td>{{$course->id}}</td>
                                            <td>{{$course->name}}</td>
                                            <td>
                                                <a href="/course/edit/{{$course->id}}"
                                                    class="btn btn-sm btn-primary">Editar</a>
                                                <a href="/course/delete/{{$course->id}}"
                                                    class="btn btn-sm btn-danger">Apagar</a>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                                @endif
                            </div>
                            <div class="card-footer">
                                <a href="/course/new" class="btn btn-sm btn-primary" role="button">Novo curso</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</body>
@endsection
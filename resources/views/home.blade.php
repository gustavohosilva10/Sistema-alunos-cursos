@extends('layouts.app')

@section('title', 'Inicio')
@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card text-dark bg-secondary border-dark shadow-lg mb-5">
                <div class="card-header text-light text-uppercase bg-dark font-weight-bold">
                    <i class="fas fa-file"></i> Configure seus cursos e cadastre alunos
                </div>
                <div class="card-body py-5">
                    <div class="card text-dark bg-secondary border-dark shadow-lg mb-5">
                        <div class="card-header text-light text-uppercase bg-dark font-weight-bold">
                            <i class="fas fa-file"></i> Cadastrar Aluno
                            <span class="float-right">
                                <a href="/students/new" class="btn py-0 px-0" data-toggle="tooltip"
                                    data-placement="bottom" title="Adicionar Aluno">
                                    <i class="fas fa-pen-square text-warning"></i>
                                </a>
                            </span>
                        </div>
                    </div>
                    
                    <div class="card text-dark bg-secondary border-dark shadow-lg mb-5">
                        <div class="card-header text-light text-uppercase bg-dark font-weight-bold">
                            <i class="fas fa-camera"> </i>Adicionar cursos
                            <span class="float-right">
                                <a href="/course/new" class="btn py-0 px-0" data-toggle="tooltip"
                                    data-placement="bottom" title="Adicionar Curso">
                                    <i class="fas fa-pen-square text-warning"></i>
                                </a>
                            </span>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
@stop

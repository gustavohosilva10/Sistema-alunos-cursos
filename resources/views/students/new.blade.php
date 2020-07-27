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
{{ Form::open([
                'method' => 'post',
                'url' => '/students/save',
                'files' => true,
                'class' => 'form-horizontal',
                'id' => 'needs-validation',
                'novalidate' => ''
]) }}

<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card text-dark bg-secondary border-dark shadow-lg mb-5">
                    <div class="card-header text-light text-uppercase bg-dark font-weight-bold">
                        Cadastro de alunos
                    </div>
                    <div class="card-body py-5">
                        <label for="desciption_promotion">Foto do Aluno</label>

                        <div class="fileinput-new row" data-provides="fileinput">
                            <div class="col-sm-12 col-lg-10 col-xl-10 input-group">
                                <div class="form-control" data-trigger="fileinput">
                                    <i class="fas fa-file-image fileinput-exists"></i> <span
                                        class="fileinput-filename"></span>
                                </div>
                                <span class="input-group-addon btn btn-primary btn-file">
                                    <span class="fileinput-new">Escolha a foto</span>
                                    {!! Form::file('avatar', [
                                    'class' => $errors->has('avatar') ? 'custom-file-input form-control is-invalid' :
                                    'custom-file-input form-control',
                                    'id' => 'avatar'
                                    ]) !!}
                                    <span class="invalid-feedback">
                                        <strong>
                                            @if ($errors->has('avatar'))
                                            {{ $errors->first('avatar') }}
                                            @endif
                                        </strong>
                                    </span>
                                </span>
                                <a href="#" class="input-group-addon btn btn-danger fileinput-exists"
                                    data-dismiss="fileinput">Remova a foto</a>
                            </div>
                        </div>
                        <div class="col-sm-12 col-lg-4 col-xl-4 mb-2">
                            <div class="form-group row">
                                {!! Form::label('gender', 'Sexo*', null, ['class' => 'control-label']) !!}
                                {!! Form::select('gender', [
                                'Masculino' => 'Masculino',
                                'Feminino' => 'Feminino'
                                ], null, [
                                'placeholder' => 'Escolha o Sexo',
                                'class' => $errors->has('gender') ? 'form-control custom-select is-invalid' :
                                'form-control custom-select',
                                'required' => ''
                                ]) !!}
                                <span class="invalid-feedback">
                                    <strong>
                                        @if ($errors->has('gender'))
                                        {{ $errors->first('gender') }}
                                        @else
                                        O campo Sexo é obrigatório!
                                        @endif
                                    </strong>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card text-dark bg-secondary border-dark shadow-lg mb-5">
                    <div class="card-header text-light text-uppercase bg-dark font-weight-bold">
                        Informações pessoais
                    </div>

                    <div class="card-body py-5">
                        <div class="form-group row">

                            <div class="col-sm-12 col-lg-4 col-xl-4 mb-2">
                                {!! Form::label('name', 'Nome', null, ['class' => 'control-label']) !!}
                                {!! Form::text('name', null, ['class' => 'form-control']) !!}
                            </div>
                            <div class="col-sm-12 col-lg-2 col-xl-2 mb-2">
                                {!! Form::label('zip_code', 'CEP', null, ['class' => 'control-label']) !!}
                                {!! Form::text('zip_code', null, [
                                'class' => 'form-control zip_code',
                                'id' => 'zip_code'
                                ]) !!}
                            </div>
                            <div class="col-sm-12 col-lg-8 col-xl-6 mb-2">
                                {!! Form::label('address', 'Rua', null, ['class' => 'control-label']) !!}
                                {!! Form::text('address', null, [
                                'class' => 'form-control',
                                'id' => 'address'
                                ]) !!}
                            </div>
                            <div class="col-sm-12 col-lg-2 col-xl-2 mb-2">
                                {!! Form::label('number', 'Número', null, ['class' => 'control-label']) !!}
                                {!! Form::text('number', null, [
                                'class' => 'form-control',
                                'id' => 'number'
                                ]) !!}
                            </div>
                            <div class="col-sm-12 col-lg-5 col-xl-3 mb-2">
                                {!! Form::label('complement', 'Complemento', null, ['class' => 'control-label']) !!}
                                {!! Form::text('complement', null, ['class' => 'form-control',]) !!}
                            </div>
                            <div class="col-sm-12 col-lg-3 col-xl-3 mb-2">
                                {!! Form::label('strict', 'Bairro', null, ['class' => 'control-label']) !!}
                                {!! Form::text('strict', null, [
                                'class' => 'form-control',
                                'id' => 'strict'
                                ]) !!}
                            </div>
                            <div class="col-sm-12 col-lg-2 col-xl-2 mb-2">
                                {!! Form::label('city', 'Cidade', null, ['class' => 'control-label']) !!}
                                {!! Form::text('city', null, [
                                'class' => 'form-control',
                                'id' => 'city'
                                ]) !!}
                            </div>
                            <div class="col-sm-12 col-lg-2 col-xl-2 mb-2">
                                {!! Form::label('state', 'Estado', null, ['class' => 'control-label']) !!}
                                {!! Form::text('state', null, [
                                'class' => 'form-control',
                                'id' => 'state'
                                ]) !!}
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-12">
                        <div class="card text-dark bg-secondary border-dark shadow-lg mb-5">
                            <div class="card-header text-light text-uppercase bg-dark font-weight-bold">
                                Informações acadêmicas
                            </div>

                            <div class="card-body py-5">
                                <div class="form-group row">
                                    <div class="col-sm-12 col-lg-4 col-xl-4 mb-2">
                                        {!! Form::label('status', 'Status do aluno', null, ['class' => 'control-label'])
                                        !!}
                                        {!! Form::select('status', [
                                        'Ativo' => 'Ativo',
                                        'Inativado' => 'Inativado'
                                        ], null, [
                                        'placeholder' => 'Status',
                                        'class' => $errors->has('status') ? 'form-control custom-select is-invalid' :
                                        'form-control custom-select',
                                        'required' => ''
                                        ]) !!}
                                        <span class="invalid-feedback">
                                            <strong>
                                                @if ($errors->has('status'))
                                                {{ $errors->first('status') }}
                                                @else
                                                O campo status é obrigatório!
                                                @endif
                                            </strong>
                                        </span>
                                    </div>
                                    <div class="col-sm-12 col-lg-5 col-xl-3 mb-2">
                                        {{ Form::label('course[]','Curso')}}
                                        {{ Form::select('course[]', $course, null, ['class' => 'form-control',])}}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @include('layouts.scripts.cep')
        <div class="text-right">
            <a href="javascript:history.go(-1)" class="btn btn-danger">Cancelar</a>
            {!! Form::submit('Salvar', ['class' => 'btn btn-primary']) !!}
            {{ Form::close() }}
        </div>
</body>

@endsection
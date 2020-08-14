@extends('layouts.app')

@section('title', 'Alunos')

@section('content')
<div class="container-fluid">
    <div class="row">
        @if (count($student))
        <div class="col-md-12">

            <div class="card text-dark bg-secondary border-dark shadow-lg mb-5">
                <div class="card-header text-light text-uppercase bg-dark font-weight-bold">
                    <i class="fas fa-address-card"></i> Alunos
                </div>
                <div class="card-body py-0 px-0">
                    <div class="table-responsive">
                        <table class="table table-striped table-borderless table-hover mt-0 mb-0">
                            <tbody>
                                @foreach ($student as $student)
                                <td scope="col" class="align-middle"> Matricula {{ $student->id }}</td>
                                <td class="align-middle text-center">
                                    @if ($student->avatar)
                                    <img src="{{ url("storage/student->avatar}") }}" alt="{{ $student->name }}"
                                        class="img-fluid rounded-circle thumbnail-photo-list" />
                                    @else
                                    @if ($student->gender == 'Masculino')
                                    <i class="fas fa-male text-info" style="font-size:3em;"></i>
                                    @elseif ($student->gender == 'Feminino')
                                    <i class="fas fa-female text-danger" style="font-size:3em;"></i>
                                    @else
                                    <i class="fas fa-exclamation-triangle text-warning" style="font-size:3em;"></i>
                                    @endif
                                    @endif
                                </td>

                                <td class="align-middle">
                                    <h6>Status: {{$student->status}} </h6>
                                    <a href="/students/show{{$student->id}}" data-toggle="tooltip"
                                        data-placement="bottom" title="Ver contato">
                                        <i class="fas fa-caret-square-right text-success" style="font-size:1.5em"></i>
                                    </a>
                                    <a href="/students/edit{{$student->id}}" data-toggle="tooltip"
                                        data-placement="bottom" title="Editar contato">
                                        <i class="fas fa-pen-square text-warning" style="font-size:1.5em"></i>
                                    </a>
                                    <a href="/students/delete/{{$student->id}}" data-toggle="tooltip"
                                        data-placement="bottom" title="Excluir contato">
                                        <i class="fas fa-window-close text-danger" style="font-size:1.5em"></i>
                                    </a>
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
    @else
    <div class="col-md-12">
        <div class="card text-dark bg-secondary border-dark shadow-lg mb-5">
            <div class="card-header text-light text-uppercase bg-dark font-weight-bold">
                <i class="fas fa-address-card"></i> Alunos
            </div>
            <div class="card-body text-center">
                Você não possuí Aluno cadastrados!
            </div>
        </div>
    </div>
    @endif
</div>
</div>
@endsection
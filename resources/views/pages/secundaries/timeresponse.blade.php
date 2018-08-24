@extends('layouts.default')

<head>
    <title>Análise de Tempo de Resposta</title>
</head>

@section('content')
    <div class="panel panel-default bootcards-summary">
        <div class="panel-heading">
            <h3 class="panel-title">Análise de tempo de resposta</h3>
        </div>
        <div class="panel-body">
            <div class="row">
                <div class="col-xs-6 col-sm-4">
                    <a class="bootcards-summary-item" href="{{ url('/chooseTimeStudent') }}">
                        <i class="fa fa-3x  glyphicon glyphicon-user"></i>
                        <h4>Análise por Aluno<span class="label label-info"></span></h4>
                    </a>
                </div>
                <div class="col-xs-6 col-sm-4">
                    <a class="bootcards-summary-item" href="{{ url('/chooseTimeClass') }}">
                        <i class="fa fa-3x  glyphicon glyphicon-list-alt"></i>
                        <h4>Análise por Turma<span class="label label-info"></span></h4>
                    </a>
                </div>
                <div class="col-xs-6 col-sm-4">
                    <a class="bootcards-summary-item" href="{{ url('/chooseTimeDomain') }}">
                        <i class="fa fa-3x  glyphicon glyphicon-book"></i>
                        <h4>Análise por Disciplina<span class="label label-info"></span></h4>
                    </a>
                </div>
            </div>
        </div>

    </div>
@stop


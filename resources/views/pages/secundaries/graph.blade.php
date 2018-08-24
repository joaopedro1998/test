@extends('layouts.default')

<head>
    <title>Gráfico de Desempenho</title>
</head>

@section('content')
    <div class="panel panel-default bootcards-summary">
        <div class="panel-heading">
            <h3 class="panel-title">Gerar gráficos de desempenho</h3>
        </div>
        <div class="panel-body">
            <div class="row">
                <div class="col-xs-6 col-sm-4">
                    <a class="bootcards-summary-item" href="{{ url('/chooseStudentToGraph') }}">
                        <i class="fa fa-3x  glyphicon glyphicon-user"></i>
                        <h4>Por Aluno<span class="label label-info"></span></h4>
                    </a>
                </div>
                <div class="col-xs-6 col-sm-4">
                    <a class="bootcards-summary-item" href="{{ url('/chooseStudentAndDomainToGraph') }}">
                        <i class="fa fa-3x  glyphicon glyphicon-book"></i>
                        <h4>Por Aluno e Disciplina<span class="label label-info"></span></h4>
                    </a>
                </div>
            </div>
        </div>

    </div>

@stop

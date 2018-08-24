@extends('layouts.default')

<head>
    <title>Correlação</title>
</head>

@section('content')
    <div class="panel panel-default bootcards-summary">
        <div class="panel-heading">
            <h3 class="panel-title">Correlacionar dados</h3>
        </div>
        <div class="panel-body">
            <div class="row">
                <div class="col-xs-6 col-sm-4">
                    <a class="bootcards-summary-item" href="{{ url('/chooseClassCorrelation') }}">
                        <i class="fa fa-3x  glyphicon glyphicon-list-alt"></i>
                        <h4>Por Turma<span class="label label-info"></span></h4>
                    </a>
                </div>
                <div class="col-xs-6 col-sm-4">
                    <a class="bootcards-summary-item" href="{{ url('/correlationAllStudents') }}">
                        <i class="fa fa-3x  glyphicon glyphicon-user"></i>
                        <h4>De todos os alunos<span class="label label-info"></span></h4>
                    </a>
                </div>

            </div>
        </div>

    </div>
@stop

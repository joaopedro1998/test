@extends('layouts.default')

<head>
    <title>T-Partner</title>
</head>

@section('content')
    <div class="panel panel-default bootcards-summary">
        <div class="panel-heading">
            <h3 class="panel-title">Menu Principal</h3>
        </div>
        <div class="panel-body">
            <div class="row">
                <div class="col-xs-6 col-sm-4">
                    <a class="bootcards-summary-item" href="/interactions">
                        <i class="fa fa-3x  glyphicon glyphicon-signal"></i>
                        <h4>Análise de Interações<span class="label label-info"></span></h4>
                    </a>
                </div>
                <div class="col-xs-6 col-sm-4">
                    <a class="bootcards-summary-item" href="/individualInteractions">
                        <i class="fa fa-3x  glyphicon glyphicon-tasks"></i>
                        <h4>Análise de Interações com Recursos por Aluno<span class="label label-info"></span></h4>
                    </a>
                </div>
                <div class="col-xs-6 col-sm-4">
                    <a class="bootcards-summary-item" href="/resources">
                        <i class="fa fa-3x glyphicon glyphicon-list-alt"></i>
                        <h4>Listagem de Recursos Educacionais<span class="label label-info"></span></h4>
                    </a>
                </div>
                <div class="col-xs-6 col-sm-4">
                    <a class="bootcards-summary-item" href="/resources/interactions">
                        <i class="fa fa-3x glyphicon glyphicon-th-list"></i>
                        <h4>Recursos por Aluno<span class="label label-danger"></span></h4>
                    </a>
                </div>


                <div class="col-xs-6 col-sm-4">
                    <a class="bootcards-summary-item" href="/generaldata">
                        <i class="fa fa-3x glyphicon glyphicon-file"></i>
                        <h4>Dados Gerais<span class="label label-danger"></span></h4>
                    </a>
                </div>
                <div class="col-xs-6 col-sm-4">
                    <a class="bootcards-summary-item" href="/correlation">
                        <i class="fa fa-3x glyphicon glyphicon-random"></i>
                        <h4>Correlação<span class="label label-danger"></span></h4>
                    </a>
                </div>
                <div class="col-xs-6 col-sm-4">
                    <a class="bootcards-summary-item" href="/regression">
                        <i class="fa fa-3x glyphicon glyphicon-arrow-left"></i>
                        <h4>Regressão<span class="label label-danger"></span></h4>
                    </a>
                </div>
                <div class="col-xs-6 col-sm-4">
                    <a class="bootcards-summary-item" href="/timeresponse">
                        <i class="fa fa-3x glyphicon glyphicon-time"></i>
                        <h4>Tempo de Resposta<span class="label label-danger"></span></h4>
                    </a>
                </div>
                <div class="col-xs-6 col-sm-4">
                    <a class="bootcards-summary-item" href="/graph">
                        <i class="fa fa-3x glyphicon glyphicon-stats"></i>
                        <h4>Gráfico de desempenho<span class="label label-danger"></span></h4>
                    </a>
                </div>

            </div>
        </div>

    </div>


@stop
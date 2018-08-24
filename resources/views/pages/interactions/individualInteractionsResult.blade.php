@extends('layouts.default')

<head>
    <title>Recursos do Sistema</title>
</head>

@section('content')
    <div class="panel panel-default">
        <div class="panel-heading">
            <h3 class="panel-title">Lista de recursos educacionais</h3>
        </div>
        <div class="panel-body">
           teste
           Quantidade de recursos não visualizados: {{count($resources['notVisualized'])}}<br>
           Quantidade de recursos sem interação: {{count($resources['notInteracted'])}}<br>
           Quantidade de recursos não resolvidos: <br>
           Quantidade de recursos resolvidos: <br>
        </div>
        <div class="panel-footer">
            <small>Built with Bootcards - Table Card</small>
        </div>
    </div>

@stop
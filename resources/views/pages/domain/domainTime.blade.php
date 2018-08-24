@extends('layouts.default')

<head>
    <title>Tempo de resposta</title>
</head>

@section('content')
    <div class="panel panel-default">
        <div class="panel-heading"><h1>Tempo das respostas da disciplina {{$d[0]->domains_id}}:</h1></div>
        <table class="table table-hover">
                <tbody>
                    <tr>
                        <td>Quantidade de questões feitas</td>
                        <td>{{$d[0]->counting}}</td>
                    </tr>
                    <tr>
                        <td>Tempo muito acima da média</td>
                        <td>{{$d[0]->SE*100}}%</td>
                    </tr>
                    <tr>
                        <td>Tempo acima da média</td>
                        <td>{{$d[0]->SM*100}}%</td>
                    </tr>
                    <tr>
                        <td>Tempo na média</td>
                        <td>{{$d[0]->NORMAL*100}}%</td>
                    </tr>
                    <tr>
                        <td>Tempo abaixo da média</td>
                        <td>{{$d[0]->IM*100}}%</td>
                    </tr>
                    <tr>
                        <td>Tempo muito abaixo da média</td>
                        <td>{{$d[0]->IE*100}}%</td>
                    </tr>
                    <tr>
                        <td>Sem parâmetro</td>
                        <td>{{$d[0]->NO_EXIST*100}}%</td>
                    </tr>
                </tbody>

            </table>       
        </div>
    </div>

@stop
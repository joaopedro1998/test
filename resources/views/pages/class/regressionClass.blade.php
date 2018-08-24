@extends('layouts.default')

<head>
    <title>Regressão</title>
</head>

@section('content')
    <div class="panel panel-default">
        <div class="panel-heading"><h1>Regressão por Classe</h1></div>
       
        <table class="table table-hover">
            <thead>
                <tr>
                    <th>Interação</th>
                    <th>Regressão</th>
                </tr>
            </thead>

            <tbody>
                <tr>
                    <td>PDF</td>
                    <td>{{$s[0]->pdf}}</td>
                </tr>
                <tr>
                    <td>Vídeos</td>
                    <td>{{$s[0]->video}}</td>
                </tr>
                <tr>
                    <td>Questões feitas</td>
                    <td>{{$s[0]->questoesFeitas}}</td>
                </tr>
                <tr>
                    <td>Questões Corretas</td>
                    <td>{{$s[0]->questoesCorretas}}</td>
                </tr>
                <tr>
                    <td>Logins</td>
                    <td>{{$s[0]->logins}}</td>
                </tr>
                <tr>
                    <td>Mensagens</td>
                    <td>{{$s[0]->mensagens}}</td>
                </tr>
                <tr>
                    <td>Chats</td>
                    <td>{{$s[0]->chat}}</td>
                </tr>
                <tr>
                    <td>Atividades</td>
                    <td>{{$s[0]->atividades}}</td>
                </tr>
                <tr>
                    <td>Desempenho</td>
                    <td>{{$s[0]->RSquaredDesempenho}}</td>
                </tr>
            </tbody>

        </table>
      </div>

    </div>



@stop
@extends('layouts.default')

<head>
    <title>Correlação</title>
</head>

@section('content')
    <div class="panel panel-default">
        <div class="panel-heading"><h1>Correlação da turma</h1></div>
        <table class="table table-hover">
            <thead>
                <tr>
                    <th>Interações correlacionadas</th>
                    <th>Valoe</th>
                </tr>
            </thead>

            <tbody>
                <tr>
                    <td>Desempenho/Trofeu</td>
                    <td>{{$c[0]->trofeu}}</td>
                </tr>
                <tr>
                    <td>Desempenho/Pontuação</td>
                    <td>{{$c[0]->pontos}}</td>
                </tr>
                <tr>
                    <td>Desempenho/Logins</td>
                    <td>{{$c[0]->logins}}</td>
                </tr>
            </tbody>

        </table>
        </div>


    </div>



@stop
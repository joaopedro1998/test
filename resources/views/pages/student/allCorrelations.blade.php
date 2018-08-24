@extends('layouts.default')

<head>
    <title>Correlação</title>
</head>

@section('content')
    <div class="panel panel-default">
        <div class="panel-heading"><h1>Correlação de todos estudantes</h1></div>
        <table class="table table-hover">
                <thead>
                    <tr>
                        <th>Interações correlacionadas</th>
                        <th>Valor</th>
                    </tr>
                </thead>

                <tbody>
                    <tr>
                        <td>Desempenho/Trofeu</td>
                        <td>{{$correlationlist[0]->byTropheu}}</td>
                    </tr>
                    <tr>
                        <td>Desempenho/Pontuação</td>
                        <td>{{$correlationlist[0]->byPoints}}</td>
                    </tr>
                    <tr>
                        <td>Desempenho/Logins</td>
                        <td>{{$correlationlist[0]->byLogin}}</td>
                    </tr>
                </tbody>

            </table>
        </div>


    </div>



@stop
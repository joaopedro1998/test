@extends('layouts.default')

<head>
    <title>Regressão</title>
</head>

@section('content')
    <div class="panel panel-default">
        <div class="panel-heading"><h1>Dados do estudante:</h1></div>
            <div class="table-responsive">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>Interação</th>
                            <th>Quantidade de vezes</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>PDF</td>
                            <td>{{$s[0]->qnt_viewed_pdfs}}</td>
                        </tr>
                        <tr>
                            <td>Vídeos</td>
                            <td>{{$s[0]->qnt_viewed_videos}}</td>
                        </tr>
                        <tr>
                            <td>Questões feitas</td>
                            <td>{{$s[0]->qnt_solved_problems}}</td>
                        </tr>
                        <tr>
                            <td>Logins</td>
                            <td>{{$s[0]->qnt_logins}}</td>
                        </tr>
                        <tr>
                            <td>Mensagens</td>
                            <td>{{$s[0]->qnt_messages}}</td>
                        </tr>
                        <tr>
                            <td>Chats</td>
                            <td>{{$s[0]->qnt_chats}}</td>
                        </tr>
                        <tr>
                            <td>Atividades</td>
                            <td>{{$s[0]->qnt_activityloops}}</td>
                        </tr>
                        <tr>
                            <td>Troféus</td>
                            <td>{{$s[0]->qnt_badges}}</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>


@stop
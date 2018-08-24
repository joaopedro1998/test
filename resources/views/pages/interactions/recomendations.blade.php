@extends('layouts.default')

<head>
    <title>Recomendações</title>
</head>

@section('content')
    <div class="panel-heading"><h1>Recomendações</h1></div>
    <div class="panel-body">

        <div class="panel panel-default">

            <br>
            @if(empty($data['recomendations']))
                <h3>A consulta não retornou resultados!</h3>
            @else
                <div class="panel panel-default">
                    <label>{{$data['domainInfo']['domain_name']}} / {{$data['classInfo']['class_name']}} / {{$data['userId']}}</label>
                    <br>
                    @if(!empty($data['recomendations']['problems']))
                    <h2>Problemas</h2>
                    <table class="table">
                        <thead>
                        <tr>
                            <th scope="col">ID do Problema</th>
                            <th scope="col">Disciplina</th>
                            <th scope="col">Assunto</th>
                            <th scope="col">Dificuldade</th>
                        </tr>
                        </thead>

                        <tbody>
                        @for($i=0; $i < count($data['recomendations']['problems']); $i++)
                        <tr>
                            <td>{{$data['recomendations']['problems'][$i]->resource_id}}</td>
                            <td>{{$data['recomendations']['problems'][$i]->domain_name}}</td>
                            <td>{{$data['recomendations']['problems'][$i]->topic_name}}</td>
                            <td>
                                @if($data['recomendations']['problems'][$i]->resource_difficulty == -2)
                                Muito Fácil
                                @elseif($data['recomendations']['problems'][$i]->resource_difficulty == -1)
                                Fácil
                                @elseif($data['recomendations']['problems'][$i]->resource_difficulty == 0)
                                Médio
                                @elseif($data['recomendations']['problems'][$i]->resource_difficulty == 1)
                                Difícil
                                @elseif($data['recomendations']['problems'][$i]->resource_difficulty == 2)
                                Muito Difícil
                                @endif
                            </td>
                        </tr>
                        @endfor
                        </tbody>
                    </table>
                    @endif
                    @if(!empty($data['recomendations']['pdfs']))
                    <h2>PDFs</h2>
                    <table class="table">
                        <thead>
                        <tr>
                            <th scope="col">ID do PDF</th>
                            <th scope="col">Disciplina</th>
                            <th scope="col">Assunto</th>
                            <th scope="col">Título</th>
                        </tr>
                        </thead>

                        <tbody>
                        @for($i=0; $i < count($data['recomendations']['pdfs']); $i++)
                        <tr>
                            <td>{{$data['recomendations']['pdfs'][$i]->resource_id}}</td>
                            <td>{{$data['recomendations']['pdfs'][$i]->domain_name}}</td>
                            <td>{{$data['recomendations']['pdfs'][$i]->topic_name}}</td>
                            <td>{{$data['recomendations']['pdfs'][$i]->resource_title}}</td>
                        </tr>
                        @endfor
                        </tbody>
                    </table>
                    @endif
                    @if(!empty($data['recomendations']['videos']))
                    <h2>Vídeos</h2>
                    <table class="table">
                        <thead>
                        <tr>
                            <th scope="col">ID do Vídeo</th>
                            <th scope="col">Disciplina</th>
                            <th scope="col">Assunto</th>
                            <th scope="col">Título</th>
                            <th scope="col">Duração</th>
                        </tr>
                        </thead>

                        <tbody>
                        @for($i=0; $i < count($data['recomendations']['videos']); $i++)
                        <tr>
                            <td>{{$data['recomendations']['videos'][$i]->resource_id}}</td>
                            <td>{{$data['recomendations']['videos'][$i]->domain_name}}</td>
                            <td>{{$data['recomendations']['videos'][$i]->topic_name}}</td>
                            <td>{{$data['recomendations']['videos'][$i]->resource_title}}</td>
                            <td>{{$data['recomendations']['videos'][$i]->resource_duration}}</td>
                        </tr>
                        @endfor
                        </tbody>
                    </table>
                    @endif
                </div>
            @endif
        </div>
        <div class="col-sm-offset-5 col-sm-10">
            <a href="{{URL::previous()}}"><button class="btn btn-default"><h3>Voltar</h3></button></a>
            <a href="/interactions/saveRecomendations"><button class="btn btn-primary" name="confirm"><h3>Confirmar</h3></button></a>
        </div>
    </div>
    <div class="panel-footer"></div>

@stop

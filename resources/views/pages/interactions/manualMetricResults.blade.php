@extends('layouts.default')

<head>
    <title>Definição de valores para Interações</title>
</head>

@section('content')
    <div class="panel panel-default">
        <div class="panel-heading">Situações Pedagógicas</div>

        <div class="panel panel-default">

            <br>
            @if(empty($data['sessionData']['resource']))
                <h3>A consulta não retornou resultados!</h3>
            @else
                <div class="panel panel-default">
                    <label>Turma: {{$data['sessionData']['classInfo']['class_name']}}</label>
                    <br>
                    <table class="table">

                        <thead>
                        <tr>
                            <th scope="col">ID do Aluno</th>
                            @if($data['sessionData']['checkboxOptions']['content'])
                                <th scope="col">Conteúdos em pdf vistos</th>
                            @endif
                            @if($data['sessionData']['checkboxOptions']['video'])
                                <th scope="col">Vídeos assistidos</th>
                            @endif
                            @if($data['sessionData']['checkboxOptions']['problem'])
                                <th scope="col">Problemas resolvidos</th>
                            @endif
                            @if($data['sessionData']['checkboxOptions']['login'])
                                <th scope="col">Acessos ao sistema</th>
                            @endif
                            @if($data['sessionData']['checkboxOptions']['chat'])
                                <th scope="col">Chats</th>
                            @endif
                            @if($data['sessionData']['checkboxOptions']['messages'])
                                <th scope="col">Mensagens Trocadas</th>
                            @endif
                            @if($data['sessionData']['checkboxOptions']['activityLoop'])
                                <th scope="col">Activity Loops</th>
                            @endif
                            @if($data['sessionData']['checkboxOptions']['badge'])
                                <th scope="col">Badges</th>
                            @endif
                                <th>Opções</th>
                        </tr>
                        </thead>

                        <tbody>
                        @for($i=0; $i < count($data['sessionData']['resource']); $i++)

                            <tr>
                                <td>{{$data['sessionData']['resource'][$i]->user_id}}</td>

                                @if($data['sessionData']['checkboxOptions']['content']=='on')
                                    @php
                                        if($data['manualClassified']['classifiedPDFs'][$i] == 'green') $data['htmlClass'] = "bg-success";
                                        else if($data['manualClassified']['classifiedPDFs'][$i] == 'yellow') $data['htmlClass'] = "bg-warning";
                                        else if($data['manualClassified']['classifiedPDFs'][$i] == 'red') $data['htmlClass'] = "bg-danger";
                                    @endphp

                                    @if($data['sessionData']['resource'][$i]->qnt_viewed_pdfs=="")
                                        <td class="{{$data['htmlClass']}}">Valor desconhecido</td>
                                    @else
                                        <td class="{{$data['htmlClass']}}">{{$data['sessionData']['resource'][$i]->qnt_viewed_pdfs}}</td>
                                    @endif
                                @endif

                                @if($data['sessionData']['checkboxOptions']['video']=='on')
                                    @php
                                        if($data['manualClassified']['classifiedVideos'][$i] == 'green') $data['htmlClass'] = "bg-success";
                                        else if($data['manualClassified']['classifiedVideos'][$i] == 'yellow') $data['htmlClass'] = "bg-warning";
                                        else if($data['manualClassified']['classifiedVideos'][$i] == 'red') $data['htmlClass'] = "bg-danger";
                                    @endphp

                                    @if($data['sessionData']['resource'][$i]->qnt_viewed_videos=="")
                                        <td class="{{$data['htmlClass']}}">Valor desconhecido</td>
                                    @else
                                        <td class="{{$data['htmlClass']}}">{{$data['sessionData']['resource'][$i]->qnt_viewed_videos}}</td>
                                    @endif
                                @endif

                                @if($data['sessionData']['checkboxOptions']['problem']=='on')
                                    @php
                                        if($data['manualClassified']['classifiedProblems'][$i] == 'green') $data['htmlClass'] = "bg-success";
                                        else if($data['manualClassified']['classifiedProblems'][$i] == 'yellow') $data['htmlClass'] = "bg-warning";
                                        else if($data['manualClassified']['classifiedProblems'][$i] == 'red') $data['htmlClass'] = "bg-danger";
                                    @endphp

                                    @if($data['sessionData']['resource'][$i]->qnt_solved_problems=="")
                                        <td class="{{$data['htmlClass']}}">Valor desconhecido</td>
                                    @else
                                        <td class="{{$data['htmlClass']}}">{{$data['sessionData']['resource'][$i]->qnt_solved_problems}}</td>
                                    @endif
                                @endif

                                @if($data['sessionData']['checkboxOptions']['login']=='on')
                                    @php
                                        if($data['manualClassified']['classifiedLogins'][$i] == 'green') $data['htmlClass'] = "bg-success";
                                        else if($data['manualClassified']['classifiedLogins'][$i] == 'yellow') $data['htmlClass'] = "bg-warning";
                                        else if($data['manualClassified']['classifiedLogins'][$i] == 'red') $data['htmlClass'] = "bg-danger";
                                    @endphp

                                    @if($data['sessionData']['resource'][$i]->qnt_logins=="")
                                        <td class="{{$data['htmlClass']}}">Valor desconhecido</td>
                                    @else
                                        <td class="{{$data['htmlClass']}}">{{$data['sessionData']['resource'][$i]->qnt_logins}}</td>
                                    @endif
                                @endif

                                @if($data['sessionData']['checkboxOptions']['chat']=='on')
                                    @php
                                        if($data['manualClassified']['classifiedChats'][$i] == 'green') $data['htmlClass'] = "bg-success";
                                        else if($data['manualClassified']['classifiedChats'][$i] == 'yellow') $data['htmlClass'] = "bg-warning";
                                        else if($data['manualClassified']['classifiedChats'][$i] == 'red') $data['htmlClass'] = "bg-danger";
                                    @endphp

                                    @if($data['sessionData']['resource'][$i]->qnt_chats=="")
                                        <td class="{{$data['htmlClass']}}">Valor desconhecido</td>
                                    @else
                                        <td class="{{$data['htmlClass']}}">{{$data['sessionData']['resource'][$i]->qnt_chats}}</td>
                                    @endif
                                @endif

                                @if($data['sessionData']['checkboxOptions']['messages']=='on')
                                    @php
                                        if($data['manualClassified']['classifiedMessages'][$i] == 'green') $data['htmlClass'] = "bg-success";
                                        else if($data['manualClassified']['classifiedMessages'][$i] == 'yellow') $data['htmlClass'] = "bg-warning";
                                        else if($data['manualClassified']['classifiedMessages'][$i] == 'red') $data['htmlClass'] = "bg-danger";
                                    @endphp

                                    @if($data['sessionData']['resource'][$i]->qnt_messages=="")
                                        <td class="{{$data['htmlClass']}}">Valor desconhecido</td>
                                    @else
                                        <td class="{{$data['htmlClass']}}">{{$data['sessionData']['resource'][$i]->qnt_messages}}</td>
                                    @endif
                                @endif

                                @if($data['sessionData']['checkboxOptions']['activityLoop']=='on')
                                    @php
                                        if($data['manualClassified']['classifiedActivityLoops'][$i] == 'green') $data['htmlClass'] = "bg-success";
                                        else if($data['manualClassified']['classifiedActivityLoops'][$i] == 'yellow') $data['htmlClass'] = "bg-warning";
                                        else if($data['manualClassified']['classifiedActivityLoops'][$i] == 'red') $data['htmlClass'] = "bg-danger";
                                    @endphp

                                    @if($data['sessionData']['resource'][$i]->qnt_activityloops=="")
                                        <td class="{{$data['htmlClass']}}">Valor desconhecido</td>
                                    @else
                                        <td class="{{$data['htmlClass']}}">{{$data['sessionData']['resource'][$i]->qnt_activityloops}}</td>
                                    @endif
                                @endif

                                @if($data['sessionData']['checkboxOptions']['badge']=='on')
                                    @php
                                        if($data['manualClassified']['classifiedBadges'][$i] == 'green') $data['htmlClass'] = "bg-success";
                                        else if($data['manualClassified']['classifiedBadges'][$i] == 'yellow') $data['htmlClass'] = "bg-warning";
                                        else if($data['manualClassified']['classifiedBadges'][$i] == 'red') $data['htmlClass'] = "bg-danger";
                                    @endphp

                                    @if($data['sessionData']['resource'][$i]->qnt_badges=="")
                                        <td class="{{$data['htmlClass']}}">Valor desconhecido</td>
                                    @else
                                        <td class="{{$data['htmlClass']}}">{{$data['sessionData']['resource'][$i]->qnt_badges}}</td>
                                    @endif
                                @endif

                                <td><a href="/interactions/generateRecomendations/{{$data['sessionData']['domainInfo']['domain_id']}}/{{$data['sessionData']['classInfo']['class_id']}}/{{$data['sessionData']['resource'][$i]->user_id}}">Recomendar</a></td>
                            </tr>
                        @endfor

                        </tbody>
                    </table>

                </div>
            @endif
            <a class="btn btn-default" href="{{url('/interactions')}}">VOLTAR</a>

        </div>

        <div class="panel-footer"></div>

        <div class="panel panel-default">
            <div class="panel-heading"><h1>Pré-Processamento</h1></div>
            <div class="panel-body">

                <form class="form-horizontal" name="formTeacherMetricDefinition" method="get" action="{{ url('/interactions/pre_processing/result') }}">


                    <div class="form-group">
                        <div class="col-sm-offset-0 col-sm-10">

                            <label>
                                <input type="checkbox" name="noInteractions"> Remover alunos sem nenhuma interação
                            </label>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-sm-offset-0 col-sm-10">
                            <label>
                                <input type="checkbox" name="outliers"> Remover extremos(remove os 5% melhores e piores)
                            </label>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-sm-offset-5 col-sm-10">
                            <button type="submit" class="btn btn-default"><h3>Filtrar</h3></button>
                        </div>
                    </div>

                </form>


                <a class="btn btn-default" href="{{url('/interactions')}}">VOLTAR</a>
            </div>

            <div class="panel-footer"></div>

    </div>

@stop

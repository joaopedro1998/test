@extends('layouts.default')

<head>
    <title>Interações</title>
</head>

@section('content')
    <div class="panel-heading"><h1>Interações</h1></div>
    <div class="panel-body">

        <div class="panel panel-default">

            <br>
            @if(empty($data['resource']))
                <h3>A consulta não retornou resultados!</h3>
            @else
                <div class="panel panel-default">
                    <label>{{$data['domainInfo']['domain_name']}} / {{$data['classInfo']['class_name']}}</label>
                    <br>
                    <table class="table">

                        <thead>
                        <tr>
                            <th scope="col">ID do Aluno</th>
                            @if($data['checkboxOptions']['content'])
                                <th scope="col">Conteúdos em pdf vistos</th>
                            @endif
                            @if($data['checkboxOptions']['video'])
                                <th scope="col">Vídeos assistidos</th>
                            @endif
                            @if($data['checkboxOptions']['problem'])
                                <th scope="col">Problemas resolvidos</th>
                            @endif
                            @if($data['checkboxOptions']['login'])
                                <th scope="col">Acessos ao sistema</th>
                            @endif
                            @if($data['checkboxOptions']['chat'])
                                <th scope="col">Chats</th>
                            @endif
                            @if($data['checkboxOptions']['messages'])
                                <th scope="col">Mensagens Trocadas</th>
                            @endif
                            @if($data['checkboxOptions']['activityLoop'])
                                <th scope="col">Activity Loops</th>
                            @endif
                            @if($data['checkboxOptions']['badge'])
                                <th scope="col">Badges</th>
                            @endif
                                <th>Opções</th>
                        </tr>
                        </thead>

                        <tbody>
                        @for($i=0; $i < count($data['resource']); $i++)

                            <tr>
                                <td><a href="/individualInteractions/resources?domain={{$data['domainInfo']['domain_id']}}&class={{$data['classInfo']['class_id']}}&student={{$data['resource'][$i]->user_id}}"> {{$data['resource'][$i]->user_id}} </a> </td>

                                @if($data['checkboxOptions']['content']=='on')
                                    @php
                                        if($data['classified']['classifiedPDFs'][$i] == 'green') $data['htmlClass'] = "bg-success";
                                        else if($data['classified']['classifiedPDFs'][$i] == 'yellow') $data['htmlClass'] = "bg-warning";
                                        else if($data['classified']['classifiedPDFs'][$i] == 'red') $data['htmlClass'] = "bg-danger";
                                    @endphp

                                    @if($data['resource'][$i]->qnt_viewed_pdfs=="")
                                        <td class="{{$data['htmlClass']}}">Valor desconhecido</td>
                                    @else
                                        <td class="{{$data['htmlClass']}}">{{$data['resource'][$i]->qnt_viewed_pdfs}}</td>
                                    @endif
                                @endif

                                @if($data['checkboxOptions']['video']=='on')
                                    @php
                                        if($data['classified']['classifiedVideos'][$i] == 'green') $data['htmlClass'] = "bg-success";
                                        else if($data['classified']['classifiedVideos'][$i] == 'yellow') $data['htmlClass'] = "bg-warning";
                                        else if($data['classified']['classifiedVideos'][$i] == 'red') $data['htmlClass'] = "bg-danger";
                                    @endphp

                                    @if($data['resource'][$i]->qnt_viewed_videos=="")
                                        <td class="{{$data['htmlClass']}}">Valor desconhecido</td>
                                    @else
                                        <td class="{{$data['htmlClass']}}">{{$data['resource'][$i]->qnt_viewed_videos}}</td>
                                    @endif
                                @endif

                                @if($data['checkboxOptions']['problem']=='on')
                                    @php
                                        if($data['classified']['classifiedProblems'][$i] == 'green') $data['htmlClass'] = "bg-success";
                                        else if($data['classified']['classifiedProblems'][$i] == 'yellow') $data['htmlClass'] = "bg-warning";
                                        else if($data['classified']['classifiedProblems'][$i] == 'red') $data['htmlClass'] = "bg-danger";
                                    @endphp

                                    @if($data['resource'][$i]->qnt_solved_problems=="")
                                        <td class="{{$data['htmlClass']}}">Valor desconhecido</td>
                                    @else
                                        <td class="{{$data['htmlClass']}}">{{$data['resource'][$i]->qnt_solved_problems}}</td>
                                    @endif
                                @endif

                                @if($data['checkboxOptions']['login']=='on')
                                    @php
                                        if($data['classified']['classifiedLogins'][$i] == 'green') $data['htmlClass'] = "bg-success";
                                        else if($data['classified']['classifiedLogins'][$i] == 'yellow') $data['htmlClass'] = "bg-warning";
                                        else if($data['classified']['classifiedLogins'][$i] == 'red') $data['htmlClass'] = "bg-danger";
                                    @endphp

                                    @if($data['resource'][$i]->qnt_logins=="")
                                        <td class="{{$data['htmlClass']}}">Valor desconhecido</td>
                                    @else
                                        <td class="{{$data['htmlClass']}}">{{$data['resource'][$i]->qnt_logins}}</td>
                                    @endif
                                @endif

                                @if($data['checkboxOptions']['chat']=='on')
                                    @php
                                        if($data['classified']['classifiedChats'][$i] == 'green') $data['htmlClass'] = "bg-success";
                                        else if($data['classified']['classifiedChats'][$i] == 'yellow') $data['htmlClass'] = "bg-warning";
                                        else if($data['classified']['classifiedChats'][$i] == 'red') $data['htmlClass'] = "bg-danger";
                                    @endphp

                                    @if($data['resource'][$i]->qnt_chats=="")
                                        <td class="{{$data['htmlClass']}}">Valor desconhecido</td>
                                    @else
                                        <td class="{{$data['htmlClass']}}">{{$data['resource'][$i]->qnt_chats}}</td>
                                    @endif
                                @endif

                                @if($data['checkboxOptions']['messages']=='on')
                                    @php
                                        if($data['classified']['classifiedMessages'][$i] == 'green') $data['htmlClass'] = "bg-success";
                                        else if($data['classified']['classifiedMessages'][$i] == 'yellow') $data['htmlClass'] = "bg-warning";
                                        else if($data['classified']['classifiedMessages'][$i] == 'red') $data['htmlClass'] = "bg-danger";
                                    @endphp

                                    @if($data['resource'][$i]->qnt_messages=="")
                                        <td class="{{$data['htmlClass']}}">Valor desconhecido</td>
                                    @else
                                        <td class="{{$data['htmlClass']}}">{{$data['resource'][$i]->qnt_messages}}</td>
                                    @endif
                                @endif

                                @if($data['checkboxOptions']['activityLoop']=='on')
                                    @php
                                        if($data['classified']['classifiedActivityLoops'][$i] == 'green') $data['htmlClass'] = "bg-success";
                                        else if($data['classified']['classifiedActivityLoops'][$i] == 'yellow') $data['htmlClass'] = "bg-warning";
                                        else if($data['classified']['classifiedActivityLoops'][$i] == 'red') $data['htmlClass'] = "bg-danger";
                                    @endphp

                                    @if($data['resource'][$i]->qnt_activityloops=="")
                                        <td class="{{$data['htmlClass']}}">Valor desconhecido</td>
                                    @else
                                        <td class="{{$data['htmlClass']}}">{{$data['resource'][$i]->qnt_activityloops}}</td>
                                    @endif
                                @endif

                                @if($data['checkboxOptions']['badge']=='on')
                                    @php
                                        if($data['classified']['classifiedBadges'][$i] == 'green') $data['htmlClass'] = "bg-success";
                                        else if($data['classified']['classifiedBadges'][$i] == 'yellow') $data['htmlClass'] = "bg-warning";
                                        else if($data['classified']['classifiedBadges'][$i] == 'red') $data['htmlClass'] = "bg-danger";
                                    @endphp

                                    @if($data['resource'][$i]->qnt_badges=="")
                                        <td class="{{$data['htmlClass']}}">Valor desconhecido</td>
                                    @else
                                        <td class="{{$data['htmlClass']}}">{{$data['resource'][$i]->qnt_badges}}</td>
                                    @endif
                                @endif

                                <td><a href="/interactions/generateRecomendations/{{$data['domainInfo']['domain_id']}}/{{$data['classInfo']['class_id']}}/{{$data['resource'][$i]->user_id}}">Recomendar</a></td>
                            </tr>
                        @endfor

                        </tbody>
                    </table>

                </div>
            @endif

        </div>

    </div>
    <div class="panel-footer"></div>


    <div class="panel panel-default">
        <div class="panel-heading"><h1>Definição de Quantidades Recomendadas</h1></div>
        <div class="panel-body">

            <form class="form-horizontal" name="formTeacherMetricDefinition" method="get" action="{{ url('/interactions/manualMetricResources') }}">

                @if($data['checkboxOptions']['content'])
                    <div class="form-group">
                        <div class="col-sm-offset-0 col-sm-10">
                            <div class="checkbox">
                                <label>
                                    Quantidade recomendada de conteudo assistido <input type="number" min="0"  value="5" name="qntContent">
                                </label>
                            </div>
                        </div>
                    </div>
                @endif

                @if($data['checkboxOptions']['video']=='on')
                    <div class="form-group">
                        <div class="col-sm-offset-0 col-sm-10">
                            <div class="checkbox">
                                <label>
                                   Quantidade recomendada de videos assistidos <input type="number" min=""  value="5" name="qntVideo">
                                </label>
                            </div>
                        </div>
                    </div>
                 @endif

                @if($data['checkboxOptions']['problem']=='on')
                    <div class="form-group">
                        <div class="col-sm-offset-0 col-sm-10">
                            <div class="checkbox">
                                <label>
                                    Quantidade recomendada de problemas resolvidos<input type="number" min="0"  value="5" name="qntProblem">
                                </label>
                            </div>
                        </div>
                    </div>
                @endif

                @if($data['checkboxOptions']['login']=='on')
                    <div class="form-group">
                        <div class="col-sm-offset-0 col-sm-10">
                            <div class="checkbox">
                                <label>
                                    Quantidade recomendada de acessos<input type="number" min="0"  value="5" name="qntRecLogin">
                                </label>
                            </div>
                        </div>
                    </div>
                @endif

                @if($data['checkboxOptions']['chat']=='on')
                    <div class="form-group">
                        <div class="col-sm-offset-0 col-sm-10">
                            <div class="checkbox">
                                <label>
                                    Quantidade recomendada de chats feitos<input type="number" min="0"  value="5" name="qntChat">
                                </label>
                            </div>
                        </div>
                    </div>
                @endif

                @if($data['checkboxOptions']['messages']=='on')
                    <div class="form-group">
                        <div class="col-sm-offset-0 col-sm-10">
                            <div class="checkbox">
                                <label>
                                    Quantidade recomentada de mensagens trocadas<input type="number" min="0"  value="5" name="qntMessages">
                                </label>
                            </div>
                        </div>
                    </div>
                @endif

                @if($data['checkboxOptions']['activityLoop']=='on')
                    <div class="form-group">
                        <div class="col-sm-offset-0 col-sm-10">
                            <div class="checkbox">
                                <label>
                                    Quantidade recomendada de activity loops<input type="number" min="0"  value="5" name="qntActivity_loop">
                                </label>
                            </div>
                        </div>
                    </div>
                @endif

                @if($data['checkboxOptions']['badge']=='on')
                    <div class="form-group">
                        <div class="col-sm-offset-0 col-sm-10">
                            <div class="checkbox">
                                <label>
                                    Quantidade recomendada de badges <input type="number" min="0"  value="5" name="qntBadges">
                                </label>
                            </div>
                        </div>
                    </div>
                @endif


                <div class="form-group">
                    <div class="col-sm-offset-5 col-sm-10">
                        <button type="submit" class="btn btn-default"><h3>Enviar</h3></button>
                    </div>
                </div>

            </form>


            <a class="btn btn-default" href="{{url('/interactions')}}">VOLTAR</a>
        </div>

        <div class="panel-footer"></div>


    </div>

@stop

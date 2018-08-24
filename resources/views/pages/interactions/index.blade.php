@extends('layouts.default')

<head>
    <title>Interações</title>
</head>

@section('content')
    <div class="panel panel-default">
        <div class="panel-heading"><h1>Interações</h1></div>
        <div class="panel-body">

            <form class="form-horizontal" name="formResourceType" method="get" action="{{ url('/interactions/resources') }}">

                <div class="form-group">
                    <label for="sel1">Selecione a disciplina:
                        <select class="form-control" id="domain" name="domain">
                            @foreach($data['domainlist'] as $d)
                                <option>{{ $d->id }}|{{ $d->name }}</option>
                            @endforeach

                        </select>
                    </label>
                    <label for="sel1">Selecione a turma:
                        <select class="form-control" id="class" name="class">
                            @foreach($data['classlist'] as $c)
                                <option>{{ $c->name }}</option>
                            @endforeach

                        </select>
                    </label>
                </div>

                <div class="form-group">
                    <label for="sel1">Selecione o periodo de interações:</label>
                    <label>Data Inicial:<input class="form-control" type="date"  id="period_initial_date" name="period_initial_date"></label>
                    <label>Data Final:<input class="form-control" type="date"  id="period_final_date" name="period_final_date"></label>
                </div>

                <fildset>


                    <fildset>
                        <legend>Interações Individuais</legend>
                        <div class="form-group">
                            <div class="col-sm-offset-0 col-sm-10">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="content"> Conteúdos vistos
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-sm-offset-0 col-sm-10">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="video"> Vídeos assistidos
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-sm-offset-0 col-sm-10">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="problem"> Problemas respondidos
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-sm-offset-0 col-sm-10">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="qntLogin"> Quantidade de acessos
                                    </label>
                                </div>
                            </div>
                        </div>
                    </fildset>
                    <fildset>
                        <legend>Interações Sociais</legend>
                        <div class="form-group">
                            <div class="col-sm-offset-0 col-sm-10">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="chat"> Quantidade de chats
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-sm-offset-0 col-sm-10">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="messages"> Mensagens trocadas
                                    </label>
                                </div>
                            </div>
                        </div>
                    </fildset>
                    <fildset>
                        <legend>Interações de Gamificação</legend>
                        <div class="form-group">
                            <div class="col-sm-offset-0 col-sm-10">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="activity_loop"> Activity Loops
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-sm-offset-0 col-sm-10">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="badges"> Badges
                                    </label>
                                </div>
                            </div>
                        </div>
                    </fildset>


                </fildset>



                <div class="form-group">
                    <div class="col-sm-offset-5 col-sm-10">
                        <button type="submit" class="btn btn-default"><h3>Buscar</h3></button>
                    </div>
                </div>

            </form>



        </div>

        <div class="panel-footer"></div>


    </div>

    <div class="panel panel-default">
        <div class="panel-heading clearfix">
            <h3 class="panel-title pull-left">Form Card Title</h3>
            <div class="btn-group pull-right">
                <button class="btn btn-danger">
                    <i class="fa fa-times"></i>
                    Cancel
                </button>
                <button class="btn btn-success">
                    <i class="fa fa-check"></i>
                    Save
                </button>
            </div>
        </div>
        <div class="modal-body">
            <form class="form-horizontal">
                <div class="form-group">
                    <label class="col-xs-3 control-label">Selecione a turma</label>
                    <div class="col-xs-9">
                        <select class="form-control" id="class" name="class">
                            @foreach($data['classlist'] as $c)
                                <option>{{ $c->name }}</option>
                            @endforeach

                        </select>
                    </div>
                </div>

                <div class="form-group">
                    <label for="sel1" class="col-xs-3 control-label">Selecione o periodo de interações</label>
                    <div class="col-xs-9">
                        <label>Data Inicial:<input class="form-control" type="date"  id="period_initial_date" name="period_initial_date"></label>
                        <label>Data Final:<input class="form-control" type="date"  id="period_final_date" name="period_final_date"></label>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-xs-3 control-label">Name</label>
                    <div class="col-xs-9">
                        <input type="text" class="form-control" value="John Smith">
                    </div>
                </div>
            </form>
        </div>
    </div>

    <div class="panel panel-default">
        <div class="panel-heading clearfix">
            <h3 class="panel-title pull-left">Card Title</h3>
            <a class="btn btn-default pull-right" href="#">
                <i class="fa fa-check"></i>
                Button
            </a>
        </div>
        <div class="panel-body">
            <p>Card content...</p>
        </div>
        <div class="panel-footer">
            <small>Card footer...</small>
        </div>
    </div>


@stop

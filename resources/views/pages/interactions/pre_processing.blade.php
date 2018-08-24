@extends('layouts.default')

<head>
    <title>Interações</title>
</head>

@section('content')
    <div class="panel panel-default">
        <div class="panel-heading"><h1>Pré-Processamento</h1></div>
        <div class="panel-body">

            <form class="form-horizontal" name="formResourceType" method="get" action="{{ url('')}}">

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



@stop
@extends('layouts.default')

<head>
    <title>Regressão</title>
</head>

@section('content')
    <div class="panel panel-default">
        <div class="panel-heading"><h1>Dados da turma:</h1>
        <a href="/timeresponse"><i class="back fa fa-arrow-left" style="font-size:30px;color:#008fb2"></i></a></div>
        <div class="panel-body">
            <form class="form-horizontal" name="formResourceType" method="get" action="{{ url('/timeClass') }}">


                <div class="form-group">
                    <label for="sel1">Selecione a Turma:
                        <select class="form-control" id="class" name="class">
                            @foreach($classList as $c)
                                <option>{{ $c->name }}</option>
                            @endforeach

                        </select>
                    </label>
                </div>
                <div class="form-group">
                    <label for="sel1">Selecione o periodo de interações:</label>
                    <label>Data Inicial:<input class="form-control" type="date"  id="period_initial_date" name="initial"></label>
                    <label>Data Final:<input class="form-control" type="date"  id="period_final_date" name="end"></label>
                </div>
                <div class="form-group">
                    <div class="col-sm-offset-5 col-sm-10">
                        <button type="submit" class="btn btn-default"><h3>Buscar</h3></button>
                    </div>
                </div>
            </form>
                
        </div>


    </div>



@stop
@extends('layouts.default')


<head>
    <title>Gŕafico de Desemepenho</title>
</head>


@section('content')
    <div class="panel panel-default">
        <div class="panel-heading"><h1>Dados do Aluno e Disciplina:</h1><a href="/graph"><i class="back fa fa-arrow-left" style="font-size:30px;color:#008fb2"></i></a></div>
        
        <div class="panel-body">
            <form class="form-horizontal" name="formResourceType" method="get" action="{{ url('/studentAndDomainToGraph') }}">


                <div class="form-group">
                    <label for="sel1">Selecione o Aluno:
                        <select class="form-control" id="class" name="student">
                            @foreach($studentList as $s)
                                <option>{{ $s->student_id }}</option>
                            @endforeach

                        </select>
                    </label>
                </div>
                <div class="form-group">
                    <label for="sel1">Selecione a Disciplina:
                        <select class="form-control" id="class" name="domain">
                            @foreach($domainList as $d)
                                <option>{{ $d->id }}</option>
                            @endforeach

                        </select>
                    </label>
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
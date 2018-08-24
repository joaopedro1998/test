@extends('layouts.default')

<head>
    <title>Gŕafico de Desemepenho</title>
</head>

@section('content')
    <div class="panel panel-default">
    <div class="panel-heading" style="text-align:center"><h1>Gŕafico do estudante:</h1></div>
        <div id="pop_div"></div>
        {!! $lava->render('AreaChart', 'test', 'pop_div') !!}
    </div>



@stop
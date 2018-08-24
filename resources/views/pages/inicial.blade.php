@extends('layouts.default')

<head>
    <title>Pagina Inicial</title>
</head>

@section('content')
<div class="panel panel-default">
    <div class="panel-heading head" ><h1>Faça uma consulta:</h1></div>
    <div class="panel-body">       
            <form class = "button" action="{{ url('/generaldata') }}">
                <button class="bigbutton" type="submit" >Dados Gerais</button>
            </form>
            <form class = "button" action="{{ url('/correlation') }}">
                <button class="bigbutton" type="submit" >Correlação</button>
            </form>
            <form class = "button" action="{{ url('/regression') }}">
                <button class="bigbutton" type="submit" >Regressão</button>
            </form>
            <form class = "button" action="{{ url('/timeresponse') }}">
                <button class="bigbutton" type="submit" >Tempo de resposta</button>
            </form>
            <form class = "button" action="{{ url('/graph') }}">
                <button class="bigbutton" type="submit" >Grafico de desempenho</button>
            </form>
        </div>
       
    </div>


</div>

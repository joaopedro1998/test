@extends('layouts.default')

<head>
    <title>Pagina Inicial</title>
    <link rel="stylesheet" href="<?php echo asset('css/app2.css')?>" type="text/css">
</head>

@section('content')
<div class="panel panel-default">
    <div class="panel-heading" style="text-align:center"><h1>Escolha uma opção:</h1></div>
    <div class="panel-body">
        <h3 class="summary-text">Por aluno:</h3>
        <div class = "box">
            <form action="{{ url('/regression') }}">
                <input type="submit" value="Regressão" />
            </form>
            <form action="{{ url('/correlationAllStudents') }}">
                <input type="submit" value="Correlação(Todos os estudantes)" />
            </form>
            <form action="{{ url('/chooseStudentByDate') }}">
                <input type="submit" value="Dados por data" />
            </form>
            <form action="{{ url('/chooseStudentAllDate') }}">
                <input type="submit" value="Dados gerais" />
            </form>
            <form action="{{ url('/chooseTimeStudent') }}">
                <input type="submit" value="Tempo de resposta" />
            </form>
            <form action="{{ url('/chooseStudentToGraph') }}">
                <input type="submit" value="Grafico de desempenho" />
            </form>
        </div>
        <h3 class="summary-text">Por turma:</h3>
        <div class="box" >
            <form action="{{ url('/chooseClass') }}">
                <input type="submit" value="Regressão" />
            </form>
            <form action="{{ url('/chooseClassCorrelation') }}">
                <input type="submit" value="Correlação" />
            </form>
            <form action="{{ url('/chosseClassAllDate') }}">
                <input type="submit" value="Dados gerais" />
            </form>
            <form action="{{ url('/chooseClassByDate') }}">
                <input type="submit" value="Dados por data" />
            </form>
            <form action="{{ url('/chooseTimeClass') }}">
                <input type="submit" value="Tempo de resposta" />
            </form>
        </div>
        <h3 class="summary-text">Por matéria:</h3>
        <div class="box">
            <form action="{{ url('/chooseTimeDomain') }}">
                <input type="submit" value="Tempo de resposta" />
            </form>
            <form action="{{ url('/chooseStudentAndDomainToGraph') }}">
                <input type="submit" value="Gráfico de desempenho" />
            </form>
        </div>
    </div>


</div>

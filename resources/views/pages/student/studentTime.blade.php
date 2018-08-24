@extends('layouts.default')

<head>
    <title>Tempo de Resposta</title>
</head>

@section('content')
    <div class="panel panel-default">
        <div class="panel-heading"><h1>Tempo das respostas do estudante {{$s[0]->user_id}}:</h1></div>
       
                
            <table class="table table-hover">
                <tbody>
                    <tr>
                        <td>Quantidade de questões feitas</td>
                        <td>{{$s[0]->counting}}</td>
                    </tr>
                    <tr>
                        <td>Tempo muito acima da média</td>
                        <td>{{$s[0]->SE*100}}%</td>
                    </tr>
                    <tr>
                        <td>Tempo acima da média</td>
                        <td>{{$s[0]->SM*100}}%</td>
                    </tr>
                    <tr>
                        <td>Tempo na média</td>
                        <td>{{$s[0]->NORMAL*100}}%</td>
                    </tr>
                    <tr>
                        <td>Tempo abaixo da média</td>
                        <td>{{$s[0]->IM*100}}%</td>
                    </tr>
                    <tr>
                        <td>Tempo muito abaixo da média</td>
                        <td>{{$s[0]->IE*100}}%</td>
                    </tr>
                    <tr>
                        <td>Sem parâmetro</td>
                        <td>{{$s[0]->NO_EXIST*100}}%</td>
                    </tr>
                </tbody>

            </table>                   
            
        </div>


    </div>



@stop
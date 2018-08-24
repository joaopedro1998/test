@extends('layouts.default')

<head>
    <title>Recursos do Sistema</title>
</head>

@section('content')
    <div class="panel panel-default">
        <div class="panel-heading">
            <h3 class="panel-title">Lista de recursos educacionais</h3>
        </div>
        <div class="table-responsive">
            <table class="table table-hover">
                <thead>
                <tr class="active"><th>Resource Id</th><th>Título</th><th>Resource Type</th><th>Topic Name</th><th>Curriculum Name</th><th>Domain Name</th><th>Dificuldade</th></tr>
                </thead>
                <tbody>
                @foreach($resources as $resource)
                    <tr>
                        <td>{{ $resource->resource_id }}</td>
                        <td>{{ $resource->resource_title }}</td>
                        <td>{{ $resource->resource_type }}</td>
                        <td>{{ $resource->topic_name }}</td>
                        <td>{{ $resource->curriculum_name }}</td>
                        <td>{{ $resource->domain_name }}</td>
                        <td>{{ $resource->resource_difficulty }}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>
            {{$resources->links()}}
        </div>
        <div class="panel-footer">
            <small>Built with Bootcards - Table Card</small>
        </div>
    </div>

@stop





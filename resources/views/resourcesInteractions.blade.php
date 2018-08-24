@extends('layouts.default')

<head>
    <title>Interações com recursos do sistema</title>
</head>

@section('content')
    <div class="panel panel-default">
        <div class="panel-heading">
            <h3 class="panel-title">Interações de cada user com cada recurso do sistema</h3>
        </div>
        <div class="table-responsive">
            <table class="table table-hover">
                <thead>
                <tr class="active"><th>Resource Id</th><th>User Id</th><th>Visualized</th><th>Resolved</th><th>Interacted</th></tr>
                </thead>
                <tbody>
                @foreach($resources as $resource)
                    <tr>
                        <td>{{ $resource->resource_id }}</td>
                        <td>{{ $resource->user_id }}</td>
                        <td>{{ $resource->visualized }}</td>
                        <td>{{ $resource->resolved }}</td>
                        <td>{{ $resource->interacted }}</td>
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

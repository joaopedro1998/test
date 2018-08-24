@extends('layouts.default')

<head>
    <title>Interações com recursos por aluno</title>
</head>

@section('content')
    <div class="panel panel-default">
        <div class="panel-heading">Interações com recursos por aluno</div>

        <div class="panel-body">

            <form class="form-horizontal" name="userRecomendations" method="get" action="{{ url('/individualInteractions/resources') }}">

                <div class="form-group">
                    <label for="sel1">Selecione a disciplina:
                        <select class="form-control" id="domain" name="domain">
                            <option>--Disciplina--</option>
                            @foreach($domainlist as $d)
                                <option value="{{ $d->id }}">{{ $d->id }} | {{ $d->name }}</option>
                            @endforeach

                        </select>
                    </label>
                </div>

                <div class="form-group">
                    <label for="sel1">Selecione a turma:
                        <select class="form-control" id="class" name="class">
                            <option>--Turma--</option>
                        </select>
                    </label>
                </div>

                <div class="form-group">
                    <label for="sel1">Selecione o aluno:
                        <select class="form-control" id="student" name="student">
                            <option>--Aluno--</option>
                        </select>
                    </label>
                </div>

                <div class="form-group">
                    <div class="col-sm-offset-5 col-sm-10">
                        <button type="submit" class="btn btn-default"><h3>Buscar</h3></button>
                    </div>
                </div>
            </form>

            <div class="resource_area" name="resource_area"></div>
            <div class="not_visualized_area" name="not_visualized_area"></div>
            <div class="not_interacted_area" name="not_interacted_area"></div>
            <div class="not_resolved_area" name="not_resolved_area"></div>
            <div class="resolved_area" name="resolved_area"></div>

            <script type="text/javascript">
                $('select[name=domain]').change(function () {
                    var domainId = $(this).val();

                    // $('select[name=cidade]').html('').append('<option value="">  Carregando...  </option>');
                    $.get('/getclassesajax/' + domainId, function (classes) {
                        $('select[name=class]').empty();
                        $.each(classes, function (key, value) {
                            $('select[name=class]').append('<option value=' + value.classroom_id + '>' + value.classroom_id + ' | ' + value.name + '</option>');
                        });
                    });
                });

                $('select[name=class]').change(function () {
                    var classId = $(this).val();

                    // $('select[name=cidade]').html('').append('<option value="">  Carregando...  </option>');
                    $.get('/getstudentsajax/' + classId, function (students) {
                        $('select[name=student]').empty();
                        $.each(students, function (key, value) {
                            $('select[name=student]').append('<option value=' + value.student_id + '>' + value.student_id + '</option>');
                        });
                    });
                });

                $('select[name=student]').change(function () {
                    var studentId = $(this).val();
                    var domainId = $('select[name=domain]').val();

                    $('div[name=resource_area]').empty();
                    $('div[name=resource_area]').append('Carregando...');

                    $('div[name=not_visualized_area]').empty();
                    $('div[name=not_visualized_area]').append('Carregando...');

                    $('div[name=not_interacted_area]').empty();
                    $('div[name=not_interacted_area]').append('Carregando...');

                    $('div[name=not_resolved_area]').empty();
                    $('div[name=not_resolved_area]').append('Carregando...');

                    $('div[name=resolved_area]').empty();
                    $('div[name=resolved_area]').append('Carregando...');

                    // $('select[name=cidade]').html('').append('<option value="">  Carregando...  </option>');
                    $.get('/getresourcesajax/' + domainId + '/' + studentId, function (resources) {
                        $('div[name=resource_area]').empty();
                        $('div[name=resource_area]').append('<h2> Recursos interagidos </h2>');
                        if(resources.length > 0) {
                            $('div[name=resource_area]').append('<table name="resource_table" style = "color: black;">');
                            $('table[name=resource_table]').append('<tr><td>Resource Id</td><td>User Id</td><td>Resource Type</td><td>Domain Name</td><td>Topic Name</td><td>Curriculum Name</td><td>Visualized</td><td>Resolved</td><td>Interacted</td></tr>');
                            $.each(resources, function (key, value) {
                                $('table[name=resource_table]').append('<tr>' +
                                    '<td>' + value.resource_id + '</td>' +
                                    '<td>' + value.user_id + '</td>' +
                                    '<td>' + value.resource_type + '</td>' +
                                    '<td>' + value.domain_name + '</td>' +
                                    '<td>' + value.topic_name + '</td>' +
                                    '<td>' + value.curriculum_name + '</td>' +
                                    '<td>' + value.visualized + '</td>' +
                                    '<td>' + value.resolved + '</td>' +
                                    '<td>' + value.interacted + '</td></tr>');
                            });
                            $('div[name=resource_area]').append('</table>');
                        } else {
                            $('div[name=resource_area]').append('Sem recursos interagidos');
                        }
                    });

                    $.get('/getnotvisualizedajax/' + domainId + '/' + studentId, function (resources) {
                        $('div[name=not_visualized_area]').empty();
                        $('div[name=not_visualized_area]').append('<h2> Recursos não visualizados </h2>');
                        if(resources.length > 0) {
                            $('div[name=not_visualized_area]').append('<table name="not_visualized_table" style = "color: black;">');
                            $('table[name=not_visualized_table]').append('<tr><td>Resource Id</td><td>User Id</td><td>Resource Type</td><td>Domain Name</td><td>Topic Name</td><td>Curriculum Name</td></tr>');
                            $.each(resources, function (key, value) {
                                $('table[name=not_visualized_table]').append('<tr>' +
                                    '<td>' + value.resource_id + '</td>' +
                                    '<td>' + value.user_id + '</td>' +
                                    '<td>' + value.resource_type + '</td>' +
                                    '<td>' + value.domain_name + '</td>' +
                                    '<td>' + value.topic_name + '</td>' +
                                    '<td>' + value.curriculum_name + '</td></tr>');
                            });
                            $('div[name=not_visualized_area]').append('</table>');
                        } else {
                            $('div[name=not_visualized_area]').append('Sem recursos não visualizados');
                        }
                    });

                    $.get('/getnotinteractedajax/' + domainId + '/' + studentId, function (resources) {
                        $('div[name=not_interacted_area]').empty();
                        $('div[name=not_interacted_area]').append('<h2> Recursos não interagidos </h2>');
                        if(resources.length > 0) {
                            $('div[name=not_interacted_area]').append('<table name="not_interacted_table" style = "color: black;">');
                            $('table[name=not_interacted_table]').append('<tr><td>Resource Id</td><td>User Id</td><td>Resource Type</td><td>Domain Name</td><td>Topic Name</td><td>Curriculum Name</td><td>Visualized</td><td>Resolved</td><td>Interacted</td></tr>');
                            $.each(resources, function (key, value) {
                                $('table[name=not_interacted_table]').append('<tr>' +
                                    '<td>' + value.resource_id + '</td>' +
                                    '<td>' + value.user_id + '</td>' +
                                    '<td>' + value.resource_type + '</td>' +
                                    '<td>' + value.domain_name + '</td>' +
                                    '<td>' + value.topic_name + '</td>' +
                                    '<td>' + value.curriculum_name + '</td>' +
                                    '<td>' + value.visualized + '</td>' +
                                    '<td>' + value.resolved + '</td>' +
                                    '<td>' + value.interacted + '</td></tr>');
                            });
                            $('div[name=not_interacted_area]').append('</table>');
                        } else {
                            $('div[name=not_interacted_area]').append('Sem recursos não interagidos');
                        }
                    });

                    $.get('/getnotresolvedajax/' + domainId + '/' + studentId, function (resources) {
                        $('div[name=not_resolved_area]').empty();
                        $('div[name=not_resolved_area]').append('<h2> Recursos não resolvidos </h2>');
                        if(resources.length > 0) {
                            $('div[name=not_resolved_area]').append('<table name="not_resolved_table" class="table">');
                            $('table[name=not_resolved_table]').append('<tr><td>Resource Id</td><td>User Id</td><td>Resource Type</td><td>Domain Name</td><td>Topic Name</td><td>Curriculum Name</td><td>Visualized</td><td>Resolved</td><td>Interacted</td></tr>');
                            $.each(resources, function (key, value) {
                                $('table[name=not_resolved_table]').append('<tr>' +
                                    '<td>' + value.resource_id + '</td>' +
                                    '<td>' + value.user_id + '</td>' +
                                    '<td>' + value.resource_type + '</td>' +
                                    '<td>' + value.domain_name + '</td>' +
                                    '<td>' + value.topic_name + '</td>' +
                                    '<td>' + value.curriculum_name + '</td>' +
                                    '<td>' + value.visualized + '</td>' +
                                    '<td>' + value.resolved + '</td>' +
                                    '<td>' + value.interacted + '</td></tr>');
                            });
                            $('div[name=not_resolved_area]').append('</table>');
                        } else {
                            $('div[name=not_resolved_area]').append('Sem recursos não resolvidos');
                        }
                    });

                    $.get('/getresolvedajax/' + domainId + '/' + studentId, function (resources) {
                        $('div[name=resolved_area]').empty();
                        $('div[name=resolved_area]').append('<h2> Recursos resolvidos </h2>');
                        if(resources.length > 0) {
                            $('div[name=resolved_area]').append('<table name="resolved_table" style = "color: black;">');
                            $('table[name=resolved_table]').append('<tr><td>Resource Id</td><td>User Id</td><td>Resource Type</td><td>Domain Name</td><td>Topic Name</td><td>Curriculum Name</td><td>Visualized</td><td>Resolved</td><td>Interacted</td></tr>');
                            $.each(resources, function (key, value) {
                                $('table[name=resolved_table]').append('<tr>' +
                                    '<td>' + value.resource_id + '</td>' +
                                    '<td>' + value.user_id + '</td>' +
                                    '<td>' + value.resource_type + '</td>' +
                                    '<td>' + value.domain_name + '</td>' +
                                    '<td>' + value.topic_name + '</td>' +
                                    '<td>' + value.curriculum_name + '</td>' +
                                    '<td>' + value.visualized + '</td>' +
                                    '<td>' + value.resolved + '</td>' +
                                    '<td>' + value.interacted + '</td></tr>');
                            });
                            $('div[name=resolved_area]').append('</table>');
                        } else {
                            $('div[name=resolved_area]').append('Sem recursos resolvidos');
                        }
                    });
                });
            </script>

        </div>

        <div class="panel-footer"></div>
    </div>

@stop

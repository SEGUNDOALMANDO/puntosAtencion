@extends('master_page')
@section('content')
<div class="row">
        <div class="col-md-12">
            <div class="well well-sm">
                {!!Form::open(['route' => 'activity/register', 'methos' => 'POST', 'novalidate'])!!}
                <div class="row">
                    <div class="col-md-12">
                        <div class="col-md-5">
                            <div class="form-group">
                                <label for="name">
                                Fecha Inicio</label>

                                {!! Form::text('date_start', null, array('class'=>'form-control datepicker')) !!}
                            </div>
                        </div>
                        <div class="col-md-5">
                            <div class="form-group">
                                <label for="name">
                                Fecha Fin</label>
                                {!! Form::text('date_end', null, array('class'=>'form-control datepicker')) !!}
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="form-group">
                                <label for="name">
                                Prioridad</label>
                                {!! Form::select('priority', [1, 2, 3, 4, 5], null, ['class' => 'form-control']) !!}
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="name">
                            Describe la Actividad</label>
                            {!! Form::textarea('activity', null, ['class' => 'form-control']) !!}

                        </div>
                    </div>
                    <div class="col-md-12">

                        <div class="col-md-3">
                            <label for="name">Rol de Participantes</label>
                            {!! Form::select('typeParticipant', $typePartipants, null, ['class' => 'form-control', 'id'=>'typeParticipant']) !!}
                        </div>
                        <div class="col-md-9">
                            <label for="name">Participantes</label>
                            {!! Form::text('busqueda', null, array('class'=>'ui-widget ui-widget-content ui-corner-all form-control', 'id'=>'busqueda', 'placeholder'=>'Busqueda de participante por nombre')) !!}
                        </div>
                        </div>
                            <div class="col-md-12">
                                <table class="table table-striped table-hover participantes ">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Participante</th>
                                            <th>Rol</th>
                                            <th> </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <!-- AQUI VA LOS PARTICIPANTES QUE SE VAN A GREGANDO CON EL AUTOPLETE busqueda -->
                                    </tbody>
                                </table>
                            </div>
                    <div class="col-md-12">
                        <input type="hidden" name="user_register" value="{{ Auth::user()->id }}"/>
                        <button type="submit" class="btn btn-primary pull-right">Crear actividad</button>
                    </div>
                </div>
                {!!Form::close()!!}
            </div>
        </div>
    </div>
@stop
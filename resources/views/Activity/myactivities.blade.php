@extends('master_page')
@section('content')
      <div class="col-md-12">
        <div class="col-md-12">
          <h1>Lista de actividades</h1>
        </div>
        <div class="row panel panel-default">
            {{ Form::open(array('class'=>'myactivity', 'url'=>'myactivities')) }}
                <div class="col-md-3">
                    <div class="input-group">
                        <span class="input-group-addon">Por Estatus</span>
                        <select name="liststatus" id="filterstatus" class="form-control">
                            <option value="" selected="selected">Todos</option>
                            @foreach($statusactive as $ostatus)
                                @if($status===$ostatus->id)
                                    <option value="{{ $ostatus->id }}" selected>{{ $ostatus->status_activity }}</option>
                                @else
                                    <option value="{{ $ostatus->id }}">{{ $ostatus->status_activity }}</option>
                                @endif
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="input-group">
                        <span class="input-group-addon">Por Rol</span>
                        <select name="listarol" id="rolfilter" class="form-control">
                            <option value="" selected="selected">Todos</option>
                            @foreach($typeparticipantActive as $typeparticipant)
                                @if($rol===$typeparticipant->id)
                                    <option value="{{ $typeparticipant->id }}" selected>{{ $typeparticipant->type }}</option>
                                @else
                                    <option value="{{ $typeparticipant->id }}">{{ $typeparticipant->type }}</option>
                                @endif
                            @endforeach
                        </select>
                    </div>
                </div><!--
                <div class="col-md-6">
                    <div class="input-group">
                        <span class="input-group-addon">Por la fecha de creación</span>
                        <input type="text" class="form-control">
                        <span class="input-group-addon"> ó Todas </span>
                        <span class="input-group-addon">
                            <input type="checkbox" checked/>
                        </span>
                    </div>
                </div>-->
            {{ Form::close() }}
        </div>
      </div>

@foreach($actividades as $actividad)
    <div class="col-md-12 myactivities panel panel-default">
                <div class="row">
                    <div class="col-md-12">
                        <div class="col-xs-6 col-md-4 col-sm-4">
                            <div class="form-group">
                                <span for="name" class="fecha-status-activities">Fecha inicio mayo 23 del 2014</span>
                            </div>
                        </div>
                        <div class="col-xs-6 col-md-4 col-sm-4">
                            <div class="form-group">
                                <span for="name" class="fecha-status-activities">Fecha fin mayo 23 del 2014</span>
                            </div>
                        </div>
                        <div class="col-xs-12 col-md-4 col-sm-4">
                            <div class="form-group">
                                <span for="name" class="fecha-status-activities">Estatus: En espera de información</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                      <div class="col-md-12">
                        <div class="form-group">  
                                <label>
                                {{ $actividad->activity }}
                                </label>
                        </div>
                      </div>
                    </div>
                                      
                    <div class="col-md-12">
                        <div class="col-xs-2 col-md-8 col-sm-8"></div>
                        <div class="col-xs-4 col-md-2 col-sm-2">
                            <a href="{{ route('edit/activity', [$actividad->id]) }}"  type="submit" class="btn btn-success form-control" >Ver</a>
                        </div>
                        <div class="col-xs-4 col-md-2 col-sm-2">
                            <a href="{{ route('edit/activity', [$actividad->id]) }}" type="submit" class="btn btn-success form-control">Editar</a>
                        </div>
                    </div>
            </div>
      </div>
      @endforeach
@stop

@section('includejs')
    {{ HTML::script('assets/js/myActivity/myActivityController.js') }}
@stop

@extends('master_page')
@section('content')

<div class="col-md-12">
    <div class="col-md-12">
        <h1>Actividad folio # {{ $actividad[0]->id }}</h1>
    </div>
</div>


<h2>Descripción</h2>
<div class="col-md-12 myactivities">
    <div class="row edit-separacion">
        <div class="col-md-12">
            <div class="col-md-2">
            <div class="input-group">
                <span class="input-group-addon">Inicio</span>
                <input class="form-control" value="{{ date("d/m/Y",strtotime($actividad[0]->date_start)) }}">
            </div>
            </div>
            <div class="col-md-3">
            <div class="input-group">
                <span class="input-group-addon">Fecha limite</span>
                <input class="form-control" value="{{ date("d/m/Y",strtotime( $actividad[0]->date_limit)) }}">
            </div>
            </div>
            <div class="col-md-2">
                <div class="input-group">
                    <span class="input-group-addon">Prioridad</span>
                    <select name="" id="" class="form-control">
                        <option value="0" selected>Sin Prioridad</option>
                        @for($i = 1; $i < 6; $i++)
                            @if($actividad[0]->priority==$i)
                                <option value="{{ $i }}" selected>{{ $i }}</option>
                            @else
                                <option value="{{ $i }}" >{{ $i }}</option>
                            @endif
                        @endfor
                    </select>
                </div>
            </div>
            <div class="col-md-2">
                <div class="input-group">
                    <span class="input-group-addon">Avance</span>
                    <select name="" id="" class="form-control">
                        @for($i = 0; $i < 101; $i++)
                            @if($actividad[0]->priority==$i)
                                <option value="{{ $i }}" selected>{{ $i }} %</option>
                            @else
                                <option value="{{ $i }}" >{{ $i }} %</option>
                            @endif
                        @endfor
                    </select>
                </div>
            </div>
            <div class="col-md-3">
                <div class="input-group">
                    <span class="input-group-addon">Estatus</span>
                    <select name="" id="" class="form-control">
                        @foreach($statusactive as $status)
                            @if($status->id==$actividad[0]->status_activity_id)
                                <option value="{{ $status->id }}" selected>{{ $status->status_activity }}</option>
                            @else
                                <option value="{{ $status->id }}">{{ $status->status_activity }}</option>
                            @endif
                        @endforeach
                    </select>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <label class="col-md-3">Descripción de la actividad</label>
            <textarea class="col-lg-12 form-control edit-separacion" rows="3">{{ $actividad[0]->activity }}</textarea>
            <span class="col-md-3">
                <a href=""> <u>Actividad predecesora folio #56 </u></a>
            </span>
            <div class="col-md-9">
                <button type="submit" class="btn btn-success pull-right">Actualizar</button>
            </div>
        </div>
    </div>
</div>
<h2>Ubicación</h2>
<div class="row">
    <div class="col-lg-12">
        <div class="col-lg-1">
            <label>Proyecto</label>
        </div>
        <div class="col-lg-4">
            <select name="" id="" class="form-control">
                <option value="">LA PENINSULAR </option>
            </select>
        </div>
        <div class="col-lg-2">
            <label> Segmento de negocio</label>
        </div>
        <div class="col-lg-5 edit-separacion">
            <select name="" id="" class="form-control">
                <option value="">Directiva de concesiones</option>
            </select>
        </div>
        <div class="col-lg-1"><label for="">Ubicacion</label></div>
        <div class="col-lg-11">
            <select name="" id="" class="form-control">
                <option value="">LA PENINSULAR</option>
            </select>
        </div>
        <div class="col-lg-1">
            <label>Temas</label>
        </div>
        <div class="col-lg-5">
            <select name="" id="" class="form-control">
                <option value="">LA PENINSULAR </option>
            </select>
        </div>
        <div class="col-lg-1">
            <label> Subtemas</label>
        </div>
        <div class="col-lg-5 edit-separacion">
            <select name="" id="" class="form-control">
                <option value="">Directiva de concesiones</option>
            </select>
        </div>
        <div class="col-md-12">
            <button type="submit" class="btn btn-success pull-right">Actualizar</button>
        </div>
    </div>
</div>
<h2>Participantes</h2>
<div class="row">
    <div class="col-lg-12">
    <div class="col-lg-12">
        <div class="col-lg-3">
            <div class="input-group">
                <span class="input-group-addon">Tipo participante</span>
                <select name="" id="" class="form-control">
                    <option value="">Ejecuta</option>
                </select>
            </div>
        </div>
        <div class="col-lg-9">
            <div class="input-group">
                <span class="input-group-addon">Buscar participante</span>
                <input type="text" class="form-control"/>
            </div>
        </div>

    </div>
    <table class="table table-bordered">
        <tr>
            <th>#</th>
            <th>Nombre</th>
            <th>Tipo participante</th>
            <th>Accion</th>
        </tr>

    </table>

</div>

@stop

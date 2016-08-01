@extends('layouts.admin')

@section('css')
  <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.0/css/bootstrap-datepicker.css" rel="stylesheet">
@endsection

@section('header')
<div class="col-md-6">
<section class="panel panel-default">

    <header class="panel-heading">
        <h5><i class="glyphicon glyphicon-edit"></i> Cabeceracontratos / Editar #{{$cabeceracontrato->id}}</h5>
    </header>

@endsection

@section('content')
    @include('error')

    <div class="panel-body">
        <div class="row">
            <div class="col-md-12">

                <form action="{{ route('cabeceracontratos.update', $cabeceracontrato->id) }}" method="POST">
                    <input type="hidden" name="_method" value="PUT">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">

                    <div class="form-group @if($errors->has('con_fec')) has-error @endif">
                       <label for="con_fec-field">Con_fec</label>
                    <input type="text" id="con_fec-field" name="con_fec" class="form-control" value="{{ $cabeceracontrato->con_fec }}" required/>
                       @if($errors->has("con_fec"))
                        <span class="help-block">{{ $errors->first("con_fec") }}</span>
                       @endif
                    </div>
                    <div class="form-group @if($errors->has('con_est')) has-error @endif">
                       <label for="con_est-field">Con_est</label>
                    <input type="text" id="con_est-field" name="con_est" class="form-control" value="{{ $cabeceracontrato->con_est }}" required/>
                       @if($errors->has("con_est"))
                        <span class="help-block">{{ $errors->first("con_est") }}</span>
                       @endif
                    </div>
                    <div class="form-group @if($errors->has('con_tso')) has-error @endif">
                       <label for="con_tso-field">Con_tso</label>
                    <input type="text" id="con_tso-field" name="con_tso" class="form-control" value="{{ $cabeceracontrato->con_tso }}" required/>
                       @if($errors->has("con_tso"))
                        <span class="help-block">{{ $errors->first("con_tso") }}</span>
                       @endif
                    </div>
                    <div class="form-group @if($errors->has('con_dni')) has-error @endif">
                       <label for="con_dni-field">Con_dni</label>
                    <input type="text" id="con_dni-field" name="con_dni" class="form-control" value="{{ $cabeceracontrato->con_dni }}" required/>
                       @if($errors->has("con_dni"))
                        <span class="help-block">{{ $errors->first("con_dni") }}</span>
                       @endif
                    </div>
                    <div class="form-group @if($errors->has('con_tse')) has-error @endif">
                       <label for="con_tse-field">Con_tse</label>
                    <input type="text" id="con_tse-field" name="con_tse" class="form-control" value="{{ $cabeceracontrato->con_tse }}" required/>
                       @if($errors->has("con_tse"))
                        <span class="help-block">{{ $errors->first("con_tse") }}</span>
                       @endif
                    </div>
                    <div class="form-group @if($errors->has('tiposolicitante_id')) has-error @endif">
                       <label for="tiposolicitante_id-field">Tiposolicitante_id</label>
                    <input type="text" id="tiposolicitante_id-field" name="tiposolicitante_id" class="form-control" value="{{ $cabeceracontrato->tiposolicitante_id }}" required/>
                       @if($errors->has("tiposolicitante_id"))
                        <span class="help-block">{{ $errors->first("tiposolicitante_id") }}</span>
                       @endif
                    </div>
                    <div class="form-group @if($errors->has('medico_id')) has-error @endif">
                       <label for="medico_id-field">Medico_id</label>
                    <input type="text" id="medico_id-field" name="medico_id" class="form-control" value="{{ $cabeceracontrato->medico_id }}" required/>
                       @if($errors->has("medico_id"))
                        <span class="help-block">{{ $errors->first("medico_id") }}</span>
                       @endif
                    </div>
                    <div class="form-group @if($errors->has('sepelio_id')) has-error @endif">
                       <label for="sepelio_id-field">Sepelio_id</label>
                    <input type="text" id="sepelio_id-field" name="sepelio_id" class="form-control" value="{{ $cabeceracontrato->sepelio_id }}" required/>
                       @if($errors->has("sepelio_id"))
                        <span class="help-block">{{ $errors->first("sepelio_id") }}</span>
                       @endif
                    </div>
                    <div class="form-group @if($errors->has('empleado_id')) has-error @endif">
                       <label for="empleado_id-field">Empleado_id</label>
                    <input type="text" id="empleado_id-field" name="empleado_id" class="form-control" value="{{ $cabeceracontrato->empleado_id }}" required/>
                       @if($errors->has("empleado_id"))
                        <span class="help-block">{{ $errors->first("empleado_id") }}</span>
                       @endif
                    </div>
                    <div class="form-group @if($errors->has('fallecido_id')) has-error @endif">
                       <label for="fallecido_id-field">Fallecido_id</label>
                    <input type="text" id="fallecido_id-field" name="fallecido_id" class="form-control" value="{{ $cabeceracontrato->fallecido_id }}" required/>
                       @if($errors->has("fallecido_id"))
                        <span class="help-block">{{ $errors->first("fallecido_id") }}</span>
                       @endif
                    </div>
                    <div class="form-group @if($errors->has('servicio_id')) has-error @endif">
                       <label for="servicio_id-field">Servicio_id</label>
                    <input type="text" id="servicio_id-field" name="servicio_id" class="form-control" value="{{ $cabeceracontrato->servicio_id }}" required/>
                       @if($errors->has("servicio_id"))
                        <span class="help-block">{{ $errors->first("servicio_id") }}</span>
                       @endif
                    </div>
                    <div class="well well-sm">
                        <button type="submit" class="btn btn-primary">Guardar</button>
                        <a class="btn btn-link pull-right" href="{{ route('cabeceracontratos.index') }}"><i class="glyphicon glyphicon-backward"></i>  Atrás</a>
                    </div>
                </form>

            </div>
        </div>
    </div>
</section>
</div>
@endsection

@section('scripts')
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.0/js/bootstrap-datepicker.min.js"></script>
  <script>
    $('.date-picker').datepicker({
    });
  </script>
@endsection

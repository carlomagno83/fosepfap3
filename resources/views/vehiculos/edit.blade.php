@extends('layouts.admin')

@section('css')
  <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.0/css/bootstrap-datepicker.css" rel="stylesheet">
@endsection

@section('header')
<div class="col-md-6">
<section class="panel panel-default">

    <header class="panel-heading">
        <h5><i class="glyphicon glyphicon-edit"></i> Vehiculos / Editar #{{$vehiculo->id}}</h5>
    </header>

@endsection

@section('content')
    @include('error')

    <div class="panel-body">
        <div class="row">
            <div class="col-md-12">

                <form action="{{ route('vehiculos.update', $vehiculo->id) }}" method="POST">
                    <input type="hidden" name="_method" value="PUT">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">

                    <div class="form-group @if($errors->has('veh_pla')) has-error @endif">
                       <label for="veh_pla-field">Veh_pla</label>
                    <input type="text" id="veh_pla-field" name="veh_pla" class="form-control" value="{{ $vehiculo->veh_pla }}" required/>
                       @if($errors->has("veh_pla"))
                        <span class="help-block">{{ $errors->first("veh_pla") }}</span>
                       @endif
                    </div>
                    <div class="form-group @if($errors->has('veh_cla')) has-error @endif">
                       <label for="veh_cla-field">Veh_cla</label>
                    <input type="text" id="veh_cla-field" name="veh_cla" class="form-control" value="{{ $vehiculo->veh_cla }}" required/>
                       @if($errors->has("veh_cla"))
                        <span class="help-block">{{ $errors->first("veh_cla") }}</span>
                       @endif
                    </div>
                    <div class="form-group @if($errors->has('veh_ser')) has-error @endif">
                       <label for="veh_ser-field">Veh_ser</label>
                    <input type="text" id="veh_ser-field" name="veh_ser" class="form-control" value="{{ $vehiculo->veh_ser }}" required/>
                       @if($errors->has("veh_ser"))
                        <span class="help-block">{{ $errors->first("veh_ser") }}</span>
                       @endif
                    </div>
                    <div class="form-group @if($errors->has('veh_mot')) has-error @endif">
                       <label for="veh_mot-field">Veh_mot</label>
                    <input type="text" id="veh_mot-field" name="veh_mot" class="form-control" value="{{ $vehiculo->veh_mot }}" required/>
                       @if($errors->has("veh_mot"))
                        <span class="help-block">{{ $errors->first("veh_mot") }}</span>
                       @endif
                    </div>
                    <div class="form-group @if($errors->has('veh_asi')) has-error @endif">
                       <label for="veh_asi-field">Veh_asi</label>
                    <input type="text" id="veh_asi-field" name="veh_asi" class="form-control" value="{{ $vehiculo->veh_asi }}" required/>
                       @if($errors->has("veh_asi"))
                        <span class="help-block">{{ $errors->first("veh_asi") }}</span>
                       @endif
                    </div>
                    <div class="form-group @if($errors->has('veh_pas')) has-error @endif">
                       <label for="veh_pas-field">Veh_pas</label>
                    <input type="text" id="veh_pas-field" name="veh_pas" class="form-control" value="{{ $vehiculo->veh_pas }}" required/>
                       @if($errors->has("veh_pas"))
                        <span class="help-block">{{ $errors->first("veh_pas") }}</span>
                       @endif
                    </div>
                    <div class="form-group @if($errors->has('veh_fra')) has-error @endif">
                       <label for="veh_fra-field">Veh_fra</label>
                    <input type="text" id="veh_fra-field" name="veh_fra" class="form-control" value="{{ $vehiculo->veh_fra }}" required/>
                       @if($errors->has("veh_fra"))
                        <span class="help-block">{{ $errors->first("veh_fra") }}</span>
                       @endif
                    </div>
                    <div class="form-group @if($errors->has('veh_fr')) has-error @endif">
                       <label for="veh_fr-field">Veh_fr</label>
                    <input type="text" id="veh_fr-field" name="veh_fr" class="form-control" value="{{ $vehiculo->veh_fr }}" required/>
                       @if($errors->has("veh_fr"))
                        <span class="help-block">{{ $errors->first("veh_fr") }}</span>
                       @endif
                    </div>
                    <div class="form-group @if($errors->has('veh_eje')) has-error @endif">
                       <label for="veh_eje-field">Veh_eje</label>
                    <input type="text" id="veh_eje-field" name="veh_eje" class="form-control" value="{{ $vehiculo->veh_eje }}" required/>
                       @if($errors->has("veh_eje"))
                        <span class="help-block">{{ $errors->first("veh_eje") }}</span>
                       @endif
                    </div>
                    <div class="form-group @if($errors->has('veh_rue')) has-error @endif">
                       <label for="veh_rue-field">Veh_rue</label>
                    <input type="text" id="veh_rue-field" name="veh_rue" class="form-control" value="{{ $vehiculo->veh_rue }}" required/>
                       @if($errors->has("veh_rue"))
                        <span class="help-block">{{ $errors->first("veh_rue") }}</span>
                       @endif
                    </div>
                    <div class="form-group @if($errors->has('veh_com')) has-error @endif">
                       <label for="veh_com-field">Veh_com</label>
                    <input type="text" id="veh_com-field" name="veh_com" class="form-control" value="{{ $vehiculo->veh_com }}" required/>
                       @if($errors->has("veh_com"))
                        <span class="help-block">{{ $errors->first("veh_com") }}</span>
                       @endif
                    </div>
                    <div class="form-group @if($errors->has('vehiculomodelo_id')) has-error @endif">
                       <label for="vehiculomodelo_id-field">Vehiculomodelo_id</label>
                    <input type="text" id="vehiculomodelo_id-field" name="vehiculomodelo_id" class="form-control" value="{{ $vehiculo->vehiculomodelo_id }}" required/>
                       @if($errors->has("vehiculomodelo_id"))
                        <span class="help-block">{{ $errors->first("vehiculomodelo_id") }}</span>
                       @endif
                    </div>
                    <div class="well well-sm">
                        <button type="submit" class="btn btn-primary">Guardar</button>
                        <a class="btn btn-link pull-right" href="{{ route('vehiculos.index') }}"><i class="glyphicon glyphicon-backward"></i>  Atrás</a>
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

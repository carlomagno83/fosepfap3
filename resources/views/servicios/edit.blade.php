@extends('layouts.admin')

@section('css')
  <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.0/css/bootstrap-datepicker.css" rel="stylesheet">
@endsection

@section('header')
<div class="col-md-6">
<section class="panel panel-default">

    <header class="panel-heading">
        <h5><i class="glyphicon glyphicon-edit"></i> Servicios / Editar #{{$servicio->id}}</h5>
    </header>

@endsection

@section('content')
    @include('error')

    <div class="panel-body">
        <div class="row">
            <div class="col-md-12">

                <form action="{{ route('servicios.update', $servicio->id) }}" method="POST">
                    <input type="hidden" name="_method" value="PUT">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">

                    <div class="form-group @if($errors->has('cas_pfa')) has-error @endif">
                       <label for="cas_pfa-field">Cas_pfa</label>
                    <input type="text" id="cas_pfa-field" name="cas_pfa" class="form-control" value="{{ $servicio->cas_pfa }}" required/>
                       @if($errors->has("cas_pfa"))
                        <span class="help-block">{{ $errors->first("cas_pfa") }}</span>
                       @endif
                    </div>
                    <div class="form-group @if($errors->has('cas_pat')) has-error @endif">
                       <label for="cas_pat-field">Cas_pat</label>
                    <input type="text" id="cas_pat-field" name="cas_pat" class="form-control" value="{{ $servicio->cas_pat }}" required/>
                       @if($errors->has("cas_pat"))
                        <span class="help-block">{{ $errors->first("cas_pat") }}</span>
                       @endif
                    </div>
                    <div class="form-group @if($errors->has('cas_pac')) has-error @endif">
                       <label for="cas_pac-field">Cas_pac</label>
                    <input type="text" id="cas_pac-field" name="cas_pac" class="form-control" value="{{ $servicio->cas_pac }}" required/>
                       @if($errors->has("cas_pac"))
                        <span class="help-block">{{ $errors->first("cas_pac") }}</span>
                       @endif
                    </div>
                    <div class="form-group @if($errors->has('cas_pne')) has-error @endif">
                       <label for="cas_pne-field">Cas_pne</label>
                    <input type="text" id="cas_pne-field" name="cas_pne" class="form-control" value="{{ $servicio->cas_pne }}" required/>
                       @if($errors->has("cas_pne"))
                        <span class="help-block">{{ $errors->first("cas_pne") }}</span>
                       @endif
                    </div>
                    <div class="form-group @if($errors->has('cas_pru')) has-error @endif">
                       <label for="cas_pru-field">Cas_pru</label>
                    <input type="text" id="cas_pru-field" name="cas_pru" class="form-control" value="{{ $servicio->cas_pru }}" required/>
                       @if($errors->has("cas_pru"))
                        <span class="help-block">{{ $errors->first("cas_pru") }}</span>
                       @endif
                    </div>
                    <div class="form-group @if($errors->has('cas_psc')) has-error @endif">
                       <label for="cas_psc-field">Cas_psc</label>
                    <input type="text" id="cas_psc-field" name="cas_psc" class="form-control" value="{{ $servicio->cas_psc }}" required/>
                       @if($errors->has("cas_psc"))
                        <span class="help-block">{{ $errors->first("cas_psc") }}</span>
                       @endif
                    </div>
                    <div class="form-group @if($errors->has('cas_pta')) has-error @endif">
                       <label for="cas_pta-field">Cas_pta</label>
                    <input type="text" id="cas_pta-field" name="cas_pta" class="form-control" value="{{ $servicio->cas_pta }}" required/>
                       @if($errors->has("cas_pta"))
                        <span class="help-block">{{ $errors->first("cas_pta") }}</span>
                       @endif
                    </div>
                    <div class="form-group @if($errors->has('cas_pvt')) has-error @endif">
                       <label for="cas_pvt-field">Cas_pvt</label>
                    <input type="text" id="cas_pvt-field" name="cas_pvt" class="form-control" value="{{ $servicio->cas_pvt }}" required/>
                       @if($errors->has("cas_pvt"))
                        <span class="help-block">{{ $errors->first("cas_pvt") }}</span>
                       @endif
                    </div>
                    <div class="form-group @if($errors->has('cas_pvc')) has-error @endif">
                       <label for="cas_pvc-field">Cas_pvc</label>
                    <input type="text" id="cas_pvc-field" name="cas_pvc" class="form-control" value="{{ $servicio->cas_pvc }}" required/>
                       @if($errors->has("cas_pvc"))
                        <span class="help-block">{{ $errors->first("cas_pvc") }}</span>
                       @endif
                    </div>
                    <div class="form-group @if($errors->has('cas_pvf')) has-error @endif">
                       <label for="cas_pvf-field">Cas_pvf</label>
                    <input type="text" id="cas_pvf-field" name="cas_pvf" class="form-control" value="{{ $servicio->cas_pvf }}" required/>
                       @if($errors->has("cas_pvf"))
                        <span class="help-block">{{ $errors->first("cas_pvf") }}</span>
                       @endif
                    </div>
                    <div class="form-group @if($errors->has('cas_pva')) has-error @endif">
                       <label for="cas_pva-field">Cas_pva</label>
                    <input type="text" id="cas_pva-field" name="cas_pva" class="form-control" value="{{ $servicio->cas_pva }}" required/>
                       @if($errors->has("cas_pva"))
                        <span class="help-block">{{ $errors->first("cas_pva") }}</span>
                       @endif
                    </div>
                    <div class="form-group @if($errors->has('ataud_id')) has-error @endif">
                       <label for="ataud_id-field">Ataud_id</label>
                    <input type="text" id="ataud_id-field" name="ataud_id" class="form-control" value="{{ $servicio->ataud_id }}" required/>
                       @if($errors->has("ataud_id"))
                        <span class="help-block">{{ $errors->first("ataud_id") }}</span>
                       @endif
                    </div>
                    <div class="form-group @if($errors->has('empleado_id')) has-error @endif">
                       <label for="empleado_id-field">Empleado_id</label>
                    <input type="text" id="empleado_id-field" name="empleado_id" class="form-control" value="{{ $servicio->empleado_id }}" required/>
                       @if($errors->has("empleado_id"))
                        <span class="help-block">{{ $errors->first("empleado_id") }}</span>
                       @endif
                    </div>
                    <div class="form-group @if($errors->has('vehiculo_id')) has-error @endif">
                       <label for="vehiculo_id-field">Vehiculo_id</label>
                    <input type="text" id="vehiculo_id-field" name="vehiculo_id" class="form-control" value="{{ $servicio->vehiculo_id }}" required/>
                       @if($errors->has("vehiculo_id"))
                        <span class="help-block">{{ $errors->first("vehiculo_id") }}</span>
                       @endif
                    </div>
                    <div class="form-group @if($errors->has('capilla_id')) has-error @endif">
                       <label for="capilla_id-field">Capilla_id</label>
                    <input type="text" id="capilla_id-field" name="capilla_id" class="form-control" value="{{ $servicio->capilla_id }}" required/>
                       @if($errors->has("capilla_id"))
                        <span class="help-block">{{ $errors->first("capilla_id") }}</span>
                       @endif
                    </div>
                    <div class="form-group @if($errors->has('urna_id')) has-error @endif">
                       <label for="urna_id-field">Urna_id</label>
                    <input type="text" id="urna_id-field" name="urna_id" class="form-control" value="{{ $servicio->urna_id }}" required/>
                       @if($errors->has("urna_id"))
                        <span class="help-block">{{ $errors->first("urna_id") }}</span>
                       @endif
                    </div>
                    <div class="well well-sm">
                        <button type="submit" class="btn btn-primary">Guardar</button>
                        <a class="btn btn-link pull-right" href="{{ route('servicios.index') }}"><i class="glyphicon glyphicon-backward"></i>  Atrás</a>
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

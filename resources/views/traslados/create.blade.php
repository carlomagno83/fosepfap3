@extends('layouts.iframe')

@section('css')
    <style>
        .main-content .content-wrap .wrapper {
            padding-top: 0px;
        }
    </style>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.0/css/bootstrap-datepicker.css" rel="stylesheet">
@endsection

@section('header')
<section class="panel panel-default">
    <header class="panel-heading">
        <h5><i class="glyphicon glyphicon-plus"></i> Traslados / Crear</h5>
    </header>

@endsection

@section('content')
    @include('error')

    <div class="panel-body">
        <div class="row">

            <form action="{{ route('traslados.store') }}" method="POST">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">

            <div class="col-md-3">

                    <div class="form-group @if($errors->has('tra_fec')) has-error @endif">
                       <label for="tra_fec-field">Tra_fec</label>
                    <input type="text" id="tra_fec-field" name="tra_fec" class="form-control" value="{{ old("tra_fec") }}" required/>
                       @if($errors->has("tra_fec"))
                        <span class="help-block">{{ $errors->first("tra_fec") }}</span>
                       @endif
                    </div>
                    <div class="form-group @if($errors->has('tra_est')) has-error @endif">
                       <label for="tra_est-field">Tra_est</label>
                    <input type="text" id="tra_est-field" name="tra_est" class="form-control" value="{{ old("tra_est") }}" required/>
                       @if($errors->has("tra_est"))
                        <span class="help-block">{{ $errors->first("tra_est") }}</span>
                       @endif
                    </div>
                    <div class="form-group @if($errors->has('tra_ttr')) has-error @endif">
                       <label for="tra_ttr-field">Tra_ttr</label>
                    <input type="text" id="tra_ttr-field" name="tra_ttr" class="form-control" value="{{ old("tra_ttr") }}" required/>
                       @if($errors->has("tra_ttr"))
                        <span class="help-block">{{ $errors->first("tra_ttr") }}</span>
                       @endif
                    </div>
                    <div class="form-group @if($errors->has('tra_cor')) has-error @endif">
                       <label for="tra_cor-field">Tra_cor</label>
                    <input type="text" id="tra_cor-field" name="tra_cor" class="form-control" value="{{ old("tra_cor") }}" required/>
                       @if($errors->has("tra_cor"))
                        <span class="help-block">{{ $errors->first("tra_cor") }}</span>
                       @endif
                    </div>

            </div>

            <div class="col-md-3">
                <div class="form-group @if($errors->has('tra_cde')) has-error @endif">
                    <label for="tra_cde-field">Tra_cde</label>
                    <input type="text" id="tra_cde-field" name="tra_cde" class="form-control" value="{{ old("tra_cde") }}" required/>
                    @if($errors->has("tra_cde"))
                        <span class="help-block">{{ $errors->first("tra_cde") }}</span>
                    @endif
                </div>
                <div class="form-group @if($errors->has('tra_klm')) has-error @endif">
                    <label for="tra_klm-field">Tra_klm</label>
                    <input type="text" id="tra_klm-field" name="tra_klm" class="form-control" value="{{ old("tra_klm") }}" required/>
                    @if($errors->has("tra_klm"))
                        <span class="help-block">{{ $errors->first("tra_klm") }}</span>
                    @endif
                </div>
                <div class="form-group @if($errors->has('tra_fsa')) has-error @endif">
                    <label for="tra_fsa-field">Tra_fsa</label>
                    <input type="text" id="tra_fsa-field" name="tra_fsa" class="form-control" value="{{ old("tra_fsa") }}" required/>
                    @if($errors->has("tra_fsa"))
                        <span class="help-block">{{ $errors->first("tra_fsa") }}</span>
                    @endif
                </div>
                <div class="form-group @if($errors->has('tra_hsa')) has-error @endif">
                    <label for="tra_hsa-field">Tra_hsa</label>
                    <input type="text" id="tra_hsa-field" name="tra_hsa" class="form-control" value="{{ old("tra_hsa") }}" required/>
                    @if($errors->has("tra_hsa"))
                        <span class="help-block">{{ $errors->first("tra_hsa") }}</span>
                    @endif
                </div>
            </div>

            <div class="col-md-3">
                <div class="form-group @if($errors->has('tra_fll')) has-error @endif">
                    <label for="tra_fll-field">Tra_fll</label>
                    <input type="text" id="tra_fll-field" name="tra_fll" class="form-control" value="{{ old("tra_fll") }}" required/>
                    @if($errors->has("tra_fll"))
                        <span class="help-block">{{ $errors->first("tra_fll") }}</span>
                    @endif
                </div>
                <div class="form-group @if($errors->has('tra_hll')) has-error @endif">
                    <label for="tra_hll-field">Tra_hll</label>
                    <input type="text" id="tra_hll-field" name="tra_hll" class="form-control" value="{{ old("tra_hll") }}" required/>
                    @if($errors->has("tra_hll"))
                        <span class="help-block">{{ $errors->first("tra_hll") }}</span>
                    @endif
                </div>
                <div class="form-group @if($errors->has('tra_pre')) has-error @endif">
                    <label for="tra_pre-field">Tra_pre</label>
                    <input type="text" id="tra_pre-field" name="tra_pre" class="form-control" value="{{ old("tra_pre") }}" required/>
                    @if($errors->has("tra_pre"))
                        <span class="help-block">{{ $errors->first("tra_pre") }}</span>
                    @endif
                </div>
                <div class="form-group @if($errors->has('distrito_id')) has-error @endif">
                    <label for="distrito_id-field">Distrito_id</label>
                    <input type="text" id="distrito_id-field" name="distrito_id" class="form-control" value="{{ old("distrito_id") }}" required/>
                    @if($errors->has("distrito_id"))
                        <span class="help-block">{{ $errors->first("distrito_id") }}</span>
                    @endif
                </div>
            </div>

            <div class="col-md-3">
                <div class="form-group @if($errors->has('cabeceracontrato_id')) has-error @endif">
                    <label for="cabeceracontrato_id-field">Cabeceracontrato_id</label>
                    <input type="text" id="cabeceracontrato_id-field" name="cabeceracontrato_id" class="form-control" value="{{ old("cabeceracontrato_id") }}" required/>
                    @if($errors->has("cabeceracontrato_id"))
                        <span class="help-block">{{ $errors->first("cabeceracontrato_id") }}</span>
                    @endif
                </div>
                <div class="form-group @if($errors->has('proveedor_id')) has-error @endif">
                    <label for="proveedor_id-field">Proveedor_id</label>
                    <input type="text" id="proveedor_id-field" name="proveedor_id" class="form-control" value="{{ old("proveedor_id") }}" required/>
                    @if($errors->has("proveedor_id"))
                        <span class="help-block">{{ $errors->first("proveedor_id") }}</span>
                    @endif
                </div>
            </div>

            <div class="col-md-12">
                <div class="well well-sm">
                    <a class="btn btn-link" href="{{ route('traslados.index') }}"><i class="glyphicon glyphicon-backward"></i> Atrás</a>
                    <button type="submit" class="btn btn-primary pull-right">Crear</button>
                </div>
            </div>

            </form>

        </div>
    </div>
</section>
@endsection

@section('scripts')
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.0/js/bootstrap-datepicker.min.js"></script>
  <script>
    $('.date-picker').datepicker({
    });
  </script>
@endsection

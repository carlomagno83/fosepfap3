@extends('layouts.admin')

@section('css')
  <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.0/css/bootstrap-datepicker.css" rel="stylesheet">
@endsection

@section('header')
<div class="col-md-6">
<section class="panel panel-default">

    <header class="panel-heading">
        <h5><i class="glyphicon glyphicon-edit"></i> Sepelios / Editar #{{$sepelio->id}}</h5>
    </header>

@endsection

@section('content')
    @include('error')

    <div class="panel-body">
        <div class="row">
            <div class="col-md-12">

                <form action="{{ route('sepelios.update', $sepelio->id) }}" method="POST">
                    <input type="hidden" name="_method" value="PUT">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">

                    <div class="form-group @if($errors->has('cem_fse')) has-error @endif">
                       <label for="cem_fse-field">Cem_fse</label>
                    <input type="text" id="cem_fse-field" name="cem_fse" class="form-control" value="{{ $sepelio->cem_fse }}" required/>
                       @if($errors->has("cem_fse"))
                        <span class="help-block">{{ $errors->first("cem_fse") }}</span>
                       @endif
                    </div>
                    <div class="form-group @if($errors->has('cem_hsf')) has-error @endif">
                       <label for="cem_hsf-field">Cem_hsf</label>
                    <input type="text" id="cem_hsf-field" name="cem_hsf" class="form-control" value="{{ $sepelio->cem_hsf }}" required/>
                       @if($errors->has("cem_hsf"))
                        <span class="help-block">{{ $errors->first("cem_hsf") }}</span>
                       @endif
                    </div>
                    <div class="form-group @if($errors->has('cem_hsv')) has-error @endif">
                       <label for="cem_hsv-field">Cem_hsv</label>
                    <input type="text" id="cem_hsv-field" name="cem_hsv" class="form-control" value="{{ $sepelio->cem_hsv }}" required/>
                       @if($errors->has("cem_hsv"))
                        <span class="help-block">{{ $errors->first("cem_hsv") }}</span>
                       @endif
                    </div>
                    <div class="form-group @if($errors->has('cem_hic')) has-error @endif">
                       <label for="cem_hic-field">Cem_hic</label>
                    <input type="text" id="cem_hic-field" name="cem_hic" class="form-control" value="{{ $sepelio->cem_hic }}" required/>
                       @if($errors->has("cem_hic"))
                        <span class="help-block">{{ $errors->first("cem_hic") }}</span>
                       @endif
                    </div>
                    <div class="form-group @if($errors->has('cem_tse')) has-error @endif">
                       <label for="cem_tse-field">Cem_tse</label>
                    <input type="text" id="cem_tse-field" name="cem_tse" class="form-control" value="{{ $sepelio->cem_tse }}" required/>
                       @if($errors->has("cem_tse"))
                        <span class="help-block">{{ $errors->first("cem_tse") }}</span>
                       @endif
                    </div>
                    <div class="form-group @if($errors->has('cem_tip')) has-error @endif">
                       <label for="cem_tip-field">Cem_tip</label>
                    <input type="text" id="cem_tip-field" name="cem_tip" class="form-control" value="{{ $sepelio->cem_tip }}" required/>
                       @if($errors->has("cem_tip"))
                        <span class="help-block">{{ $errors->first("cem_tip") }}</span>
                       @endif
                    </div>
                    <div class="form-group @if($errors->has('cem_sep')) has-error @endif">
                       <label for="cem_sep-field">Cem_sep</label>
                    <input type="text" id="cem_sep-field" name="cem_sep" class="form-control" value="{{ $sepelio->cem_sep }}" required/>
                       @if($errors->has("cem_sep"))
                        <span class="help-block">{{ $errors->first("cem_sep") }}</span>
                       @endif
                    </div>
                    <div class="form-group @if($errors->has('cem_nco')) has-error @endif">
                       <label for="cem_nco-field">Cem_nco</label>
                    <input type="text" id="cem_nco-field" name="cem_nco" class="form-control" value="{{ $sepelio->cem_nco }}" required/>
                       @if($errors->has("cem_nco"))
                        <span class="help-block">{{ $errors->first("cem_nco") }}</span>
                       @endif
                    </div>
                    <div class="form-group @if($errors->has('cem_oco')) has-error @endif">
                       <label for="cem_oco-field">Cem_oco</label>
                    <input type="text" id="cem_oco-field" name="cem_oco" class="form-control" value="{{ $sepelio->cem_oco }}" required/>
                       @if($errors->has("cem_oco"))
                        <span class="help-block">{{ $errors->first("cem_oco") }}</span>
                       @endif
                    </div>
                    <div class="form-group @if($errors->has('cem_fec')) has-error @endif">
                       <label for="cem_fec-field">Cem_fec</label>
                    <input type="text" id="cem_fec-field" name="cem_fec" class="form-control" value="{{ $sepelio->cem_fec }}" required/>
                       @if($errors->has("cem_fec"))
                        <span class="help-block">{{ $errors->first("cem_fec") }}</span>
                       @endif
                    </div>
                    <div class="form-group @if($errors->has('cem_pre')) has-error @endif">
                       <label for="cem_pre-field">Cem_pre</label>
                    <input type="text" id="cem_pre-field" name="cem_pre" class="form-control" value="{{ $sepelio->cem_pre }}" required/>
                       @if($errors->has("cem_pre"))
                        <span class="help-block">{{ $errors->first("cem_pre") }}</span>
                       @endif
                    </div>
                    <div class="form-group @if($errors->has('distrito_id')) has-error @endif">
                       <label for="distrito_id-field">Distrito_id</label>
                    <input type="text" id="distrito_id-field" name="distrito_id" class="form-control" value="{{ $sepelio->distrito_id }}" required/>
                       @if($errors->has("distrito_id"))
                        <span class="help-block">{{ $errors->first("distrito_id") }}</span>
                       @endif
                    </div>
                    <div class="form-group @if($errors->has('proveedor_id')) has-error @endif">
                       <label for="proveedor_id-field">Proveedor_id</label>
                    <input type="text" id="proveedor_id-field" name="proveedor_id" class="form-control" value="{{ $sepelio->proveedor_id }}" required/>
                       @if($errors->has("proveedor_id"))
                        <span class="help-block">{{ $errors->first("proveedor_id") }}</span>
                       @endif
                    </div>
                    <div class="well well-sm">
                        <button type="submit" class="btn btn-primary">Guardar</button>
                        <a class="btn btn-link pull-right" href="{{ route('sepelios.index') }}"><i class="glyphicon glyphicon-backward"></i>  Atrás</a>
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

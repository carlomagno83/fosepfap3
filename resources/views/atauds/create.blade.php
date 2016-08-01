@extends('layouts.admin')

@section('css')
  <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.0/css/bootstrap-datepicker.css" rel="stylesheet">
@endsection

@section('header')
<div class="col-md-6">
<section class="panel panel-default">
    <header class="panel-heading">
        <h5><i class="glyphicon glyphicon-plus"></i> Atauds / Crear</h5>
    </header>

@endsection

@section('content')
    @include('error')

    <div class="panel-body">
        <div class="row">
            <div class="col-md-12">

                <form action="{{ route('atauds.store') }}" method="POST">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">

                    <div class="form-group @if($errors->has('ata_tma')) has-error @endif">
                       <label for="ata_tma-field">Ata_tma</label>
                    <input type="text" id="ata_tma-field" name="ata_tma" class="form-control" value="{{ old("ata_tma") }}" required/>
                       @if($errors->has("ata_tma"))
                        <span class="help-block">{{ $errors->first("ata_tma") }}</span>
                       @endif
                    </div>
                    <div class="form-group @if($errors->has('ata_pre')) has-error @endif">
                       <label for="ata_pre-field">Ata_pre</label>
                    <input type="text" id="ata_pre-field" name="ata_pre" class="form-control" value="{{ old("ata_pre") }}" required/>
                       @if($errors->has("ata_pre"))
                        <span class="help-block">{{ $errors->first("ata_pre") }}</span>
                       @endif
                    </div>
                    <div class="form-group @if($errors->has('ata_noc')) has-error @endif">
                       <label for="ata_noc-field">Ata_noc</label>
                    <input type="text" id="ata_noc-field" name="ata_noc" class="form-control" value="{{ old("ata_noc") }}" required/>
                       @if($errors->has("ata_noc"))
                        <span class="help-block">{{ $errors->first("ata_noc") }}</span>
                       @endif
                    </div>
                    <div class="form-group @if($errors->has('ata_fec')) has-error @endif">
                       <label for="ata_fec-field">Ata_fec</label>
                    <input type="text" id="ata_fec-field" name="ata_fec" class="form-control" value="{{ old("ata_fec") }}" required/>
                       @if($errors->has("ata_fec"))
                        <span class="help-block">{{ $errors->first("ata_fec") }}</span>
                       @endif
                    </div>
                    <div class="form-group @if($errors->has('proveedor_id')) has-error @endif">
                       <label for="proveedor_id-field">Proveedor_id</label>
                        {{Form::select('proveedor_id', \App\Proveedor::pluck('pro_rso','id') ,null, ['placeholder' => 'Seleccione Proveedor','id'=>'proveedor_id-field','class'=>'form-control','required'=>''])}}
                       @if($errors->has("proveedor_id"))
                        <span class="help-block">{{ $errors->first("proveedor_id") }}</span>
                       @endif
                    </div>
                    <div class="form-group @if($errors->has('color_id')) has-error @endif">
                       <label for="color_id-field">Color_id</label>
                        {{Form::select('color_id', \App\Color::pluck('col_nom','id') ,null, ['placeholder' => 'Seleccione Color','id'=>'color_id-field','class'=>'form-control','required'=>''])}}
                       @if($errors->has("color_id"))
                        <span class="help-block">{{ $errors->first("color_id") }}</span>
                       @endif
                    </div>
                    <div class="form-group @if($errors->has('ataudmodelo_id')) has-error @endif">
                       <label for="ataudmodelo_id-field">Ataudmodelo_id</label>
                        {{Form::select('ataudmodelo_id', \App\Ataudmodelo::pluck('atm_nom','id') ,null, ['placeholder' => 'Seleccione Modelo','id'=>'ataudmodelo_id-field','class'=>'form-control','required'=>''])}}
                       @if($errors->has("ataudmodelo_id"))
                        <span class="help-block">{{ $errors->first("ataudmodelo_id") }}</span>
                       @endif
                    </div>
                    <div class="form-group @if($errors->has('ataudtamano_id')) has-error @endif">
                       <label for="ataudtamano_id-field">Ataudtamano_id</label>
                        {{Form::select('ataudtamano_id', \App\Ataudtamano::pluck('att_nom','id') ,null, ['placeholder' => 'Seleccione Tamaño','id'=>'ataudtamano_id-field','class'=>'form-control','required'=>''])}}
                       @if($errors->has("ataudtamano_id"))
                        <span class="help-block">{{ $errors->first("ataudtamano_id") }}</span>
                       @endif
                    </div>
                    <div class="well well-sm">
                        <button type="submit" class="btn btn-primary">Crear</button>
                        <a class="btn btn-link pull-right" href="{{ route('atauds.index') }}"><i class="glyphicon glyphicon-backward"></i> Atrás</a>
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

@extends('layouts.admin')

@section('css')
  <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.0/css/bootstrap-datepicker.css" rel="stylesheet">
@endsection

@section('header')
<div class="col-md-6">
<section class="panel panel-default">

    <header class="panel-heading">
        <h5><i class="glyphicon glyphicon-edit"></i> Proveedors / Editar #{{$proveedor->id}}</h5>
    </header>

@endsection

@section('content')
    @include('error')

    <div class="panel-body">
        <div class="row">
            <div class="col-md-12">

                <form action="{{ route('proveedors.update', $proveedor->id) }}" method="POST">
                    <input type="hidden" name="_method" value="PUT">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">

                    <div class="form-group @if($errors->has('pro_ruc')) has-error @endif">
                       <label for="pro_ruc-field">Pro_ruc</label>
                    <input type="text" id="pro_ruc-field" name="pro_ruc" class="form-control" value="{{ $proveedor->pro_ruc }}" required/>
                       @if($errors->has("pro_ruc"))
                        <span class="help-block">{{ $errors->first("pro_ruc") }}</span>
                       @endif
                    </div>
                    <div class="form-group @if($errors->has('pro_rso')) has-error @endif">
                       <label for="pro_rso-field">Pro_rso</label>
                    <input type="text" id="pro_rso-field" name="pro_rso" class="form-control" value="{{ $proveedor->pro_rso }}" required/>
                       @if($errors->has("pro_rso"))
                        <span class="help-block">{{ $errors->first("pro_rso") }}</span>
                       @endif
                    </div>
                    <div class="form-group @if($errors->has('pro_dir')) has-error @endif">
                       <label for="pro_dir-field">Pro_dir</label>
                    <input type="text" id="pro_dir-field" name="pro_dir" class="form-control" value="{{ $proveedor->pro_dir }}" required/>
                       @if($errors->has("pro_dir"))
                        <span class="help-block">{{ $errors->first("pro_dir") }}</span>
                       @endif
                    </div>
                    <div class="form-group @if($errors->has('pro_fij')) has-error @endif">
                       <label for="pro_fij-field">Pro_fij</label>
                    <input type="text" id="pro_fij-field" name="pro_fij" class="form-control" value="{{ $proveedor->pro_fij }}" required/>
                       @if($errors->has("pro_fij"))
                        <span class="help-block">{{ $errors->first("pro_fij") }}</span>
                       @endif
                    </div>
                    <div class="form-group @if($errors->has('pro_cel')) has-error @endif">
                       <label for="pro_cel-field">Pro_cel</label>
                    <input type="text" id="pro_cel-field" name="pro_cel" class="form-control" value="{{ $proveedor->pro_cel }}" required/>
                       @if($errors->has("pro_cel"))
                        <span class="help-block">{{ $errors->first("pro_cel") }}</span>
                       @endif
                    </div>
                    <div class="form-group @if($errors->has('pro_mai')) has-error @endif">
                       <label for="pro_mai-field">Pro_mai</label>
                    <input type="text" id="pro_mai-field" name="pro_mai" class="form-control" value="{{ $proveedor->pro_mai }}" required/>
                       @if($errors->has("pro_mai"))
                        <span class="help-block">{{ $errors->first("pro_mai") }}</span>
                       @endif
                    </div>
                    <div class="form-group @if($errors->has('pro_obs')) has-error @endif">
                       <label for="pro_obs-field">Pro_obs</label>
                    <input type="text" id="pro_obs-field" name="pro_obs" class="form-control" value="{{ $proveedor->pro_obs }}" required/>
                       @if($errors->has("pro_obs"))
                        <span class="help-block">{{ $errors->first("pro_obs") }}</span>
                       @endif
                    </div>
                    <div class="form-group @if($errors->has('distrito_id')) has-error @endif">
                       <label for="distrito_id-field">Distrito_id</label>
                    <input type="text" id="distrito_id-field" name="distrito_id" class="form-control" value="{{ $proveedor->distrito_id }}" required/>
                       @if($errors->has("distrito_id"))
                        <span class="help-block">{{ $errors->first("distrito_id") }}</span>
                       @endif
                    </div>
                    <div class="form-group @if($errors->has('categoria_id')) has-error @endif">
                       <label for="categoria_id-field">Categoria_id</label>
                    <input type="text" id="categoria_id-field" name="categoria_id" class="form-control" value="{{ $proveedor->categoria_id }}" required/>
                       @if($errors->has("categoria_id"))
                        <span class="help-block">{{ $errors->first("categoria_id") }}</span>
                       @endif
                    </div>
                    <div class="well well-sm">
                        <button type="submit" class="btn btn-primary">Guardar</button>
                        <a class="btn btn-link pull-right" href="{{ route('proveedors.index') }}"><i class="glyphicon glyphicon-backward"></i>  Atrás</a>
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

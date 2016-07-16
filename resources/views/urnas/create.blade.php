@extends('layouts.admin')
@section('css')
  <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.0/css/bootstrap-datepicker.css" rel="stylesheet">
@endsection
@section('header')
    <div class="page-header">
        <h1><i class="glyphicon glyphicon-plus"></i> Urnas / Create </h1>
    </div>
@endsection

@section('content')
    @include('error')

    <div class="row">
        <div class="col-md-12">

            <form action="{{ route('urnas.store') }}" method="POST">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">

                <div class="form-group @if($errors->has('urn_id')) has-error @endif">
                       <label for="urn_id-field">Urn_id</label>
                    <input type="text" id="urn_id-field" name="urn_id" class="form-control" value="{{ old("urn_id") }}"/>
                       @if($errors->has("urn_id"))
                        <span class="help-block">{{ $errors->first("urn_id") }}</span>
                       @endif
                    </div>
                    <div class="form-group @if($errors->has('urn_tip')) has-error @endif">
                       <label for="urn_tip-field">Urn_tip</label>
                    <input type="text" id="urn_tip-field" name="urn_tip" class="form-control" value="{{ old("urn_tip") }}"/>
                       @if($errors->has("urn_tip"))
                        <span class="help-block">{{ $errors->first("urn_tip") }}</span>
                       @endif
                    </div>
                    <div class="form-group @if($errors->has('urn_mod')) has-error @endif">
                       <label for="urn_mod-field">Urn_mod</label>
                    <input type="text" id="urn_mod-field" name="urn_mod" class="form-control" value="{{ old("urn_mod") }}"/>
                       @if($errors->has("urn_mod"))
                        <span class="help-block">{{ $errors->first("urn_mod") }}</span>
                       @endif
                    </div>
                    <div class="form-group @if($errors->has('urn_col')) has-error @endif">
                       <label for="urn_col-field">Urn_col</label>
                    <input type="text" id="urn_col-field" name="urn_col" class="form-control" value="{{ old("urn_col") }}"/>
                       @if($errors->has("urn_col"))
                        <span class="help-block">{{ $errors->first("urn_col") }}</span>
                       @endif
                    </div>
                    <div class="form-group @if($errors->has('urn_pre')) has-error @endif">
                       <label for="urn_pre-field">Urn_pre</label>
                    <input type="text" id="urn_pre-field" name="urn_pre" class="form-control" value="{{ old("urn_pre") }}"/>
                       @if($errors->has("urn_pre"))
                        <span class="help-block">{{ $errors->first("urn_pre") }}</span>
                       @endif
                    </div>
                    <div class="form-group @if($errors->has('servicio_id')) has-error @endif">
                       <label for="servicio_id-field">Servicio_id</label>
                    <input type="text" id="servicio_id-field" name="servicio_id" class="form-control" value="{{ old("servicio_id") }}"/>
                       @if($errors->has("servicio_id"))
                        <span class="help-block">{{ $errors->first("servicio_id") }}</span>
                       @endif
                    </div>
                    <div class="form-group @if($errors->has('proveedor_id')) has-error @endif">
                       <label for="proveedor_id-field">Proveedor_id</label>
                    <input type="text" id="proveedor_id-field" name="proveedor_id" class="form-control" value="{{ old("proveedor_id") }}"/>
                       @if($errors->has("proveedor_id"))
                        <span class="help-block">{{ $errors->first("proveedor_id") }}</span>
                       @endif
                    </div>
                <div class="well well-sm">
                    <button type="submit" class="btn btn-primary">Create</button>
                    <a class="btn btn-link pull-right" href="{{ route('urnas.index') }}"><i class="glyphicon glyphicon-backward"></i> Back</a>
                </div>
            </form>

        </div>
    </div>
@endsection
@section('scripts')
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.0/js/bootstrap-datepicker.min.js"></script>
  <script>
    $('.date-picker').datepicker({
    });
  </script>
@endsection

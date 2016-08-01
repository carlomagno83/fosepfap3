@extends('layouts.admin')

@section('css')
  <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.0/css/bootstrap-datepicker.css" rel="stylesheet">
@endsection

@section('header')
<div class="col-md-6">
<section class="panel panel-default">
    <header class="panel-heading">
        <h5><i class="glyphicon glyphicon-plus"></i> Urnas / Crear</h5>
    </header>

@endsection

@section('content')
    @include('error')

    <div class="panel-body">
        <div class="row">
            <div class="col-md-12">

                <form action="{{ route('urnas.store') }}" method="POST">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">

                    <div class="form-group @if($errors->has('urn_tip')) has-error @endif">
                       <label for="urn_tip-field">Urn_tip</label>
                    <input type="text" id="urn_tip-field" name="urn_tip" class="form-control" value="{{ old("urn_tip") }}" required/>
                       @if($errors->has("urn_tip"))
                        <span class="help-block">{{ $errors->first("urn_tip") }}</span>
                       @endif
                    </div>
                    <div class="form-group @if($errors->has('urn_mod')) has-error @endif">
                       <label for="urn_mod-field">Urn_mod</label>
                    <input type="text" id="urn_mod-field" name="urn_mod" class="form-control" value="{{ old("urn_mod") }}" required/>
                       @if($errors->has("urn_mod"))
                        <span class="help-block">{{ $errors->first("urn_mod") }}</span>
                       @endif
                    </div>
                    <div class="form-group @if($errors->has('urn_col')) has-error @endif">
                       <label for="urn_col-field">Urn_col</label>
                    <input type="text" id="urn_col-field" name="urn_col" class="form-control" value="{{ old("urn_col") }}" required/>
                       @if($errors->has("urn_col"))
                        <span class="help-block">{{ $errors->first("urn_col") }}</span>
                       @endif
                    </div>
                    <div class="form-group @if($errors->has('urn_pre')) has-error @endif">
                       <label for="urn_pre-field">Urn_pre</label>
                    <input type="text" id="urn_pre-field" name="urn_pre" class="form-control" value="{{ old("urn_pre") }}" required/>
                       @if($errors->has("urn_pre"))
                        <span class="help-block">{{ $errors->first("urn_pre") }}</span>
                       @endif
                    </div>
                    <div class="form-group @if($errors->has('proveedor_id')) has-error @endif">
                       <label for="proveedor_id-field">Proveedor_id</label>
                    <input type="text" id="proveedor_id-field" name="proveedor_id" class="form-control" value="{{ old("proveedor_id") }}" required/>
                       @if($errors->has("proveedor_id"))
                        <span class="help-block">{{ $errors->first("proveedor_id") }}</span>
                       @endif
                    </div>
                    <div class="well well-sm">
                        <button type="submit" class="btn btn-primary">Crear</button>
                        <a class="btn btn-link pull-right" href="{{ route('urnas.index') }}"><i class="glyphicon glyphicon-backward"></i> Atrás</a>
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

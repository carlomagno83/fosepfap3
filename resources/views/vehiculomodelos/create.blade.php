@extends('layouts.admin')

@section('css')
  <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.0/css/bootstrap-datepicker.css" rel="stylesheet">
@endsection

@section('header')
<div class="col-md-6">
<section class="panel panel-default">
    <header class="panel-heading">
        <h5><i class="glyphicon glyphicon-plus"></i> Vehiculomodelos / Crear</h5>
    </header>

@endsection

@section('content')
    @include('error')

    <div class="panel-body">
        <div class="row">
            <div class="col-md-12">

                <form action="{{ route('vehiculomodelos.store') }}" method="POST">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">

                    <div class="form-group @if($errors->has('vmo_nom')) has-error @endif">
                       <label for="vmo_nom-field">Vmo_nom</label>
                    <input type="text" id="vmo_nom-field" name="vmo_nom" class="form-control" value="{{ old("vmo_nom") }}" required/>
                       @if($errors->has("vmo_nom"))
                        <span class="help-block">{{ $errors->first("vmo_nom") }}</span>
                       @endif
                    </div>
                    <div class="form-group @if($errors->has('vehiculomarca_id')) has-error @endif">
                       <label for="vehiculomarca_id-field">Vehiculomarca_id</label>
                    <input type="text" id="vehiculomarca_id-field" name="vehiculomarca_id" class="form-control" value="{{ old("vehiculomarca_id") }}" required/>
                       @if($errors->has("vehiculomarca_id"))
                        <span class="help-block">{{ $errors->first("vehiculomarca_id") }}</span>
                       @endif
                    </div>
                    <div class="well well-sm">
                        <button type="submit" class="btn btn-primary">Crear</button>
                        <a class="btn btn-link pull-right" href="{{ route('vehiculomodelos.index') }}"><i class="glyphicon glyphicon-backward"></i> Atrás</a>
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

@extends('layouts.admin')

@section('css')
  <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.0/css/bootstrap-datepicker.css" rel="stylesheet">
@endsection

@section('header')
<div class="col-md-6">
<section class="panel panel-default">

    <header class="panel-heading">
        <h5><i class="glyphicon glyphicon-edit"></i> Tipocandelabros / Editar #{{$tipocandelabro->id}}</h5>
    </header>

@endsection

@section('content')
    @include('error')

    <div class="panel-body">
        <div class="row">
            <div class="col-md-12">

                <form action="{{ route('tipocandelabros.update', $tipocandelabro->id) }}" method="POST">
                    <input type="hidden" name="_method" value="PUT">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">

                    <div class="form-group @if($errors->has('tca_nom')) has-error @endif">
                       <label for="tca_nom-field">Tca_nom</label>
                    <input type="text" id="tca_nom-field" name="tca_nom" class="form-control" value="{{ $tipocandelabro->tca_nom }}" required/>
                       @if($errors->has("tca_nom"))
                        <span class="help-block">{{ $errors->first("tca_nom") }}</span>
                       @endif
                    </div>
                    <div class="form-group @if($errors->has('tca_tip')) has-error @endif">
                       <label for="tca_tip-field">Tca_tip</label>
                    <input type="text" id="tca_tip-field" name="tca_tip" class="form-control" value="{{ $tipocandelabro->tca_tip }}" required/>
                       @if($errors->has("tca_tip"))
                        <span class="help-block">{{ $errors->first("tca_tip") }}</span>
                       @endif
                    </div>
                    <div class="form-group @if($errors->has('candelabro_id')) has-error @endif">
                       <label for="candelabro_id-field">Candelabro_id</label>
                    <input type="text" id="candelabro_id-field" name="candelabro_id" class="form-control" value="{{ $tipocandelabro->candelabro_id }}" required/>
                       @if($errors->has("candelabro_id"))
                        <span class="help-block">{{ $errors->first("candelabro_id") }}</span>
                       @endif
                    </div>
                    <div class="well well-sm">
                        <button type="submit" class="btn btn-primary">Guardar</button>
                        <a class="btn btn-link pull-right" href="{{ route('tipocandelabros.index') }}"><i class="glyphicon glyphicon-backward"></i>  Atrás</a>
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

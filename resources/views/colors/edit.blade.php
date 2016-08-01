@extends('layouts.admin')

@section('css')
  <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.0/css/bootstrap-datepicker.css" rel="stylesheet">
@endsection

@section('header')
<div class="col-md-6">
<section class="panel panel-default">

    <header class="panel-heading">
        <h5><i class="glyphicon glyphicon-edit"></i> Colors / Editar #{{$color->id}}</h5>
    </header>

@endsection

@section('content')
    @include('error')

    <div class="panel-body">
        <div class="row">
            <div class="col-md-12">

                <form action="{{ route('colors.update', $color->id) }}" method="POST">
                    <input type="hidden" name="_method" value="PUT">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">

                    <div class="form-group @if($errors->has('col_nom')) has-error @endif">
                       <label for="col_nom-field">Col_nom</label>
                    <input type="text" id="col_nom-field" name="col_nom" class="form-control" value="{{ $color->col_nom }}" required/>
                       @if($errors->has("col_nom"))
                        <span class="help-block">{{ $errors->first("col_nom") }}</span>
                       @endif
                    </div>
                    <div class="form-group @if($errors->has('tipocandelabro_id')) has-error @endif">
                       <label for="tipocandelabro_id-field">Tipocandelabro_id</label>
                    <input type="text" id="tipocandelabro_id-field" name="tipocandelabro_id" class="form-control" value="{{ $color->tipocandelabro_id }}" required/>
                       @if($errors->has("tipocandelabro_id"))
                        <span class="help-block">{{ $errors->first("tipocandelabro_id") }}</span>
                       @endif
                    </div>
                    <div class="well well-sm">
                        <button type="submit" class="btn btn-primary">Guardar</button>
                        <a class="btn btn-link pull-right" href="{{ route('colors.index') }}"><i class="glyphicon glyphicon-backward"></i>  Atrás</a>
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

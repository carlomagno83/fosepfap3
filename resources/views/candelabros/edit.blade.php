@extends('layouts.admin')

@section('css')
  <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.0/css/bootstrap-datepicker.css" rel="stylesheet">
@endsection

@section('header')
<div class="col-md-6">
<section class="panel panel-default">

    <header class="panel-heading">
        <h5><i class="glyphicon glyphicon-edit"></i> Candelabros / Editar #{{$candelabro->id}}</h5>
    </header>

@endsection

@section('content')
    @include('error')

    <div class="panel-body">
        <div class="row">
            <div class="col-md-12">

                <form action="{{ route('candelabros.update', $candelabro->id) }}" method="POST">
                    <input type="hidden" name="_method" value="PUT">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">

                    <div class="form-group @if($errors->has('can_nom')) has-error @endif">
                        <label for="can_nom-field">can_nom</label>
                        <input type="text" id="can_nom-field" name="can_nom" class="form-control" value="{{ $candelabro->can_nom }}" required/>
                        @if($errors->has("can_nom"))
                            <span class="help-block">{{ $errors->first("can_nom") }}</span>
                        @endif
                    </div>

                    <div class="form-group @if($errors->has('can_tipo')) has-error @endif">
                       <label for="can_tipo-field">Can_tipo</label>
                    <input type="text" id="can_tipo-field" name="can_tipo" class="form-control" value="{{ $candelabro->can_tipo }}" required/>
                       @if($errors->has("can_tipo"))
                        <span class="help-block">{{ $errors->first("can_tipo") }}</span>
                       @endif
                    </div>

                    <div class="form-group @if($errors->has('color_id')) has-error @endif">
                       <label for="color_id-field">Color_id</label>
                    <input type="text" id="color_id-field" name="color_id" class="form-control" value="{{ $candelabro->color_id }}" required/>
                       @if($errors->has("color_id"))
                        <span class="help-block">{{ $errors->first("color_id") }}</span>
                       @endif
                    </div>
                    <div class="well well-sm">
                        <button type="submit" class="btn btn-primary">Guardar</button>
                        <a class="btn btn-link pull-right" href="{{ route('candelabros.index') }}"><i class="glyphicon glyphicon-backward"></i>  Atrás</a>
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

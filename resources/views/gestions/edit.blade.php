@extends('layouts.iframe')

@section('css')
  <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.0/css/bootstrap-datepicker.css" rel="stylesheet">
@endsection

@section('header')
<div class="col-md-6">
<section class="panel panel-default">

    <header class="panel-heading">
        <h5><i class="glyphicon glyphicon-edit"></i> Gestions / Editar #{{$gestion->id}}</h5>
    </header>

@endsection

@section('content')
    @include('error')

    <div class="panel-body">
        <div class="row">
            <div class="col-md-12">

                <form action="{{ route('gestions.update', $gestion->id) }}" method="POST">
                    <input type="hidden" name="_method" value="PUT">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">

                    <div class="form-group @if($errors->has('ges_car')) has-error @endif">
                       <label for="ges_car-field">Ges_car</label>
                    <input type="text" id="ges_car-field" name="ges_car" class="form-control" value="{{ $gestion->ges_car }}" required/>
                       @if($errors->has("ges_car"))
                        <span class="help-block">{{ $errors->first("ges_car") }}</span>
                       @endif
                    </div>
                    <div class="form-group @if($errors->has('ges_cem')) has-error @endif">
                       <label for="ges_cem-field">Ges_cem</label>
                    <input type="text" id="ges_cem-field" name="ges_cem" class="form-control" value="{{ $gestion->ges_cem }}" required/>
                       @if($errors->has("ges_cem"))
                        <span class="help-block">{{ $errors->first("ges_cem") }}</span>
                       @endif
                    </div>
                    <div class="form-group @if($errors->has('ges_pro')) has-error @endif">
                       <label for="ges_pro-field">Ges_pro</label>
                    <input type="text" id="ges_pro-field" name="ges_pro" class="form-control" value="{{ $gestion->ges_pro }}" required/>
                       @if($errors->has("ges_pro"))
                        <span class="help-block">{{ $errors->first("ges_pro") }}</span>
                       @endif
                    </div>
                    <div class="form-group @if($errors->has('ges_vel')) has-error @endif">
                       <label for="ges_vel-field">Ges_vel</label>
                    <input type="text" id="ges_vel-field" name="ges_vel" class="form-control" value="{{ $gestion->ges_vel }}" required/>
                       @if($errors->has("ges_vel"))
                        <span class="help-block">{{ $errors->first("ges_vel") }}</span>
                       @endif
                    </div>
                    <div class="form-group @if($errors->has('ges_obs')) has-error @endif">
                       <label for="ges_obs-field">Ges_obs</label>
                    <input type="text" id="ges_obs-field" name="ges_obs" class="form-control" value="{{ $gestion->ges_obs }}" required/>
                       @if($errors->has("ges_obs"))
                        <span class="help-block">{{ $errors->first("ges_obs") }}</span>
                       @endif
                    </div>
                    <div class="form-group @if($errors->has('cabeceracontrato_id')) has-error @endif">
                       <label for="cabeceracontrato_id-field">Cabeceracontrato_id</label>
                    <input type="text" id="cabeceracontrato_id-field" name="cabeceracontrato_id" class="form-control" value="{{ $gestion->cabeceracontrato_id }}" required/>
                       @if($errors->has("cabeceracontrato_id"))
                        <span class="help-block">{{ $errors->first("cabeceracontrato_id") }}</span>
                       @endif
                    </div>
                    <div class="well well-sm">
                        <button type="submit" class="btn btn-primary">Guardar</button>
                        <a class="btn btn-link pull-right" href="{{ route('gestions.index') }}"><i class="glyphicon glyphicon-backward"></i>  Atrás</a>
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

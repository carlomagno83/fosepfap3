@extends('layouts.iframe')

@section('css')
  <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.0/css/bootstrap-datepicker.css" rel="stylesheet">
@endsection

@section('header')
<div class="col-md-6">
<section class="panel panel-default">
    <header class="panel-heading">
        <h5><i class="glyphicon glyphicon-plus"></i> Medicos / Crear</h5>
    </header>

@endsection

@section('content')
    @include('error')

    <div class="panel-body">
        <div class="row">
            <div class="col-md-12">

                <form action="{{ route('medicos.store') }}" method="POST">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">

                    <div class="form-group @if($errors->has('med_dni')) has-error @endif">
                       <label for="med_dni-field">Med_dni</label>
                    <input type="text" id="med_dni-field" name="med_dni" class="form-control" value="{{ old("med_dni") }}" required/>
                       @if($errors->has("med_dni"))
                        <span class="help-block">{{ $errors->first("med_dni") }}</span>
                       @endif
                    </div>
                    <div class="form-group @if($errors->has('med_pat')) has-error @endif">
                       <label for="med_pat-field">Med_pat</label>
                    <input type="text" id="med_pat-field" name="med_pat" class="form-control" value="{{ old("med_pat") }}" required/>
                       @if($errors->has("med_pat"))
                        <span class="help-block">{{ $errors->first("med_pat") }}</span>
                       @endif
                    </div>
                    <div class="form-group @if($errors->has('med_mat')) has-error @endif">
                       <label for="med_mat-field">Med_mat</label>
                    <input type="text" id="med_mat-field" name="med_mat" class="form-control" value="{{ old("med_mat") }}" required/>
                       @if($errors->has("med_mat"))
                        <span class="help-block">{{ $errors->first("med_mat") }}</span>
                       @endif
                    </div>
                    <div class="form-group @if($errors->has('med_nom')) has-error @endif">
                       <label for="med_nom-field">Med_nom</label>
                    <input type="text" id="med_nom-field" name="med_nom" class="form-control" value="{{ old("med_nom") }}" required/>
                       @if($errors->has("med_nom"))
                        <span class="help-block">{{ $errors->first("med_nom") }}</span>
                       @endif
                    </div>
                    <div class="form-group @if($errors->has('med_col')) has-error @endif">
                       <label for="med_col-field">Med_col</label>
                    <input type="text" id="med_col-field" name="med_col" class="form-control" value="{{ old("med_col") }}" required/>
                       @if($errors->has("med_col"))
                        <span class="help-block">{{ $errors->first("med_col") }}</span>
                       @endif
                    </div>
                    <div class="form-group @if($errors->has('med_dir')) has-error @endif">
                       <label for="med_dir-field">Med_dir</label>
                    <input type="text" id="med_dir-field" name="med_dir" class="form-control" value="{{ old("med_dir") }}" required/>
                       @if($errors->has("med_dir"))
                        <span class="help-block">{{ $errors->first("med_dir") }}</span>
                       @endif
                    </div>
                    <div class="form-group @if($errors->has('med_ubi')) has-error @endif">
                       <label for="med_ubi-field">Med_ubi</label>
                    <input type="text" id="med_ubi-field" name="med_ubi" class="form-control" value="{{ old("med_ubi") }}" required/>
                       @if($errors->has("med_ubi"))
                        <span class="help-block">{{ $errors->first("med_ubi") }}</span>
                       @endif
                    </div>
                    <div class="form-group @if($errors->has('distrito_id')) has-error @endif">
                       <label for="distrito_id-field">Distrito_id</label>
                    <input type="text" id="distrito_id-field" name="distrito_id" class="form-control" value="{{ old("distrito_id") }}" required/>
                       @if($errors->has("distrito_id"))
                        <span class="help-block">{{ $errors->first("distrito_id") }}</span>
                       @endif
                    </div>
                    <div class="well well-sm">
                        <button type="submit" class="btn btn-primary">Crear</button>
                        <a class="btn btn-link pull-right" href="{{ route('medicos.index') }}"><i class="glyphicon glyphicon-backward"></i> Atrás</a>
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

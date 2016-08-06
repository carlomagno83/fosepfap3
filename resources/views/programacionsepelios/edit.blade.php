@extends('layouts.iframe')

@section('css')
    <style>
        .main-content .content-wrap .wrapper {
            padding-top: 0px;
        }
    </style>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.0/css/bootstrap-datepicker.css" rel="stylesheet">
@endsection

@section('header')
<div class="col-md-6">
<section class="panel panel-default">

    <header class="panel-heading">
        <h5><i class="glyphicon glyphicon-edit"></i> Programacionsepelios / Editar #{{$programacionsepelio->id}}</h5>
    </header>

@endsection

@section('content')
    @include('error')

    <div class="panel-body">
        <div class="row">

            <form action="{{ route('programacionsepelios.update', $programacionsepelio->id) }}" method="POST">
                <input type="hidden" name="_method" value="PUT">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">

            <div class="col-md-3">

                    <div class="form-group @if($errors->has('prs_fec')) has-error @endif">
                       <label for="prs_fec-field">Prs_fec</label>
                    <input type="text" id="prs_fec-field" name="prs_fec" class="form-control" value="{{ $programacionsepelio->prs_fec }}" required/>
                       @if($errors->has("prs_fec"))
                        <span class="help-block">{{ $errors->first("prs_fec") }}</span>
                       @endif
                    </div>
                    <div class="form-group @if($errors->has('prs_dni')) has-error @endif">
                       <label for="prs_dni-field">Prs_dni</label>
                    <input type="text" id="prs_dni-field" name="prs_dni" class="form-control" value="{{ $programacionsepelio->prs_dni }}" required/>
                       @if($errors->has("prs_dni"))
                        <span class="help-block">{{ $errors->first("prs_dni") }}</span>
                       @endif
                    </div>
                    <div class="form-group @if($errors->has('prs_pat')) has-error @endif">
                       <label for="prs_pat-field">Prs_pat</label>
                    <input type="text" id="prs_pat-field" name="prs_pat" class="form-control" value="{{ $programacionsepelio->prs_pat }}" required/>
                       @if($errors->has("prs_pat"))
                        <span class="help-block">{{ $errors->first("prs_pat") }}</span>
                       @endif
                    </div>
                    <div class="form-group @if($errors->has('prs_mat')) has-error @endif">
                       <label for="prs_mat-field">Prs_mat</label>
                    <input type="text" id="prs_mat-field" name="prs_mat" class="form-control" value="{{ $programacionsepelio->prs_mat }}" required/>
                       @if($errors->has("prs_mat"))
                        <span class="help-block">{{ $errors->first("prs_mat") }}</span>
                       @endif
                    </div>
                    <div class="form-group @if($errors->has('prs_nom')) has-error @endif">
                       <label for="prs_nom-field">Prs_nom</label>
                    <input type="text" id="prs_nom-field" name="prs_nom" class="form-control" value="{{ $programacionsepelio->prs_nom }}" required/>
                       @if($errors->has("prs_nom"))
                        <span class="help-block">{{ $errors->first("prs_nom") }}</span>
                       @endif
                    </div>

            </div>

            <div class="col-md-3">
                <div class="form-group @if($errors->has('prs_vel')) has-error @endif">
                    <label for="prs_vel-field">Prs_vel</label>
                    <input type="text" id="prs_vel-field" name="prs_vel" class="form-control" value="{{ $programacionsepelio->prs_vel }}" required/>
                    @if($errors->has("prs_vel"))
                        <span class="help-block">{{ $errors->first("prs_vel") }}</span>
                    @endif
                </div>
                <div class="form-group @if($errors->has('prs_cem')) has-error @endif">
                    <label for="prs_cem-field">Prs_cem</label>
                    <input type="text" id="prs_cem-field" name="prs_cem" class="form-control" value="{{ $programacionsepelio->prs_cem }}" required/>
                    @if($errors->has("prs_cem"))
                        <span class="help-block">{{ $errors->first("prs_cem") }}</span>
                    @endif
                </div>
                <div class="form-group @if($errors->has('prs_vca')) has-error @endif">
                    <label for="prs_vca-field">Prs_vca</label>
                    <input type="text" id="prs_vca-field" name="prs_vca" class="form-control" value="{{ $programacionsepelio->prs_vca }}" required/>
                    @if($errors->has("prs_vca"))
                        <span class="help-block">{{ $errors->first("prs_vca") }}</span>
                    @endif
                </div>
                <div class="form-group @if($errors->has('prs_chc')) has-error @endif">
                    <label for="prs_chc-field">Prs_chc</label>
                    <input type="text" id="prs_chc-field" name="prs_chc" class="form-control" value="{{ $programacionsepelio->prs_chc }}" required/>
                    @if($errors->has("prs_chc"))
                        <span class="help-block">{{ $errors->first("prs_chc") }}</span>
                    @endif
                </div>
                <div class="form-group @if($errors->has('prs_vfl')) has-error @endif">
                    <label for="prs_vfl-field">Prs_vfl</label>
                    <input type="text" id="prs_vfl-field" name="prs_vfl" class="form-control" value="{{ $programacionsepelio->prs_vfl }}" required/>
                    @if($errors->has("prs_vfl"))
                        <span class="help-block">{{ $errors->first("prs_vfl") }}</span>
                    @endif
                </div>
            </div>


            <div class="col-md-3">
                <div class="form-group @if($errors->has('prs_cfl')) has-error @endif">
                    <label for="prs_cfl-field">Prs_cfl</label>
                    <input type="text" id="prs_cfl-field" name="prs_cfl" class="form-control" value="{{ $programacionsepelio->prs_cfl }}" required/>
                    @if($errors->has("prs_cfl"))
                        <span class="help-block">{{ $errors->first("prs_cfl") }}</span>
                    @endif
                </div>
                <div class="form-group @if($errors->has('prs_vac')) has-error @endif">
                    <label for="prs_vac-field">Prs_vac</label>
                    <input type="text" id="prs_vac-field" name="prs_vac" class="form-control" value="{{ $programacionsepelio->prs_vac }}" required/>
                    @if($errors->has("prs_vac"))
                        <span class="help-block">{{ $errors->first("prs_vac") }}</span>
                    @endif
                </div>
                <div class="form-group @if($errors->has('prs_cac')) has-error @endif">
                    <label for="prs_cac-field">Prs_cac</label>
                    <input type="text" id="prs_cac-field" name="prs_cac" class="form-control" value="{{ $programacionsepelio->prs_cac }}" required/>
                    @if($errors->has("prs_cac"))
                        <span class="help-block">{{ $errors->first("prs_cac") }}</span>
                    @endif
                </div>
                <div class="form-group @if($errors->has('prs_hsf')) has-error @endif">
                    <label for="prs_hsf-field">Prs_hsf</label>
                    <input type="text" id="prs_hsf-field" name="prs_hsf" class="form-control" value="{{ $programacionsepelio->prs_hsf }}" required/>
                    @if($errors->has("prs_hsf"))
                        <span class="help-block">{{ $errors->first("prs_hsf") }}</span>
                    @endif
                </div>
                <div class="form-group @if($errors->has('prs_hsv')) has-error @endif">
                    <label for="prs_hsv-field">Prs_hsv</label>
                    <input type="text" id="prs_hsv-field" name="prs_hsv" class="form-control" value="{{ $programacionsepelio->prs_hsv }}" required/>
                    @if($errors->has("prs_hsv"))
                        <span class="help-block">{{ $errors->first("prs_hsv") }}</span>
                    @endif
                </div>
            </div>


            <div class="col-md-3">
                <div class="form-group @if($errors->has('prs_hic')) has-error @endif">
                    <label for="prs_hic-field">Prs_hic</label>
                    <input type="text" id="prs_hic-field" name="prs_hic" class="form-control" value="{{ $programacionsepelio->prs_hic }}" required/>
                    @if($errors->has("prs_hic"))
                        <span class="help-block">{{ $errors->first("prs_hic") }}</span>
                    @endif
                </div>
                <div class="form-group @if($errors->has('prs_dfu')) has-error @endif">
                    <label for="prs_dfu-field">Prs_dfu</label>
                    <input type="text" id="prs_dfu-field" name="prs_dfu" class="form-control" value="{{ $programacionsepelio->prs_dfu }}" required/>
                    @if($errors->has("prs_dfu"))
                        <span class="help-block">{{ $errors->first("prs_dfu") }}</span>
                    @endif
                </div>
                <div class="form-group @if($errors->has('id')) has-error @endif">
                    <label for="id-field">Id</label>
                    <input type="text" id="id-field" name="id" class="form-control" value="{{ $programacionsepelio->id }}" required/>
                    @if($errors->has("id"))
                        <span class="help-block">{{ $errors->first("id") }}</span>
                    @endif
                </div>
                <div class="form-group @if($errors->has('cabeceracontrato_id')) has-error @endif">
                    <label for="cabeceracontrato_id-field">Cabeceracontrato_id</label>
                    <input type="text" id="cabeceracontrato_id-field" name="cabeceracontrato_id" class="form-control" value="{{ $programacionsepelio->cabeceracontrato_id }}" required/>
                    @if($errors->has("cabeceracontrato_id"))
                        <span class="help-block">{{ $errors->first("cabeceracontrato_id") }}</span>
                    @endif
                </div>
            </div>


            <div class="col-md-12">
                <div class="well well-sm">
                    <button type="submit" class="btn btn-primary">Guardar</button>
                    <a class="btn btn-link pull-right" href="{{ route('programacionsepelios.index') }}"><i class="glyphicon glyphicon-backward"></i>  Atrás</a>
                </div>
            </div>

            </form>

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

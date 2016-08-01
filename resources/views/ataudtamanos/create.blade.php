@extends('layouts.admin')

@section('css')
  <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.0/css/bootstrap-datepicker.css" rel="stylesheet">
@endsection

@section('header')
<div class="col-md-6">
<section class="panel panel-default">
    <header class="panel-heading">
        <h5><i class="glyphicon glyphicon-plus"></i> Ataudtamanos / Crear</h5>
    </header>

@endsection

@section('content')
    @include('error')

    <div class="panel-body">
        <div class="row">
            <div class="col-md-12">

                <form action="{{ route('ataudtamanos.store') }}" method="POST">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">

                    <div class="form-group @if($errors->has('att_nom')) has-error @endif">
                       <label for="att_nom-field">Att_nom</label>
                    <input type="text" id="att_nom-field" name="att_nom" class="form-control" value="{{ old("att_nom") }}" required/>
                       @if($errors->has("att_nom"))
                        <span class="help-block">{{ $errors->first("att_nom") }}</span>
                       @endif
                    </div>
                    <div class="form-group @if($errors->has('att_dim')) has-error @endif">
                       <label for="att_dim-field">Att_dim</label>
                    <input type="text" id="att_dim-field" name="att_dim" class="form-control" value="{{ old("att_dim") }}" required/>
                       @if($errors->has("att_dim"))
                        <span class="help-block">{{ $errors->first("att_dim") }}</span>
                       @endif
                    </div>
                    <div class="well well-sm">
                        <button type="submit" class="btn btn-primary">Crear</button>
                        <a class="btn btn-link pull-right" href="{{ route('ataudtamanos.index') }}"><i class="glyphicon glyphicon-backward"></i> Atrás</a>
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

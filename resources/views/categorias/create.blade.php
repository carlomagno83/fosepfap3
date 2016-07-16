@extends('layouts.admin')
@section('css')
  <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.0/css/bootstrap-datepicker.css" rel="stylesheet">
@endsection
@section('header')
    <div class="page-header">
        <h1><i class="glyphicon glyphicon-plus"></i> Categorias / Create </h1>
    </div>
@endsection

@section('content')
    @include('error')

    <div class="row">
        <div class="col-md-12">

            <form action="{{ route('categorias.store') }}" method="POST">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">

                <div class="form-group @if($errors->has('cat_id')) has-error @endif">
                       <label for="cat_id-field">Cat_id</label>
                    <input type="text" id="cat_id-field" name="cat_id" class="form-control" value="{{ old("cat_id") }}"/>
                       @if($errors->has("cat_id"))
                        <span class="help-block">{{ $errors->first("cat_id") }}</span>
                       @endif
                    </div>
                    <div class="form-group @if($errors->has('cat_nom')) has-error @endif">
                       <label for="cat_nom-field">Cat_nom</label>
                    <input type="text" id="cat_nom-field" name="cat_nom" class="form-control" value="{{ old("cat_nom") }}"/>
                       @if($errors->has("cat_nom"))
                        <span class="help-block">{{ $errors->first("cat_nom") }}</span>
                       @endif
                    </div>
                <div class="well well-sm">
                    <button type="submit" class="btn btn-primary">Create</button>
                    <a class="btn btn-link pull-right" href="{{ route('categorias.index') }}"><i class="glyphicon glyphicon-backward"></i> Back</a>
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

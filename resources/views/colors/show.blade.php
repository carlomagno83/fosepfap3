@extends('layouts.admin')

@section('header')

<div class="col-md-6">
<section class="panel panel-default">

    <header class="panel-heading">
        <h5>Colors / Registro #{{$color->id}}</h5>
    </header>

@endsection

@section('content')
<div class="panel-body">
    <div class="row">
        <div class="col-md-12">

            <form action="#">
                <div class="form-group">
                     <label for="col_nom">COL_NOM</label>
                     <p class="form-control-static">{{$color->col_nom}}</p>
                </div>
                    <div class="form-group">
                     <label for="tipocandelabro_id">TIPOCANDELABRO_ID</label>
                     <p class="form-control-static">{{$color->tipocandelabro_id}}</p>
                </div>
            </form>

            <a class="btn btn-link" href="{{ route('colors.index') }}"><i class="glyphicon glyphicon-backward"></i>  Atrás</a>

        </div>
    </div>
</div>
</section>
</div>

@endsection
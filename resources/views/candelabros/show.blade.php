@extends('layouts.admin')

@section('header')

<div class="col-md-6">
<section class="panel panel-default">

    <header class="panel-heading">
        <h5>Candelabros / Registro #{{$candelabro->id}}</h5>
    </header>

@endsection

@section('content')
<div class="panel-body">
    <div class="row">
        <div class="col-md-12">

            <form action="#">
                <div class="form-group">
                    <label for="can_nom">CAN_NOM</label>
                    <p class="form-control-static">{{$candelabro->can_nom}}</p>
                </div>

                <div class="form-group">
                     <label for="can_tipo">CAN_TIPO</label>
                     <p class="form-control-static">{{$candelabro->can_tipo}}</p>
                </div>

                <div class="form-group">
                     <label for="color_id">COLOR_ID</label>
                     <p class="form-control-static">{{$candelabro->color_id}}</p>
                </div>
            </form>

            <a class="btn btn-link" href="{{ route('candelabros.index') }}"><i class="glyphicon glyphicon-backward"></i>  Atrás</a>

        </div>
    </div>
</div>
</section>
</div>

@endsection
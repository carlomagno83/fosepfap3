@extends('layouts.admin')

@section('header')

<div class="col-md-6">
<section class="panel panel-default">

    <header class="panel-heading">
        <h5>Tipocandelabros / Registro #{{$tipocandelabro->id}}</h5>
    </header>

@endsection

@section('content')
<div class="panel-body">
    <div class="row">
        <div class="col-md-12">

            <form action="#">
                <div class="form-group">
                     <label for="tca_nom">TCA_NOM</label>
                     <p class="form-control-static">{{$tipocandelabro->tca_nom}}</p>
                </div>
                    <div class="form-group">
                     <label for="tca_tip">TCA_TIP</label>
                     <p class="form-control-static">{{$tipocandelabro->tca_tip}}</p>
                </div>
                    <div class="form-group">
                     <label for="candelabro_id">CANDELABRO_ID</label>
                     <p class="form-control-static">{{$tipocandelabro->candelabro_id}}</p>
                </div>
            </form>

            <a class="btn btn-link" href="{{ route('tipocandelabros.index') }}"><i class="glyphicon glyphicon-backward"></i>  Atrás</a>

        </div>
    </div>
</div>
</section>
</div>

@endsection
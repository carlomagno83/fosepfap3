@extends('layouts.admin')

@section('header')

<div class="col-md-6">
<section class="panel panel-default">

    <header class="panel-heading">
        <h5>Gestions / Registro #{{$gestion->id}}</h5>
    </header>

@endsection

@section('content')
<div class="panel-body">
    <div class="row">
        <div class="col-md-12">

            <form action="#">
                <div class="form-group">
                     <label for="ges_car">GES_CAR</label>
                     <p class="form-control-static">{{$gestion->ges_car}}</p>
                </div>
                    <div class="form-group">
                     <label for="ges_cem">GES_CEM</label>
                     <p class="form-control-static">{{$gestion->ges_cem}}</p>
                </div>
                    <div class="form-group">
                     <label for="ges_pro">GES_PRO</label>
                     <p class="form-control-static">{{$gestion->ges_pro}}</p>
                </div>
                    <div class="form-group">
                     <label for="ges_vel">GES_VEL</label>
                     <p class="form-control-static">{{$gestion->ges_vel}}</p>
                </div>
                    <div class="form-group">
                     <label for="ges_obs">GES_OBS</label>
                     <p class="form-control-static">{{$gestion->ges_obs}}</p>
                </div>
                    <div class="form-group">
                     <label for="cabeceracontrato_id">CABECERACONTRATO_ID</label>
                     <p class="form-control-static">{{$gestion->cabeceracontrato_id}}</p>
                </div>
            </form>

            <a class="btn btn-link" href="{{ route('gestions.index') }}"><i class="glyphicon glyphicon-backward"></i>  Atrás</a>

        </div>
    </div>
</div>
</section>
</div>

@endsection
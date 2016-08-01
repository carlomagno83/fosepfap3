@extends('layouts.admin')

@section('header')

<div class="col-md-6">
<section class="panel panel-default">

    <header class="panel-heading">
        <h5>Vehiculos / Registro #{{$vehiculo->id}}</h5>
    </header>

@endsection

@section('content')
<div class="panel-body">
    <div class="row">
        <div class="col-md-12">

            <form action="#">
                <div class="form-group">
                     <label for="veh_pla">VEH_PLA</label>
                     <p class="form-control-static">{{$vehiculo->veh_pla}}</p>
                </div>
                    <div class="form-group">
                     <label for="veh_cla">VEH_CLA</label>
                     <p class="form-control-static">{{$vehiculo->veh_cla}}</p>
                </div>
                    <div class="form-group">
                     <label for="veh_ser">VEH_SER</label>
                     <p class="form-control-static">{{$vehiculo->veh_ser}}</p>
                </div>
                    <div class="form-group">
                     <label for="veh_mot">VEH_MOT</label>
                     <p class="form-control-static">{{$vehiculo->veh_mot}}</p>
                </div>
                    <div class="form-group">
                     <label for="veh_asi">VEH_ASI</label>
                     <p class="form-control-static">{{$vehiculo->veh_asi}}</p>
                </div>
                    <div class="form-group">
                     <label for="veh_pas">VEH_PAS</label>
                     <p class="form-control-static">{{$vehiculo->veh_pas}}</p>
                </div>
                    <div class="form-group">
                     <label for="veh_fra">VEH_FRA</label>
                     <p class="form-control-static">{{$vehiculo->veh_fra}}</p>
                </div>
                    <div class="form-group">
                     <label for="veh_fr">VEH_FR</label>
                     <p class="form-control-static">{{$vehiculo->veh_fr}}</p>
                </div>
                    <div class="form-group">
                     <label for="veh_eje">VEH_EJE</label>
                     <p class="form-control-static">{{$vehiculo->veh_eje}}</p>
                </div>
                    <div class="form-group">
                     <label for="veh_rue">VEH_RUE</label>
                     <p class="form-control-static">{{$vehiculo->veh_rue}}</p>
                </div>
                    <div class="form-group">
                     <label for="veh_com">VEH_COM</label>
                     <p class="form-control-static">{{$vehiculo->veh_com}}</p>
                </div>
                    <div class="form-group">
                     <label for="vehiculomodelo_id">VEHICULOMODELO_ID</label>
                     <p class="form-control-static">{{$vehiculo->vehiculomodelo_id}}</p>
                </div>
            </form>

            <a class="btn btn-link" href="{{ route('vehiculos.index') }}"><i class="glyphicon glyphicon-backward"></i>  Atrás</a>

        </div>
    </div>
</div>
</section>
</div>

@endsection
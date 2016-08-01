@extends('layouts.admin')

@section('header')

<div class="col-md-6">
<section class="panel panel-default">

    <header class="panel-heading">
        <h5>Vehiculomodelos / Registro #{{$vehiculomodelo->id}}</h5>
    </header>

@endsection

@section('content')
<div class="panel-body">
    <div class="row">
        <div class="col-md-12">

            <form action="#">
                <div class="form-group">
                     <label for="vmo_nom">VMO_NOM</label>
                     <p class="form-control-static">{{$vehiculomodelo->vmo_nom}}</p>
                </div>
                    <div class="form-group">
                     <label for="vehiculomarca_id">VEHICULOMARCA_ID</label>
                     <p class="form-control-static">{{$vehiculomodelo->vehiculomarca_id}}</p>
                </div>
            </form>

            <a class="btn btn-link" href="{{ route('vehiculomodelos.index') }}"><i class="glyphicon glyphicon-backward"></i>  Atrás</a>

        </div>
    </div>
</div>
</section>
</div>

@endsection
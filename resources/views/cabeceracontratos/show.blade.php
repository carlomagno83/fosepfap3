@extends('layouts.admin')

@section('header')

<div class="col-md-6">
<section class="panel panel-default">

    <header class="panel-heading">
        <h5>Cabeceracontratos / Registro #{{$cabeceracontrato->id}}</h5>
    </header>

@endsection

@section('content')
<div class="panel-body">
    <div class="row">
        <div class="col-md-12">

            <form action="#">
                <div class="form-group">
                     <label for="con_fec">CON_FEC</label>
                     <p class="form-control-static">{{$cabeceracontrato->con_fec}}</p>
                </div>
                    <div class="form-group">
                     <label for="con_est">CON_EST</label>
                     <p class="form-control-static">{{$cabeceracontrato->con_est}}</p>
                </div>
                    <div class="form-group">
                     <label for="con_tso">CON_TSO</label>
                     <p class="form-control-static">{{$cabeceracontrato->con_tso}}</p>
                </div>
                    <div class="form-group">
                     <label for="con_dni">CON_DNI</label>
                     <p class="form-control-static">{{$cabeceracontrato->con_dni}}</p>
                </div>
                    <div class="form-group">
                     <label for="con_tse">CON_TSE</label>
                     <p class="form-control-static">{{$cabeceracontrato->con_tse}}</p>
                </div>
                    <div class="form-group">
                     <label for="tiposolicitante_id">TIPOSOLICITANTE_ID</label>
                     <p class="form-control-static">{{$cabeceracontrato->tiposolicitante_id}}</p>
                </div>
                    <div class="form-group">
                     <label for="medico_id">MEDICO_ID</label>
                     <p class="form-control-static">{{$cabeceracontrato->medico_id}}</p>
                </div>
                    <div class="form-group">
                     <label for="sepelio_id">SEPELIO_ID</label>
                     <p class="form-control-static">{{$cabeceracontrato->sepelio_id}}</p>
                </div>
                    <div class="form-group">
                     <label for="empleado_id">EMPLEADO_ID</label>
                     <p class="form-control-static">{{$cabeceracontrato->empleado_id}}</p>
                </div>
                    <div class="form-group">
                     <label for="fallecido_id">FALLECIDO_ID</label>
                     <p class="form-control-static">{{$cabeceracontrato->fallecido_id}}</p>
                </div>
                    <div class="form-group">
                     <label for="servicio_id">SERVICIO_ID</label>
                     <p class="form-control-static">{{$cabeceracontrato->servicio_id}}</p>
                </div>
            </form>

            <a class="btn btn-link" href="{{ route('cabeceracontratos.index') }}"><i class="glyphicon glyphicon-backward"></i>  Atrás</a>

        </div>
    </div>
</div>
</section>
</div>

@endsection
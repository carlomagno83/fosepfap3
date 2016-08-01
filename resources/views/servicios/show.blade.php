@extends('layouts.iframe')

@section('header')

<div class="col-md-6">
<section class="panel panel-default">

    <header class="panel-heading">
        <h5>Servicios / Registro #{{$servicio->id}}</h5>
    </header>

@endsection

@section('content')
<div class="panel-body">
    <div class="row">
        <div class="col-md-12">

            <form action="#">
                <div class="form-group">
                     <label for="cas_pfa">CAS_PFA</label>
                     <p class="form-control-static">{{$servicio->cas_pfa}}</p>
                </div>
                    <div class="form-group">
                     <label for="cas_pat">CAS_PAT</label>
                     <p class="form-control-static">{{$servicio->cas_pat}}</p>
                </div>
                    <div class="form-group">
                     <label for="cas_pac">CAS_PAC</label>
                     <p class="form-control-static">{{$servicio->cas_pac}}</p>
                </div>
                    <div class="form-group">
                     <label for="cas_pne">CAS_PNE</label>
                     <p class="form-control-static">{{$servicio->cas_pne}}</p>
                </div>
                    <div class="form-group">
                     <label for="cas_pru">CAS_PRU</label>
                     <p class="form-control-static">{{$servicio->cas_pru}}</p>
                </div>
                    <div class="form-group">
                     <label for="cas_psc">CAS_PSC</label>
                     <p class="form-control-static">{{$servicio->cas_psc}}</p>
                </div>
                    <div class="form-group">
                     <label for="cas_pta">CAS_PTA</label>
                     <p class="form-control-static">{{$servicio->cas_pta}}</p>
                </div>
                    <div class="form-group">
                     <label for="cas_pvt">CAS_PVT</label>
                     <p class="form-control-static">{{$servicio->cas_pvt}}</p>
                </div>
                    <div class="form-group">
                     <label for="cas_pvc">CAS_PVC</label>
                     <p class="form-control-static">{{$servicio->cas_pvc}}</p>
                </div>
                    <div class="form-group">
                     <label for="cas_pvf">CAS_PVF</label>
                     <p class="form-control-static">{{$servicio->cas_pvf}}</p>
                </div>
                    <div class="form-group">
                     <label for="cas_pva">CAS_PVA</label>
                     <p class="form-control-static">{{$servicio->cas_pva}}</p>
                </div>
                    <div class="form-group">
                     <label for="ataud_id">ATAUD_ID</label>
                     <p class="form-control-static">{{$servicio->ataud_id}}</p>
                </div>
                    <div class="form-group">
                     <label for="empleado_id">EMPLEADO_ID</label>
                     <p class="form-control-static">{{$servicio->empleado_id}}</p>
                </div>
                    <div class="form-group">
                     <label for="vehiculo_id">VEHICULO_ID</label>
                     <p class="form-control-static">{{$servicio->vehiculo_id}}</p>
                </div>
                    <div class="form-group">
                     <label for="capilla_id">CAPILLA_ID</label>
                     <p class="form-control-static">{{$servicio->capilla_id}}</p>
                </div>
                    <div class="form-group">
                     <label for="urna_id">URNA_ID</label>
                     <p class="form-control-static">{{$servicio->urna_id}}</p>
                </div>
            </form>

            <a class="btn btn-link" href="{{ route('servicios.index') }}"><i class="glyphicon glyphicon-backward"></i>  Atrás</a>

        </div>
    </div>
</div>
</section>
</div>

@endsection
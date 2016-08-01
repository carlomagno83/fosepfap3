@extends('layouts.admin')

@section('header')

<div class="col-md-6">
<section class="panel panel-default">

    <header class="panel-heading">
        <h5>Atauds / Registro #{{$ataud->id}}</h5>
    </header>

@endsection

@section('content')
<div class="panel-body">
    <div class="row">
        <div class="col-md-12">

            <form action="#">
                <div class="form-group">
                     <label for="ata_tma">ATA_TMA</label>
                     <p class="form-control-static">{{$ataud->ata_tma}}</p>
                </div>
                    <div class="form-group">
                     <label for="ata_pre">ATA_PRE</label>
                     <p class="form-control-static">{{$ataud->ata_pre}}</p>
                </div>
                    <div class="form-group">
                     <label for="ata_noc">ATA_NOC</label>
                     <p class="form-control-static">{{$ataud->ata_noc}}</p>
                </div>
                    <div class="form-group">
                     <label for="ata_fec">ATA_FEC</label>
                     <p class="form-control-static">{{$ataud->ata_fec}}</p>
                </div>
                    <div class="form-group">
                     <label for="proveedor_id">PROVEEDOR_ID</label>
                     <p class="form-control-static">{{$ataud->proveedor_id}}</p>
                </div>
                    <div class="form-group">
                     <label for="color_id">COLOR_ID</label>
                     <p class="form-control-static">{{$ataud->color_id}}</p>
                </div>
                    <div class="form-group">
                     <label for="ataudmodelo_id">ATAUDMODELO_ID</label>
                     <p class="form-control-static">{{$ataud->ataudmodelo_id}}</p>
                </div>
                    <div class="form-group">
                     <label for="ataudtamano_id">ATAUDTAMANO_ID</label>
                     <p class="form-control-static">{{$ataud->ataudtamano_id}}</p>
                </div>
            </form>

            <a class="btn btn-link" href="{{ route('atauds.index') }}"><i class="glyphicon glyphicon-backward"></i>  Atrás</a>

        </div>
    </div>
</div>
</section>
</div>

@endsection
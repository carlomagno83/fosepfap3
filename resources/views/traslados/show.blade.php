@extends('layouts.admin')

@section('header')

<div class="col-md-6">
<section class="panel panel-default">

    <header class="panel-heading">
        <h5>Traslados / Registro #{{$traslado->id}}</h5>
    </header>

@endsection

@section('content')
<div class="panel-body">
    <div class="row">
        <div class="col-md-12">

            <form action="#">
                <div class="form-group">
                     <label for="tra_fec">TRA_FEC</label>
                     <p class="form-control-static">{{$traslado->tra_fec}}</p>
                </div>
                    <div class="form-group">
                     <label for="tra_est">TRA_EST</label>
                     <p class="form-control-static">{{$traslado->tra_est}}</p>
                </div>
                    <div class="form-group">
                     <label for="tra_ttr">TRA_TTR</label>
                     <p class="form-control-static">{{$traslado->tra_ttr}}</p>
                </div>
                    <div class="form-group">
                     <label for="tra_cor">TRA_COR</label>
                     <p class="form-control-static">{{$traslado->tra_cor}}</p>
                </div>
                    <div class="form-group">
                     <label for="tra_cde">TRA_CDE</label>
                     <p class="form-control-static">{{$traslado->tra_cde}}</p>
                </div>
                    <div class="form-group">
                     <label for="tra_klm">TRA_KLM</label>
                     <p class="form-control-static">{{$traslado->tra_klm}}</p>
                </div>
                    <div class="form-group">
                     <label for="tra_fsa">TRA_FSA</label>
                     <p class="form-control-static">{{$traslado->tra_fsa}}</p>
                </div>
                    <div class="form-group">
                     <label for="tra_hsa">TRA_HSA</label>
                     <p class="form-control-static">{{$traslado->tra_hsa}}</p>
                </div>
                    <div class="form-group">
                     <label for="tra_fll">TRA_FLL</label>
                     <p class="form-control-static">{{$traslado->tra_fll}}</p>
                </div>
                    <div class="form-group">
                     <label for="tra_hll">TRA_HLL</label>
                     <p class="form-control-static">{{$traslado->tra_hll}}</p>
                </div>
                    <div class="form-group">
                     <label for="tra_pre">TRA_PRE</label>
                     <p class="form-control-static">{{$traslado->tra_pre}}</p>
                </div>
                    <div class="form-group">
                     <label for="distrito_id">DISTRITO_ID</label>
                     <p class="form-control-static">{{$traslado->distrito_id}}</p>
                </div>
                    <div class="form-group">
                     <label for="cabeceracontrato_id">CABECERACONTRATO_ID</label>
                     <p class="form-control-static">{{$traslado->cabeceracontrato_id}}</p>
                </div>
                    <div class="form-group">
                     <label for="proveedor_id">PROVEEDOR_ID</label>
                     <p class="form-control-static">{{$traslado->proveedor_id}}</p>
                </div>
            </form>

            <a class="btn btn-link" href="{{ route('traslados.index') }}"><i class="glyphicon glyphicon-backward"></i>  Atrás</a>

        </div>
    </div>
</div>
</section>
</div>

@endsection
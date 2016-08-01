@extends('layouts.admin')

@section('header')

<div class="col-md-6">
<section class="panel panel-default">

    <header class="panel-heading">
        <h5>Capillas / Registro #{{$capilla->id}}</h5>
    </header>

@endsection

@section('content')
<div class="panel-body">
    <div class="row">
        <div class="col-md-12">

            <form action="#">
                <div class="form-group">
                     <label for="cap_tip">CAP_TIP</label>
                     <p class="form-control-static">{{$capilla->cap_tip}}</p>
                </div>
                    <div class="form-group">
                     <label for="cap_mod">CAP_MOD</label>
                     <p class="form-control-static">{{$capilla->cap_mod}}</p>
                </div>
                    <div class="form-group">
                     <label for="cap_txx">CAP_TXX</label>
                     <p class="form-control-static">{{$capilla->cap_txx}}</p>
                </div>
                    <div class="form-group">
                     <label for="cap_ccf">CAP_CCF</label>
                     <p class="form-control-static">{{$capilla->cap_ccf}}</p>
                </div>
                    <div class="form-group">
                     <label for="cap_fla">CAP_FLA</label>
                     <p class="form-control-static">{{$capilla->cap_fla}}</p>
                </div>
                    <div class="form-group">
                     <label for="cap_man">CAP_MAN</label>
                     <p class="form-control-static">{{$capilla->cap_man}}</p>
                </div>
                    <div class="form-group">
                     <label for="cap_alf">CAP_ALF</label>
                     <p class="form-control-static">{{$capilla->cap_alf}}</p>
                </div>
                    <div class="form-group">
                     <label for="cap_cab">CAP_CAB</label>
                     <p class="form-control-static">{{$capilla->cap_cab}}</p>
                </div>
                    <div class="form-group">
                     <label for="cap_cri">CAP_CRI</label>
                     <p class="form-control-static">{{$capilla->cap_cri}}</p>
                </div>
                    <div class="form-group">
                     <label for="cap_tar">CAP_TAR</label>
                     <p class="form-control-static">{{$capilla->cap_tar}}</p>
                </div>
                    <div class="form-group">
                     <label for="cap_rec">CAP_REC</label>
                     <p class="form-control-static">{{$capilla->cap_rec}}</p>
                </div>
                    <div class="form-group">
                     <label for="cap_plt">CAP_PLT</label>
                     <p class="form-control-static">{{$capilla->cap_plt}}</p>
                </div>
                    <div class="form-group">
                     <label for="cap_mul">CAP_MUL</label>
                     <p class="form-control-static">{{$capilla->cap_mul}}</p>
                </div>
                    <div class="form-group">
                     <label for="proveedor_id">PROVEEDOR_ID</label>
                     <p class="form-control-static">{{$capilla->proveedor_id}}</p>
                </div>
                    <div class="form-group">
                     <label for="candelabro_id">CANDELABRO_ID</label>
                     <p class="form-control-static">{{$capilla->candelabro_id}}</p>
                </div>
            </form>

            <a class="btn btn-link" href="{{ route('capillas.index') }}"><i class="glyphicon glyphicon-backward"></i>  Atrás</a>

        </div>
    </div>
</div>
</section>
</div>

@endsection
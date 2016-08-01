@extends('layouts.iframe')

@section('header')

<div class="col-md-6">
<section class="panel panel-default">

    <header class="panel-heading">
        <h5>Sepelios / Registro #{{$sepelio->id}}</h5>
    </header>

@endsection

@section('content')
<div class="panel-body">
    <div class="row">
        <div class="col-md-12">

            <form action="#">
                <div class="form-group">
                     <label for="cem_fse">CEM_FSE</label>
                     <p class="form-control-static">{{$sepelio->cem_fse}}</p>
                </div>
                    <div class="form-group">
                     <label for="cem_hsf">CEM_HSF</label>
                     <p class="form-control-static">{{$sepelio->cem_hsf}}</p>
                </div>
                    <div class="form-group">
                     <label for="cem_hsv">CEM_HSV</label>
                     <p class="form-control-static">{{$sepelio->cem_hsv}}</p>
                </div>
                    <div class="form-group">
                     <label for="cem_hic">CEM_HIC</label>
                     <p class="form-control-static">{{$sepelio->cem_hic}}</p>
                </div>
                    <div class="form-group">
                     <label for="cem_tse">CEM_TSE</label>
                     <p class="form-control-static">{{$sepelio->cem_tse}}</p>
                </div>
                    <div class="form-group">
                     <label for="cem_tip">CEM_TIP</label>
                     <p class="form-control-static">{{$sepelio->cem_tip}}</p>
                </div>
                    <div class="form-group">
                     <label for="cem_sep">CEM_SEP</label>
                     <p class="form-control-static">{{$sepelio->cem_sep}}</p>
                </div>
                    <div class="form-group">
                     <label for="cem_nco">CEM_NCO</label>
                     <p class="form-control-static">{{$sepelio->cem_nco}}</p>
                </div>
                    <div class="form-group">
                     <label for="cem_oco">CEM_OCO</label>
                     <p class="form-control-static">{{$sepelio->cem_oco}}</p>
                </div>
                    <div class="form-group">
                     <label for="cem_fec">CEM_FEC</label>
                     <p class="form-control-static">{{$sepelio->cem_fec}}</p>
                </div>
                    <div class="form-group">
                     <label for="cem_pre">CEM_PRE</label>
                     <p class="form-control-static">{{$sepelio->cem_pre}}</p>
                </div>
                    <div class="form-group">
                     <label for="distrito_id">DISTRITO_ID</label>
                     <p class="form-control-static">{{$sepelio->distrito_id}}</p>
                </div>
                    <div class="form-group">
                     <label for="proveedor_id">PROVEEDOR_ID</label>
                     <p class="form-control-static">{{$sepelio->proveedor_id}}</p>
                </div>
            </form>

            <a class="btn btn-link" href="{{ route('sepelios.index') }}"><i class="glyphicon glyphicon-backward"></i>  Atrás</a>

        </div>
    </div>
</div>
</section>
</div>

@endsection
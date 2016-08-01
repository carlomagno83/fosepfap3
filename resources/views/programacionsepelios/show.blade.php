@extends('layouts.admin')

@section('header')

<div class="col-md-6">
<section class="panel panel-default">

    <header class="panel-heading">
        <h5>Programacionsepelios / Registro #{{$programacionsepelio->id}}</h5>
    </header>

@endsection

@section('content')
<div class="panel-body">
    <div class="row">
        <div class="col-md-12">

            <form action="#">
                <div class="form-group">
                     <label for="prs_fec">PRS_FEC</label>
                     <p class="form-control-static">{{$programacionsepelio->prs_fec}}</p>
                </div>
                    <div class="form-group">
                     <label for="prs_dni">PRS_DNI</label>
                     <p class="form-control-static">{{$programacionsepelio->prs_dni}}</p>
                </div>
                    <div class="form-group">
                     <label for="prs_pat">PRS_PAT</label>
                     <p class="form-control-static">{{$programacionsepelio->prs_pat}}</p>
                </div>
                    <div class="form-group">
                     <label for="prs_mat">PRS_MAT</label>
                     <p class="form-control-static">{{$programacionsepelio->prs_mat}}</p>
                </div>
                    <div class="form-group">
                     <label for="prs_nom">PRS_NOM</label>
                     <p class="form-control-static">{{$programacionsepelio->prs_nom}}</p>
                </div>
                    <div class="form-group">
                     <label for="prs_vel">PRS_VEL</label>
                     <p class="form-control-static">{{$programacionsepelio->prs_vel}}</p>
                </div>
                    <div class="form-group">
                     <label for="prs_cem">PRS_CEM</label>
                     <p class="form-control-static">{{$programacionsepelio->prs_cem}}</p>
                </div>
                    <div class="form-group">
                     <label for="prs_vca">PRS_VCA</label>
                     <p class="form-control-static">{{$programacionsepelio->prs_vca}}</p>
                </div>
                    <div class="form-group">
                     <label for="prs_chc">PRS_CHC</label>
                     <p class="form-control-static">{{$programacionsepelio->prs_chc}}</p>
                </div>
                    <div class="form-group">
                     <label for="prs_vfl">PRS_VFL</label>
                     <p class="form-control-static">{{$programacionsepelio->prs_vfl}}</p>
                </div>
                    <div class="form-group">
                     <label for="prs_cfl">PRS_CFL</label>
                     <p class="form-control-static">{{$programacionsepelio->prs_cfl}}</p>
                </div>
                    <div class="form-group">
                     <label for="prs_vac">PRS_VAC</label>
                     <p class="form-control-static">{{$programacionsepelio->prs_vac}}</p>
                </div>
                    <div class="form-group">
                     <label for="prs_cac">PRS_CAC</label>
                     <p class="form-control-static">{{$programacionsepelio->prs_cac}}</p>
                </div>
                    <div class="form-group">
                     <label for="prs_hsf">PRS_HSF</label>
                     <p class="form-control-static">{{$programacionsepelio->prs_hsf}}</p>
                </div>
                    <div class="form-group">
                     <label for="prs_hsv">PRS_HSV</label>
                     <p class="form-control-static">{{$programacionsepelio->prs_hsv}}</p>
                </div>
                    <div class="form-group">
                     <label for="prs_hic">PRS_HIC</label>
                     <p class="form-control-static">{{$programacionsepelio->prs_hic}}</p>
                </div>
                    <div class="form-group">
                     <label for="prs_dfu">PRS_DFU</label>
                     <p class="form-control-static">{{$programacionsepelio->prs_dfu}}</p>
                </div>
                    <div class="form-group">
                     <label for="id">ID</label>
                     <p class="form-control-static">{{$programacionsepelio->id}}</p>
                </div>
                    <div class="form-group">
                     <label for="cabeceracontrato_id">CABECERACONTRATO_ID</label>
                     <p class="form-control-static">{{$programacionsepelio->cabeceracontrato_id}}</p>
                </div>
            </form>

            <a class="btn btn-link" href="{{ route('programacionsepelios.index') }}"><i class="glyphicon glyphicon-backward"></i>  Atrás</a>

        </div>
    </div>
</div>
</section>
</div>

@endsection
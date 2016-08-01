@extends('layouts.admin')

@section('header')

<div class="col-md-6">
<section class="panel panel-default">

    <header class="panel-heading">
        <h5>Medicos / Registro #{{$medico->id}}</h5>
    </header>

@endsection

@section('content')
<div class="panel-body">
    <div class="row">
        <div class="col-md-12">

            <form action="#">
                <div class="form-group">
                     <label for="med_dni">MED_DNI</label>
                     <p class="form-control-static">{{$medico->med_dni}}</p>
                </div>
                    <div class="form-group">
                     <label for="med_pat">MED_PAT</label>
                     <p class="form-control-static">{{$medico->med_pat}}</p>
                </div>
                    <div class="form-group">
                     <label for="med_mat">MED_MAT</label>
                     <p class="form-control-static">{{$medico->med_mat}}</p>
                </div>
                    <div class="form-group">
                     <label for="med_nom">MED_NOM</label>
                     <p class="form-control-static">{{$medico->med_nom}}</p>
                </div>
                    <div class="form-group">
                     <label for="med_col">MED_COL</label>
                     <p class="form-control-static">{{$medico->med_col}}</p>
                </div>
                    <div class="form-group">
                     <label for="med_dir">MED_DIR</label>
                     <p class="form-control-static">{{$medico->med_dir}}</p>
                </div>
                    <div class="form-group">
                     <label for="med_ubi">MED_UBI</label>
                     <p class="form-control-static">{{$medico->med_ubi}}</p>
                </div>
                    <div class="form-group">
                     <label for="distrito_id">DISTRITO_ID</label>
                     <p class="form-control-static">{{$medico->distrito_id}}</p>
                </div>
            </form>

            <a class="btn btn-link" href="{{ route('medicos.index') }}"><i class="glyphicon glyphicon-backward"></i>  Atrás</a>

        </div>
    </div>
</div>
</section>
</div>

@endsection
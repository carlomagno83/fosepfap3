@extends('layouts.admin')

@section('header')

<div class="col-md-6">
<section class="panel panel-default">

    <header class="panel-heading">
        <h5>Proveedors / Registro #{{$proveedor->id}}</h5>
    </header>

@endsection

@section('content')
<div class="panel-body">
    <div class="row">
        <div class="col-md-12">

            <form action="#">
                <div class="form-group">
                     <label for="pro_ruc">PRO_RUC</label>
                     <p class="form-control-static">{{$proveedor->pro_ruc}}</p>
                </div>
                    <div class="form-group">
                     <label for="pro_rso">PRO_RSO</label>
                     <p class="form-control-static">{{$proveedor->pro_rso}}</p>
                </div>
                    <div class="form-group">
                     <label for="pro_dir">PRO_DIR</label>
                     <p class="form-control-static">{{$proveedor->pro_dir}}</p>
                </div>
                    <div class="form-group">
                     <label for="pro_fij">PRO_FIJ</label>
                     <p class="form-control-static">{{$proveedor->pro_fij}}</p>
                </div>
                    <div class="form-group">
                     <label for="pro_cel">PRO_CEL</label>
                     <p class="form-control-static">{{$proveedor->pro_cel}}</p>
                </div>
                    <div class="form-group">
                     <label for="pro_mai">PRO_MAI</label>
                     <p class="form-control-static">{{$proveedor->pro_mai}}</p>
                </div>
                    <div class="form-group">
                     <label for="pro_obs">PRO_OBS</label>
                     <p class="form-control-static">{{$proveedor->pro_obs}}</p>
                </div>
                    <div class="form-group">
                     <label for="distrito_id">DISTRITO_ID</label>
                     <p class="form-control-static">{{$proveedor->distrito_id}}</p>
                </div>
                    <div class="form-group">
                     <label for="categoria_id">CATEGORIA_ID</label>
                     <p class="form-control-static">{{$proveedor->categoria_id}}</p>
                </div>
            </form>

            <a class="btn btn-link" href="{{ route('proveedors.index') }}"><i class="glyphicon glyphicon-backward"></i>  Atrás</a>

        </div>
    </div>
</div>
</section>
</div>

@endsection
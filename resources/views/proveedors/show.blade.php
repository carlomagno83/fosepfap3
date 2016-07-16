@extends('layouts.admin')
@section('header')
<div class="page-header">
        <h1>Proveedors / Show #{{$proveedor->id}}</h1>
        <form action="{{ route('proveedors.destroy', $proveedor->id) }}" method="POST" style="display: inline;" onsubmit="if(confirm('Delete? Are you sure?')) { return true } else {return false };">
            <input type="hidden" name="_method" value="DELETE">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <div class="btn-group pull-right" role="group" aria-label="...">
                <a class="btn btn-warning btn-group" role="group" href="{{ route('proveedors.edit', $proveedor->id) }}"><i class="glyphicon glyphicon-edit"></i> Edit</a>
                <button type="submit" class="btn btn-danger">Delete <i class="glyphicon glyphicon-trash"></i></button>
            </div>
        </form>
    </div>
@endsection

@section('content')
    <div class="row">
        <div class="col-md-12">

            <form action="#">
                <div class="form-group">
                    <label for="nome">ID</label>
                    <p class="form-control-static"></p>
                </div>
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
                     <label for="departamento_id">DEPARTAMENTO_ID</label>
                     <p class="form-control-static">{{$proveedor->departamento_id}}</p>
                </div>
                    <div class="form-group">
                     <label for="categoria_id">CATEGORIA_ID</label>
                     <p class="form-control-static">{{$proveedor->categoria_id}}</p>
                </div>
            </form>

            <a class="btn btn-link" href="{{ route('proveedors.index') }}"><i class="glyphicon glyphicon-backward"></i>  Back</a>

        </div>
    </div>

@endsection
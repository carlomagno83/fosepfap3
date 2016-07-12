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
                    <p class="form-control-static">{{$proveedor->id}}</p>
                </div>
                <div class="form-group">
                     <label for="ruc">RUC</label>
                     <p class="form-control-static">{{$proveedor->ruc}}</p>
                </div>
                    <div class="form-group">
                     <label for="nombre">NOMBRE</label>
                     <p class="form-control-static">{{$proveedor->nombre}}</p>
                </div>
                    <div class="form-group">
                     <label for="direccion">DIRECCION</label>
                     <p class="form-control-static">{{$proveedor->direccion}}</p>
                </div>
                    <div class="form-group">
                     <label for="iddistrito">IDDISTRITO</label>
                     <p class="form-control-static">{{$proveedor->iddistrito}}</p>
                </div>
                    <div class="form-group">
                     <label for="telefono_fijo">TELEFONO_FIJO</label>
                     <p class="form-control-static">{{$proveedor->telefono_fijo}}</p>
                </div>
                    <div class="form-group">
                     <label for="telefono_celular">TELEFONO_CELULAR</label>
                     <p class="form-control-static">{{$proveedor->telefono_celular}}</p>
                </div>
                    <div class="form-group">
                     <label for="mail">MAIL</label>
                     <p class="form-control-static">{{$proveedor->mail}}</p>
                </div>
                    <div class="form-group">
                     <label for="costo">COSTO</label>
                     <p class="form-control-static">{{$proveedor->costo}}</p>
                </div>
                    <div class="form-group">
                     <label for="observacion">OBSERVACION</label>
                     <p class="form-control-static">{{$proveedor->observacion}}</p>
                </div>
                    <div class="form-group">
                     <label for="user">USER</label>
                     <p class="form-control-static">{{$proveedor->user}}</p>
                </div>
                    <div class="form-group">
                     <label for="fecha">FECHA</label>
                     <p class="form-control-static">{{$proveedor->fecha}}</p>
                </div>
                    <div class="form-group">
                     <label for="id_categoria">ID_CATEGORIA</label>
                     <p class="form-control-static">{{$proveedor->id_categoria}}</p>
                </div>
            </form>

            <a class="btn btn-link" href="{{ route('proveedors.index') }}"><i class="glyphicon glyphicon-backward"></i>  Back</a>

        </div>
    </div>

@endsection
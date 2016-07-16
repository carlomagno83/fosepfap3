@extends('layouts.admin')
@section('header')
<div class="page-header">
        <h1>Urnas / Show #{{$urna->id}}</h1>
        <form action="{{ route('urnas.destroy', $urna->id) }}" method="POST" style="display: inline;" onsubmit="if(confirm('Delete? Are you sure?')) { return true } else {return false };">
            <input type="hidden" name="_method" value="DELETE">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <div class="btn-group pull-right" role="group" aria-label="...">
                <a class="btn btn-warning btn-group" role="group" href="{{ route('urnas.edit', $urna->id) }}"><i class="glyphicon glyphicon-edit"></i> Edit</a>
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
                     <label for="urn_id">URN_ID</label>
                     <p class="form-control-static">{{$urna->urn_id}}</p>
                </div>
                    <div class="form-group">
                     <label for="urn_tip">URN_TIP</label>
                     <p class="form-control-static">{{$urna->urn_tip}}</p>
                </div>
                    <div class="form-group">
                     <label for="urn_mod">URN_MOD</label>
                     <p class="form-control-static">{{$urna->urn_mod}}</p>
                </div>
                    <div class="form-group">
                     <label for="urn_col">URN_COL</label>
                     <p class="form-control-static">{{$urna->urn_col}}</p>
                </div>
                    <div class="form-group">
                     <label for="urn_pre">URN_PRE</label>
                     <p class="form-control-static">{{$urna->urn_pre}}</p>
                </div>
                    <div class="form-group">
                     <label for="servicio_id">SERVICIO_ID</label>
                     <p class="form-control-static">{{$urna->servicio_id}}</p>
                </div>
                    <div class="form-group">
                     <label for="proveedor_id">PROVEEDOR_ID</label>
                     <p class="form-control-static">{{$urna->proveedor_id}}</p>
                </div>
            </form>

            <a class="btn btn-link" href="{{ route('urnas.index') }}"><i class="glyphicon glyphicon-backward"></i>  Back</a>

        </div>
    </div>

@endsection
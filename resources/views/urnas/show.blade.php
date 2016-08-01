@extends('layouts.admin')

@section('header')

<div class="col-md-6">
<section class="panel panel-default">

    <header class="panel-heading">
        <h5>Urnas / Registro #{{$urna->id}}</h5>
    </header>

@endsection

@section('content')
<div class="panel-body">
    <div class="row">
        <div class="col-md-12">

            <form action="#">
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
                     <label for="proveedor_id">PROVEEDOR_ID</label>
                     <p class="form-control-static">{{$urna->proveedor_id}}</p>
                </div>
            </form>

            <a class="btn btn-link" href="{{ route('urnas.index') }}"><i class="glyphicon glyphicon-backward"></i>  Atrás</a>

        </div>
    </div>
</div>
</section>
</div>

@endsection
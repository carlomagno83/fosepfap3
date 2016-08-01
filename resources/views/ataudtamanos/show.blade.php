@extends('layouts.admin')

@section('header')

<div class="col-md-6">
<section class="panel panel-default">

    <header class="panel-heading">
        <h5>Ataudtamanos / Registro #{{$ataudtamano->id}}</h5>
    </header>

@endsection

@section('content')
<div class="panel-body">
    <div class="row">
        <div class="col-md-12">

            <form action="#">
                <div class="form-group">
                     <label for="att_nom">ATT_NOM</label>
                     <p class="form-control-static">{{$ataudtamano->att_nom}}</p>
                </div>
                    <div class="form-group">
                     <label for="att_dim">ATT_DIM</label>
                     <p class="form-control-static">{{$ataudtamano->att_dim}}</p>
                </div>
            </form>

            <a class="btn btn-link" href="{{ route('ataudtamanos.index') }}"><i class="glyphicon glyphicon-backward"></i>  Atrás</a>

        </div>
    </div>
</div>
</section>
</div>

@endsection
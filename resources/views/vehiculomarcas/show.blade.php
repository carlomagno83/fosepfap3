@extends('layouts.admin')

@section('header')

<div class="col-md-6">
<section class="panel panel-default">

    <header class="panel-heading">
        <h5>Vehiculomarcas / Registro #{{$vehiculomarca->id}}</h5>
    </header>

@endsection

@section('content')
<div class="panel-body">
    <div class="row">
        <div class="col-md-12">

            <form action="#">
                <div class="form-group">
                     <label for="vma_nom">VMA_NOM</label>
                     <p class="form-control-static">{{$vehiculomarca->vma_nom}}</p>
                </div>
            </form>

            <a class="btn btn-link" href="{{ route('vehiculomarcas.index') }}"><i class="glyphicon glyphicon-backward"></i>  Atrás</a>

        </div>
    </div>
</div>
</section>
</div>

@endsection
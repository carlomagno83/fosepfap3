@extends('layouts.admin')

@section('header')

<section class="panel panel-default">
    <header class="panel-heading">
        <h5>
            <i class="glyphicon glyphicon-align-justify"></i> Atauds
        </h5>
    </header>

@endsection

@section('content')
    <div class="panel-body">
        <div class="row">

            <div class="col-md-12">
                <a class="btn btn-success pull-right btn-rounded" href="{{ route('atauds.create') }}" style="color: white;">
                    <i class="glyphicon glyphicon-plus"></i>
                    Nuevo
                </a>
            </div>
            <br>
            <br>
            <br>

            <div class="col-md-12">
                @if($atauds->count())
                    <table class="table table-condensed table-striped">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>ATA_TMA</th>
                        <th>ATA_PRE</th>
                        <th>ATA_NOC</th>
                        <th>ATA_FEC</th>
                        <th>PROVEEDOR_ID</th>
                        <th>COLOR_ID</th>
                        <th>ATAUDMODELO_ID</th>
                        <th>ATAUDTAMANO_ID</th>
                                <th class="text-right">OPCIONES</th>
                            </tr>
                        </thead>

                        <tbody>
                            @foreach($atauds as $ataud)
                                <tr>
                                    <td>{{$ataud->id}}</td>
                                    <td>{{$ataud->ata_tma}}</td>
                    <td>{{$ataud->ata_pre}}</td>
                    <td>{{$ataud->ata_noc}}</td>
                    <td>{{$ataud->ata_fec}}</td>
                    <td>{{$ataud->proveedor_id}}</td>
                    <td>{{$ataud->color_id}}</td>
                    <td>{{$ataud->ataudmodelo_id}}</td>
                    <td>{{$ataud->ataudtamano_id}}</td>
                                    <td class="text-right">
                                        <a class="btn btn-xs btn-primary" href="{{ route('atauds.show', $ataud->id) }}"><i class="glyphicon glyphicon-eye-open"></i> Ver</a>
                                        <a class="btn btn-xs btn-warning" href="{{ route('atauds.edit', $ataud->id) }}"><i class="glyphicon glyphicon-edit"></i> Editar</a>
                                        <form action="{{ route('atauds.destroy', $ataud->id) }}" method="POST" style="display: inline;" onsubmit="if(confirm('¿Estás seguro de eliminar?')) { return true } else {return false };">
                                            <input type="hidden" name="_method" value="DELETE">
                                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                            <button type="submit" class="btn btn-xs btn-danger"><i class="glyphicon glyphicon-trash"></i> Eliminar</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    {!! $atauds->render() !!}
                @else
                    <h3 class="text-center alert alert-info">Sin datos!</h3>
                @endif

            </div>
        </div>
    </div>
</section>

@endsection
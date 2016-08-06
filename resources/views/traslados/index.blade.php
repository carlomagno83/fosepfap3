@extends('layouts.iframe')

@section('css')
    <style>
        .main-content .content-wrap .wrapper {
            padding-top: 0px;
        }
    </style>
@endsection

@section('header')

<section class="panel panel-default">
    <header class="panel-heading">
        <h5>
            <i class="glyphicon glyphicon-align-justify"></i> Traslados
        </h5>
    </header>

@endsection

@section('content')
    <div class="panel-body">
        <div class="row">

            <div class="col-md-12">
                <a class="btn btn-success pull-right btn-rounded" href="{{ route('traslados.create') }}" style="color: white;">
                    <i class="glyphicon glyphicon-plus"></i>
                    Nuevo
                </a>
            </div>
            <br>
            <br>
            <br>

            <div class="col-md-12">
                @if($traslados->count())
                    <table class="table table-condensed table-striped">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>TRA_FEC</th>
                        <th>TRA_EST</th>
                        <th>TRA_TTR</th>
                        <th>TRA_COR</th>
                        <th>TRA_CDE</th>
                        <th>TRA_KLM</th>
                        <th>TRA_FSA</th>
                        <th>TRA_HSA</th>
                        <th>TRA_FLL</th>
                        <th>TRA_HLL</th>
                        <th>TRA_PRE</th>
                        <th>DISTRITO_ID</th>
                        <th>CABECERACONTRATO_ID</th>
                        <th>PROVEEDOR_ID</th>
                                <th class="text-right">OPCIONES</th>
                            </tr>
                        </thead>

                        <tbody>
                            @foreach($traslados as $traslado)
                                <tr>
                                    <td>{{$traslado->id}}</td>
                                    <td>{{$traslado->tra_fec}}</td>
                    <td>{{$traslado->tra_est}}</td>
                    <td>{{$traslado->tra_ttr}}</td>
                    <td>{{$traslado->tra_cor}}</td>
                    <td>{{$traslado->tra_cde}}</td>
                    <td>{{$traslado->tra_klm}}</td>
                    <td>{{$traslado->tra_fsa}}</td>
                    <td>{{$traslado->tra_hsa}}</td>
                    <td>{{$traslado->tra_fll}}</td>
                    <td>{{$traslado->tra_hll}}</td>
                    <td>{{$traslado->tra_pre}}</td>
                    <td>{{$traslado->distrito_id}}</td>
                    <td>{{$traslado->cabeceracontrato_id}}</td>
                    <td>{{$traslado->proveedor_id}}</td>
                                    <td class="text-right">
                                        <a class="btn btn-xs btn-primary" href="{{ route('traslados.show', $traslado->id) }}"><i class="glyphicon glyphicon-eye-open"></i> Ver</a>
                                        <a class="btn btn-xs btn-warning" href="{{ route('traslados.edit', $traslado->id) }}"><i class="glyphicon glyphicon-edit"></i> Editar</a>
                                        <form action="{{ route('traslados.destroy', $traslado->id) }}" method="POST" style="display: inline;" onsubmit="if(confirm('¿Estás seguro de eliminar?')) { return true } else {return false };">
                                            <input type="hidden" name="_method" value="DELETE">
                                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                            <button type="submit" class="btn btn-xs btn-danger"><i class="glyphicon glyphicon-trash"></i> Eliminar</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    {!! $traslados->render() !!}
                @else
                    <h3 class="text-center alert alert-info">Sin datos!</h3>
                @endif

            </div>
        </div>
    </div>
</section>

@endsection
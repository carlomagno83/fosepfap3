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
            <i class="glyphicon glyphicon-align-justify"></i> Sepelios
        </h5>
    </header>

@endsection

@section('content')
    <div class="panel-body">
        <div class="row">

            <div class="col-md-12">
                <a class="btn btn-success pull-right btn-rounded" href="{{ route('sepelios.create') }}" style="color: white;">
                    <i class="glyphicon glyphicon-plus"></i>
                    Nuevo
                </a>
            </div>
            <br>
            <br>
            <br>

            <div class="col-md-12">
                @if($sepelios->count())
                    <table class="table table-condensed table-striped">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>CEM_FSE</th>
                        <th>CEM_HSF</th>
                        <th>CEM_HSV</th>
                        <th>CEM_HIC</th>
                        <th>CEM_TSE</th>
                        <th>CEM_TIP</th>
                        <th>CEM_SEP</th>
                        <th>CEM_NCO</th>
                        <th>CEM_OCO</th>
                        <th>CEM_FEC</th>
                        <th>CEM_PRE</th>
                        <th>DISTRITO_ID</th>
                        <th>PROVEEDOR_ID</th>
                                <th class="text-right">OPCIONES</th>
                            </tr>
                        </thead>

                        <tbody>
                            @foreach($sepelios as $sepelio)
                                <tr>
                                    <td>{{$sepelio->id}}</td>
                                    <td>{{$sepelio->cem_fse}}</td>
                    <td>{{$sepelio->cem_hsf}}</td>
                    <td>{{$sepelio->cem_hsv}}</td>
                    <td>{{$sepelio->cem_hic}}</td>
                    <td>{{$sepelio->cem_tse}}</td>
                    <td>{{$sepelio->cem_tip}}</td>
                    <td>{{$sepelio->cem_sep}}</td>
                    <td>{{$sepelio->cem_nco}}</td>
                    <td>{{$sepelio->cem_oco}}</td>
                    <td>{{$sepelio->cem_fec}}</td>
                    <td>{{$sepelio->cem_pre}}</td>
                    <td>{{$sepelio->distrito_id}}</td>
                    <td>{{$sepelio->proveedor_id}}</td>
                                    <td class="text-right">
                                        <a class="btn btn-xs btn-primary" href="{{ route('sepelios.show', $sepelio->id) }}"><i class="glyphicon glyphicon-eye-open"></i> Ver</a>
                                        <a class="btn btn-xs btn-warning" href="{{ route('sepelios.edit', $sepelio->id) }}"><i class="glyphicon glyphicon-edit"></i> Editar</a>
                                        <form action="{{ route('sepelios.destroy', $sepelio->id) }}" method="POST" style="display: inline;" onsubmit="if(confirm('¿Estás seguro de eliminar?')) { return true } else {return false };">
                                            <input type="hidden" name="_method" value="DELETE">
                                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                            <button type="submit" class="btn btn-xs btn-danger"><i class="glyphicon glyphicon-trash"></i> Eliminar</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    {!! $sepelios->render() !!}
                @else
                    <h3 class="text-center alert alert-info">Sin datos!</h3>
                @endif

            </div>
        </div>
    </div>
</section>

@endsection
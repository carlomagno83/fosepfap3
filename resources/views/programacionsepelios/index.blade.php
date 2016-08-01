@extends('layouts.admin')

@section('header')

<section class="panel panel-default">
    <header class="panel-heading">
        <h5>
            <i class="glyphicon glyphicon-align-justify"></i> Programacionsepelios
        </h5>
    </header>

@endsection

@section('content')
    <div class="panel-body">
        <div class="row">

            <div class="col-md-12">
                <a class="btn btn-success pull-right btn-rounded" href="{{ route('programacionsepelios.create') }}" style="color: white;">
                    <i class="glyphicon glyphicon-plus"></i>
                    Nuevo
                </a>
            </div>
            <br>
            <br>
            <br>

            <div class="col-md-12">
                @if($programacionsepelios->count())
                    <table class="table table-condensed table-striped">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>PRS_FEC</th>
                        <th>PRS_DNI</th>
                        <th>PRS_PAT</th>
                        <th>PRS_MAT</th>
                        <th>PRS_NOM</th>
                        <th>PRS_VEL</th>
                        <th>PRS_CEM</th>
                        <th>PRS_VCA</th>
                        <th>PRS_CHC</th>
                        <th>PRS_VFL</th>
                        <th>PRS_CFL</th>
                        <th>PRS_VAC</th>
                        <th>PRS_CAC</th>
                        <th>PRS_HSF</th>
                        <th>PRS_HSV</th>
                        <th>PRS_HIC</th>
                        <th>PRS_DFU</th>
                        <th>ID</th>
                        <th>CABECERACONTRATO_ID</th>
                                <th class="text-right">OPCIONES</th>
                            </tr>
                        </thead>

                        <tbody>
                            @foreach($programacionsepelios as $programacionsepelio)
                                <tr>
                                    <td>{{$programacionsepelio->id}}</td>
                                    <td>{{$programacionsepelio->prs_fec}}</td>
                    <td>{{$programacionsepelio->prs_dni}}</td>
                    <td>{{$programacionsepelio->prs_pat}}</td>
                    <td>{{$programacionsepelio->prs_mat}}</td>
                    <td>{{$programacionsepelio->prs_nom}}</td>
                    <td>{{$programacionsepelio->prs_vel}}</td>
                    <td>{{$programacionsepelio->prs_cem}}</td>
                    <td>{{$programacionsepelio->prs_vca}}</td>
                    <td>{{$programacionsepelio->prs_chc}}</td>
                    <td>{{$programacionsepelio->prs_vfl}}</td>
                    <td>{{$programacionsepelio->prs_cfl}}</td>
                    <td>{{$programacionsepelio->prs_vac}}</td>
                    <td>{{$programacionsepelio->prs_cac}}</td>
                    <td>{{$programacionsepelio->prs_hsf}}</td>
                    <td>{{$programacionsepelio->prs_hsv}}</td>
                    <td>{{$programacionsepelio->prs_hic}}</td>
                    <td>{{$programacionsepelio->prs_dfu}}</td>
                    <td>{{$programacionsepelio->id}}</td>
                    <td>{{$programacionsepelio->cabeceracontrato_id}}</td>
                                    <td class="text-right">
                                        <a class="btn btn-xs btn-primary" href="{{ route('programacionsepelios.show', $programacionsepelio->id) }}"><i class="glyphicon glyphicon-eye-open"></i> Ver</a>
                                        <a class="btn btn-xs btn-warning" href="{{ route('programacionsepelios.edit', $programacionsepelio->id) }}"><i class="glyphicon glyphicon-edit"></i> Editar</a>
                                        <form action="{{ route('programacionsepelios.destroy', $programacionsepelio->id) }}" method="POST" style="display: inline;" onsubmit="if(confirm('¿Estás seguro de eliminar?')) { return true } else {return false };">
                                            <input type="hidden" name="_method" value="DELETE">
                                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                            <button type="submit" class="btn btn-xs btn-danger"><i class="glyphicon glyphicon-trash"></i> Eliminar</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    {!! $programacionsepelios->render() !!}
                @else
                    <h3 class="text-center alert alert-info">Sin datos!</h3>
                @endif

            </div>
        </div>
    </div>
</section>

@endsection
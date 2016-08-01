@extends('layouts.admin')

@section('header')

<section class="panel panel-default">
    <header class="panel-heading">
        <h5>
            <i class="glyphicon glyphicon-align-justify"></i> Vehiculos
        </h5>
    </header>

@endsection

@section('content')
    <div class="panel-body">
        <div class="row">

            <div class="col-md-12">
                <a class="btn btn-success pull-right btn-rounded" href="{{ route('vehiculos.create') }}" style="color: white;">
                    <i class="glyphicon glyphicon-plus"></i>
                    Nuevo
                </a>
            </div>
            <br>
            <br>
            <br>

            <div class="col-md-12">
                @if($vehiculos->count())
                    <table class="table table-condensed table-striped">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>VEH_PLA</th>
                        <th>VEH_CLA</th>
                        <th>VEH_SER</th>
                        <th>VEH_MOT</th>
                        <th>VEH_ASI</th>
                        <th>VEH_PAS</th>
                        <th>VEH_FRA</th>
                        <th>VEH_FR</th>
                        <th>VEH_EJE</th>
                        <th>VEH_RUE</th>
                        <th>VEH_COM</th>
                        <th>VEHICULOMODELO_ID</th>
                                <th class="text-right">OPCIONES</th>
                            </tr>
                        </thead>

                        <tbody>
                            @foreach($vehiculos as $vehiculo)
                                <tr>
                                    <td>{{$vehiculo->id}}</td>
                                    <td>{{$vehiculo->veh_pla}}</td>
                    <td>{{$vehiculo->veh_cla}}</td>
                    <td>{{$vehiculo->veh_ser}}</td>
                    <td>{{$vehiculo->veh_mot}}</td>
                    <td>{{$vehiculo->veh_asi}}</td>
                    <td>{{$vehiculo->veh_pas}}</td>
                    <td>{{$vehiculo->veh_fra}}</td>
                    <td>{{$vehiculo->veh_fr}}</td>
                    <td>{{$vehiculo->veh_eje}}</td>
                    <td>{{$vehiculo->veh_rue}}</td>
                    <td>{{$vehiculo->veh_com}}</td>
                    <td>{{$vehiculo->vehiculomodelo_id}}</td>
                                    <td class="text-right">
                                        <a class="btn btn-xs btn-primary" href="{{ route('vehiculos.show', $vehiculo->id) }}"><i class="glyphicon glyphicon-eye-open"></i> Ver</a>
                                        <a class="btn btn-xs btn-warning" href="{{ route('vehiculos.edit', $vehiculo->id) }}"><i class="glyphicon glyphicon-edit"></i> Editar</a>
                                        <form action="{{ route('vehiculos.destroy', $vehiculo->id) }}" method="POST" style="display: inline;" onsubmit="if(confirm('¿Estás seguro de eliminar?')) { return true } else {return false };">
                                            <input type="hidden" name="_method" value="DELETE">
                                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                            <button type="submit" class="btn btn-xs btn-danger"><i class="glyphicon glyphicon-trash"></i> Eliminar</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    {!! $vehiculos->render() !!}
                @else
                    <h3 class="text-center alert alert-info">Sin datos!</h3>
                @endif

            </div>
        </div>
    </div>
</section>

@endsection
@extends('layouts.iframe')

@section('header')

<section class="panel panel-default">
    <header class="panel-heading">
        <h5>
            <i class="glyphicon glyphicon-align-justify"></i> Servicios
        </h5>
    </header>

@endsection

@section('content')
    <div class="panel-body">
        <div class="row">

            <div class="col-md-12">
                <a class="btn btn-success pull-right btn-rounded" href="{{ route('servicios.create') }}" style="color: white;">
                    <i class="glyphicon glyphicon-plus"></i>
                    Nuevo
                </a>
            </div>
            <br>
            <br>
            <br>

            <div class="col-md-12">
                @if($servicios->count())
                    <table class="table table-condensed table-striped">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>CAS_PFA</th>
                        <th>CAS_PAT</th>
                        <th>CAS_PAC</th>
                        <th>CAS_PNE</th>
                        <th>CAS_PRU</th>
                        <th>CAS_PSC</th>
                        <th>CAS_PTA</th>
                        <th>CAS_PVT</th>
                        <th>CAS_PVC</th>
                        <th>CAS_PVF</th>
                        <th>CAS_PVA</th>
                        <th>ATAUD_ID</th>
                        <th>EMPLEADO_ID</th>
                        <th>VEHICULO_ID</th>
                        <th>CAPILLA_ID</th>
                        <th>URNA_ID</th>
                                <th class="text-right">OPCIONES</th>
                            </tr>
                        </thead>

                        <tbody>
                            @foreach($servicios as $servicio)
                                <tr>
                                    <td>{{$servicio->id}}</td>
                                    <td>{{$servicio->cas_pfa}}</td>
                    <td>{{$servicio->cas_pat}}</td>
                    <td>{{$servicio->cas_pac}}</td>
                    <td>{{$servicio->cas_pne}}</td>
                    <td>{{$servicio->cas_pru}}</td>
                    <td>{{$servicio->cas_psc}}</td>
                    <td>{{$servicio->cas_pta}}</td>
                    <td>{{$servicio->cas_pvt}}</td>
                    <td>{{$servicio->cas_pvc}}</td>
                    <td>{{$servicio->cas_pvf}}</td>
                    <td>{{$servicio->cas_pva}}</td>
                    <td>{{$servicio->ataud_id}}</td>
                    <td>{{$servicio->empleado_id}}</td>
                    <td>{{$servicio->vehiculo_id}}</td>
                    <td>{{$servicio->capilla_id}}</td>
                    <td>{{$servicio->urna_id}}</td>
                                    <td class="text-right">
                                        <a class="btn btn-xs btn-primary" href="{{ route('servicios.show', $servicio->id) }}"><i class="glyphicon glyphicon-eye-open"></i> Ver</a>
                                        <a class="btn btn-xs btn-warning" href="{{ route('servicios.edit', $servicio->id) }}"><i class="glyphicon glyphicon-edit"></i> Editar</a>
                                        <form action="{{ route('servicios.destroy', $servicio->id) }}" method="POST" style="display: inline;" onsubmit="if(confirm('¿Estás seguro de eliminar?')) { return true } else {return false };">
                                            <input type="hidden" name="_method" value="DELETE">
                                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                            <button type="submit" class="btn btn-xs btn-danger"><i class="glyphicon glyphicon-trash"></i> Eliminar</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    {!! $servicios->render() !!}
                @else
                    <h3 class="text-center alert alert-info">Sin datos!</h3>
                @endif

            </div>
        </div>
    </div>
</section>

@endsection
@extends('layouts.admin')

@section('header')

<section class="panel panel-default">
    <header class="panel-heading">
        <h5>
            <i class="glyphicon glyphicon-align-justify"></i> Proveedors
        </h5>
    </header>

@endsection

@section('content')
    <div class="panel-body">
        <div class="row">

            <div class="col-md-12">
                <a class="btn btn-success pull-right btn-rounded" href="{{ route('proveedors.create') }}" style="color: white;">
                    <i class="glyphicon glyphicon-plus"></i>
                    Nuevo
                </a>
            </div>
            <br>
            <br>
            <br>

            <div class="col-md-12">
                @if($proveedors->count())
                    <table class="table table-condensed table-striped">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>PRO_RUC</th>
                        <th>PRO_RSO</th>
                        <th>PRO_DIR</th>
                        <th>PRO_FIJ</th>
                        <th>PRO_CEL</th>
                        <th>PRO_MAI</th>
                        <th>PRO_OBS</th>
                        <th>DISTRITO_ID</th>
                        <th>CATEGORIA_ID</th>
                                <th class="text-right">OPCIONES</th>
                            </tr>
                        </thead>

                        <tbody>
                            @foreach($proveedors as $proveedor)
                                <tr>
                                    <td>{{$proveedor->id}}</td>
                                    <td>{{$proveedor->pro_ruc}}</td>
                    <td>{{$proveedor->pro_rso}}</td>
                    <td>{{$proveedor->pro_dir}}</td>
                    <td>{{$proveedor->pro_fij}}</td>
                    <td>{{$proveedor->pro_cel}}</td>
                    <td>{{$proveedor->pro_mai}}</td>
                    <td>{{$proveedor->pro_obs}}</td>
                    <td>{{$proveedor->distrito_id}}</td>
                    <td>{{$proveedor->categoria_id}}</td>
                                    <td class="text-right">
                                        <a class="btn btn-xs btn-primary" href="{{ route('proveedors.show', $proveedor->id) }}"><i class="glyphicon glyphicon-eye-open"></i> Ver</a>
                                        <a class="btn btn-xs btn-warning" href="{{ route('proveedors.edit', $proveedor->id) }}"><i class="glyphicon glyphicon-edit"></i> Editar</a>
                                        <form action="{{ route('proveedors.destroy', $proveedor->id) }}" method="POST" style="display: inline;" onsubmit="if(confirm('¿Estás seguro de eliminar?')) { return true } else {return false };">
                                            <input type="hidden" name="_method" value="DELETE">
                                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                            <button type="submit" class="btn btn-xs btn-danger"><i class="glyphicon glyphicon-trash"></i> Eliminar</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    {!! $proveedors->render() !!}
                @else
                    <h3 class="text-center alert alert-info">Sin datos!</h3>
                @endif

            </div>
        </div>
    </div>
</section>

@endsection
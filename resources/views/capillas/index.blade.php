@extends('layouts.admin')

@section('header')

<section class="panel panel-default">
    <header class="panel-heading">
        <h5>
            <i class="glyphicon glyphicon-align-justify"></i> Capillas
        </h5>
    </header>

@endsection

@section('content')
    <div class="panel-body">
        <div class="row">

            <div class="col-md-12">
                <a class="btn btn-success pull-right btn-rounded" href="{{ route('capillas.create') }}" style="color: white;">
                    <i class="glyphicon glyphicon-plus"></i>
                    Nuevo
                </a>
            </div>
            <br>
            <br>
            <br>

            <div class="col-md-12">
                @if($capillas->count())
                    <table class="table table-condensed table-striped">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>CAP_TIP</th>
                        <th>CAP_MOD</th>
                        <th>CAP_TXX</th>
                        <th>CAP_CCF</th>
                        <th>CAP_FLA</th>
                        <th>CAP_MAN</th>
                        <th>CAP_ALF</th>
                        <th>CAP_CAB</th>
                        <th>CAP_CRI</th>
                        <th>CAP_TAR</th>
                        <th>CAP_REC</th>
                        <th>CAP_PLT</th>
                        <th>CAP_MUL</th>
                        <th>PROVEEDOR_ID</th>
                        <th>CANDELABRO_ID</th>
                                <th class="text-right">OPCIONES</th>
                            </tr>
                        </thead>

                        <tbody>
                            @foreach($capillas as $capilla)
                                <tr>
                                    <td>{{$capilla->id}}</td>
                                    <td>{{$capilla->cap_tip}}</td>
                    <td>{{$capilla->cap_mod}}</td>
                    <td>{{$capilla->cap_txx}}</td>
                    <td>{{$capilla->cap_ccf}}</td>
                    <td>{{$capilla->cap_fla}}</td>
                    <td>{{$capilla->cap_man}}</td>
                    <td>{{$capilla->cap_alf}}</td>
                    <td>{{$capilla->cap_cab}}</td>
                    <td>{{$capilla->cap_cri}}</td>
                    <td>{{$capilla->cap_tar}}</td>
                    <td>{{$capilla->cap_rec}}</td>
                    <td>{{$capilla->cap_plt}}</td>
                    <td>{{$capilla->cap_mul}}</td>
                    <td>{{$capilla->proveedor->pro_rso}}</td>
                    <td>{{$capilla->}}</td>
                                    <td class="text-right">
                                        <a class="btn btn-xs btn-primary" href="{{ route('capillas.show', $capilla->id) }}"><i class="glyphicon glyphicon-eye-open"></i> Ver</a>
                                        <a class="btn btn-xs btn-warning" href="{{ route('capillas.edit', $capilla->id) }}"><i class="glyphicon glyphicon-edit"></i> Editar</a>
                                        <form action="{{ route('capillas.destroy', $capilla->id) }}" method="POST" style="display: inline;" onsubmit="if(confirm('¿Estás seguro de eliminar?')) { return true } else {return false };">
                                            <input type="hidden" name="_method" value="DELETE">
                                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                            <button type="submit" class="btn btn-xs btn-danger"><i class="glyphicon glyphicon-trash"></i> Eliminar</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    {!! $capillas->render() !!}
                @else
                    <h3 class="text-center alert alert-info">Sin datos!</h3>
                @endif

            </div>
        </div>
    </div>
</section>

@endsection
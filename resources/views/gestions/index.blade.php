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
            <i class="glyphicon glyphicon-align-justify"></i> Gestions
        </h5>
    </header>

@endsection

@section('content')
    <div class="panel-body">
        <div class="row">

            <div class="col-md-12">
                <a class="btn btn-success pull-right btn-rounded" href="{{ route('gestions.create') }}" style="color: white;">
                    <i class="glyphicon glyphicon-plus"></i>
                    Nuevo
                </a>
            </div>
            <br>
            <br>
            <br>

            <div class="col-md-12">
                @if($gestions->count())
                    <table class="table table-condensed table-striped">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>GES_CAR</th>
                        <th>GES_CEM</th>
                        <th>GES_PRO</th>
                        <th>GES_VEL</th>
                        <th>GES_OBS</th>
                        <th>CABECERACONTRATO_ID</th>
                                <th class="text-right">OPCIONES</th>
                            </tr>
                        </thead>

                        <tbody>
                            @foreach($gestions as $gestion)
                                <tr>
                                    <td>{{$gestion->id}}</td>
                                    <td>{{$gestion->ges_car}}</td>
                    <td>{{$gestion->ges_cem}}</td>
                    <td>{{$gestion->ges_pro}}</td>
                    <td>{{$gestion->ges_vel}}</td>
                    <td>{{$gestion->ges_obs}}</td>
                    <td>{{$gestion->cabeceracontrato_id}}</td>
                                    <td class="text-right">
                                        <a class="btn btn-xs btn-primary" href="{{ route('gestions.show', $gestion->id) }}"><i class="glyphicon glyphicon-eye-open"></i> Ver</a>
                                        <a class="btn btn-xs btn-warning" href="{{ route('gestions.edit', $gestion->id) }}"><i class="glyphicon glyphicon-edit"></i> Editar</a>
                                        <form action="{{ route('gestions.destroy', $gestion->id) }}" method="POST" style="display: inline;" onsubmit="if(confirm('¿Estás seguro de eliminar?')) { return true } else {return false };">
                                            <input type="hidden" name="_method" value="DELETE">
                                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                            <button type="submit" class="btn btn-xs btn-danger"><i class="glyphicon glyphicon-trash"></i> Eliminar</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    {!! $gestions->render() !!}
                @else
                    <h3 class="text-center alert alert-info">Sin datos!</h3>
                @endif

            </div>
        </div>
    </div>
</section>

@endsection
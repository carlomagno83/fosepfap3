@extends('layouts.iframe')

@section('header')

<section class="panel panel-default">
    <header class="panel-heading">
        <h5>
            <i class="glyphicon glyphicon-align-justify"></i> Medicos
        </h5>
    </header>

@endsection

@section('content')
    <div class="panel-body">
        <div class="row">

            <div class="col-md-12">
                <a class="btn btn-success pull-right btn-rounded" href="{{ route('medicos.create') }}" style="color: white;">
                    <i class="glyphicon glyphicon-plus"></i>
                    Nuevo
                </a>
            </div>
            <br>
            <br>
            <br>

            <div class="col-md-12">
                @if($medicos->count())
                    <table class="table table-condensed table-striped">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>MED_DNI</th>
                        <th>MED_PAT</th>
                        <th>MED_MAT</th>
                        <th>MED_NOM</th>
                        <th>MED_COL</th>
                        <th>MED_DIR</th>
                        <th>MED_UBI</th>
                        <th>DISTRITO_ID</th>
                                <th class="text-right">OPCIONES</th>
                            </tr>
                        </thead>

                        <tbody>
                            @foreach($medicos as $medico)
                                <tr>
                                    <td>{{$medico->id}}</td>
                                    <td>{{$medico->med_dni}}</td>
                    <td>{{$medico->med_pat}}</td>
                    <td>{{$medico->med_mat}}</td>
                    <td>{{$medico->med_nom}}</td>
                    <td>{{$medico->med_col}}</td>
                    <td>{{$medico->med_dir}}</td>
                    <td>{{$medico->med_ubi}}</td>
                    <td>{{$medico->distrito_id}}</td>
                                    <td class="text-right">
                                        <a class="btn btn-xs btn-primary" href="{{ route('medicos.show', $medico->id) }}"><i class="glyphicon glyphicon-eye-open"></i> Ver</a>
                                        <a class="btn btn-xs btn-warning" href="{{ route('medicos.edit', $medico->id) }}"><i class="glyphicon glyphicon-edit"></i> Editar</a>
                                        <form action="{{ route('medicos.destroy', $medico->id) }}" method="POST" style="display: inline;" onsubmit="if(confirm('¿Estás seguro de eliminar?')) { return true } else {return false };">
                                            <input type="hidden" name="_method" value="DELETE">
                                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                            <button type="submit" class="btn btn-xs btn-danger"><i class="glyphicon glyphicon-trash"></i> Eliminar</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    {!! $medicos->render() !!}
                @else
                    <h3 class="text-center alert alert-info">Sin datos!</h3>
                @endif

            </div>
        </div>
    </div>
</section>

@endsection
@extends('layouts.admin')

@section('header')

<section class="panel panel-default">
    <header class="panel-heading">
        <h5>
            <i class="glyphicon glyphicon-align-justify"></i> Vehiculomarcas
        </h5>
    </header>

@endsection

@section('content')
    <div class="panel-body">
        <div class="row">

            <div class="col-md-12">
                <a class="btn btn-success pull-right btn-rounded" href="{{ route('vehiculomarcas.create') }}" style="color: white;">
                    <i class="glyphicon glyphicon-plus"></i>
                    Nuevo
                </a>
            </div>
            <br>
            <br>
            <br>

            <div class="col-md-12">
                @if($vehiculomarcas->count())
                    <table class="table table-condensed table-striped">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>VMA_NOM</th>
                                <th class="text-right">OPCIONES</th>
                            </tr>
                        </thead>

                        <tbody>
                            @foreach($vehiculomarcas as $vehiculomarca)
                                <tr>
                                    <td>{{$vehiculomarca->id}}</td>
                                    <td>{{$vehiculomarca->vma_nom}}</td>
                                    <td class="text-right">
                                        <a class="btn btn-xs btn-primary" href="{{ route('vehiculomarcas.show', $vehiculomarca->id) }}"><i class="glyphicon glyphicon-eye-open"></i> Ver</a>
                                        <a class="btn btn-xs btn-warning" href="{{ route('vehiculomarcas.edit', $vehiculomarca->id) }}"><i class="glyphicon glyphicon-edit"></i> Editar</a>
                                        <form action="{{ route('vehiculomarcas.destroy', $vehiculomarca->id) }}" method="POST" style="display: inline;" onsubmit="if(confirm('¿Estás seguro de eliminar?')) { return true } else {return false };">
                                            <input type="hidden" name="_method" value="DELETE">
                                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                            <button type="submit" class="btn btn-xs btn-danger"><i class="glyphicon glyphicon-trash"></i> Eliminar</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    {!! $vehiculomarcas->render() !!}
                @else
                    <h3 class="text-center alert alert-info">Sin datos!</h3>
                @endif

            </div>
        </div>
    </div>
</section>

@endsection
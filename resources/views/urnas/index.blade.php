@extends('layouts.admin')

@section('header')
    <div class="page-header clearfix">
        <h1>
            <i class="glyphicon glyphicon-align-justify"></i> Urnas
            <a class="btn btn-success pull-right" href="{{ route('urnas.create') }}"><i class="glyphicon glyphicon-plus"></i> Create</a>
        </h1>

    </div>
@endsection

@section('content')
    <div class="row">
        <div class="col-md-12">
            @if($urnas->count())
                <table class="table table-condensed table-striped">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>URN_ID</th>
                        <th>URN_TIP</th>
                        <th>URN_MOD</th>
                        <th>URN_COL</th>
                        <th>URN_PRE</th>
                        <th>SERVICIO_ID</th>
                        <th>PROVEEDOR_ID</th>
                            <th class="text-right">OPTIONS</th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach($urnas as $urna)
                            <tr>
                                <td>{{$urna->id}}</td>
                                <td>{{$urna->urn_id}}</td>
                    <td>{{$urna->urn_tip}}</td>
                    <td>{{$urna->urn_mod}}</td>
                    <td>{{$urna->urn_col}}</td>
                    <td>{{$urna->urn_pre}}</td>
                    <td>{{$urna->servicio_id}}</td>
                    <td>{{$urna->proveedor->pro_rso}}</td>
                                <td class="text-right">
                                    <a class="btn btn-xs btn-primary" href="{{ route('urnas.show', $urna->id) }}"><i class="glyphicon glyphicon-eye-open"></i> View</a>
                                    <a class="btn btn-xs btn-warning" href="{{ route('urnas.edit', $urna->id) }}"><i class="glyphicon glyphicon-edit"></i> Edit</a>
                                    <form action="{{ route('urnas.destroy', $urna->id) }}" method="POST" style="display: inline;" onsubmit="if(confirm('Delete? Are you sure?')) { return true } else {return false };">
                                        <input type="hidden" name="_method" value="DELETE">
                                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                        <button type="submit" class="btn btn-xs btn-danger"><i class="glyphicon glyphicon-trash"></i> Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                {!! $urnas->render() !!}
            @else
                <h3 class="text-center alert alert-info">Empty!</h3>
            @endif

        </div>
    </div>

@endsection
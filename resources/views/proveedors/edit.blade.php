@extends('layouts.admin')
@section('css')
  <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.0/css/bootstrap-datepicker.css" rel="stylesheet">
@endsection
@section('header')
    <div class="page-header">
        <h1><i class="glyphicon glyphicon-edit"></i> Proveedors / Edit #{{$proveedor->id}}</h1>
    </div>
@endsection

@section('content')
    @include('error')

    <div class="row">
        <div class="col-md-12">

            <form action="{{ route('proveedors.update', $proveedor->id) }}" method="POST">
                <input type="hidden" name="_method" value="PUT">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">

                <div class="form-group @if($errors->has('ruc')) has-error @endif">
                       <label for="ruc-field">Ruc</label>
                    <input type="text" id="ruc-field" name="ruc" class="form-control" value="{{$proveedor->ruc }}"/>
                       @if($errors->has("ruc"))
                        <span class="help-block">{{ $errors->first("ruc") }}</span>
                       @endif
                    </div>
                    <div class="form-group @if($errors->has('nombre')) has-error @endif">
                       <label for="nombre-field">Nombre</label>
                    <input type="text" id="nombre-field" name="nombre" class="form-control" value="{{$proveedor->nombre }}"/>
                       @if($errors->has("nombre"))
                        <span class="help-block">{{ $errors->first("nombre") }}</span>
                       @endif
                    </div>
                    <div class="form-group @if($errors->has('direccion')) has-error @endif">
                       <label for="direccion-field">Direccion</label>
                    <input type="text" id="direccion-field" name="direccion" class="form-control" value="{{ $proveedor->direccion }}"/>
                       @if($errors->has("direccion"))
                        <span class="help-block">{{ $errors->first("direccion") }}</span>
                       @endif
                    </div>
                    <div class="form-group @if($errors->has('iddistrito')) has-error @endif">
                       <label for="iddistrito-field">Iddistrito</label>
                    <input type="text" id="iddistrito-field" name="iddistrito" class="form-control" value="{{$proveedor->iddistrito }}"/>
                       @if($errors->has("iddistrito"))
                        <span class="help-block">{{ $errors->first("iddistrito") }}</span>
                       @endif
                    </div>
                    <div class="form-group @if($errors->has('telefono_fijo')) has-error @endif">
                       <label for="telefono_fijo-field">Telefono_fijo</label>
                    <input type="text" id="telefono_fijo-field" name="telefono_fijo" class="form-control" value="{{ $proveedor->telefono_fijo }}"/>
                       @if($errors->has("telefono_fijo"))
                        <span class="help-block">{{ $errors->first("telefono_fijo") }}</span>
                       @endif
                    </div>
                    <div class="form-group @if($errors->has('telefono_celular')) has-error @endif">
                       <label for="telefono_celular-field">Telefono_celular</label>
                    <input type="text" id="telefono_celular-field" name="telefono_celular" class="form-control" value="{{ $proveedor->telefono_celular }}"/>
                       @if($errors->has("telefono_celular"))
                        <span class="help-block">{{ $errors->first("telefono_celular") }}</span>
                       @endif
                    </div>
                    <div class="form-group @if($errors->has('mail')) has-error @endif">
                       <label for="mail-field">Mail</label>
                    <input type="text" id="mail-field" name="mail" class="form-control" value="{{ $proveedor->mail }}"/>
                       @if($errors->has("mail"))
                        <span class="help-block">{{ $errors->first("mail") }}</span>
                       @endif
                    </div>
                    <div class="form-group @if($errors->has('costo')) has-error @endif">
                       <label for="costo-field">Costo</label>
                    <input type="text" id="costo-field" name="costo" class="form-control" value="{{ $proveedor->costo }}"/>
                       @if($errors->has("costo"))
                        <span class="help-block">{{ $errors->first("costo") }}</span>
                       @endif
                    </div>
                    <div class="form-group @if($errors->has('observacion')) has-error @endif">
                       <label for="observacion-field">Observacion</label>
                    <textarea class="form-control" id="observacion-field" rows="3" name="observacion">{{ $proveedor->observacion }}</textarea>
                       @if($errors->has("observacion"))
                        <span class="help-block">{{ $errors->first("observacion") }}</span>
                       @endif
                    </div>
                    <div class="form-group @if($errors->has('user')) has-error @endif">
                       <label for="user-field">User</label>
                    <input type="text" id="user-field" name="user" class="form-control" value="{{ $proveedor->user }}"/>
                       @if($errors->has("user"))
                        <span class="help-block">{{ $errors->first("user") }}</span>
                       @endif
                    </div>
                    <div class="form-group @if($errors->has('fecha')) has-error @endif">
                       <label for="fecha-field">Fecha</label>
                    <input type="text" id="fecha-field" name="fecha" class="form-control" value="{{ $proveedor->fecha }}"/>
                       @if($errors->has("fecha"))
                        <span class="help-block">{{ $errors->first("fecha") }}</span>
                       @endif
                    </div>
                    <div class="form-group @if($errors->has('id_categoria')) has-error @endif">
                       <label for="id_categoria-field">Id_categoria</label>
                    <input type="text" id="id_categoria-field" name="id_categoria" class="form-control" value="{{ $proveedor->id_categoria }}"/>
                       @if($errors->has("id_categoria"))
                        <span class="help-block">{{ $errors->first("id_categoria") }}</span>
                       @endif
                    </div>
                <div class="well well-sm">
                    <button type="submit" class="btn btn-primary">Save</button>
                    <a class="btn btn-link pull-right" href="{{ route('proveedors.index') }}"><i class="glyphicon glyphicon-backward"></i>  Back</a>
                </div>
            </form>

        </div>
    </div>
@endsection
@section('scripts')
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.0/js/bootstrap-datepicker.min.js"></script>
  <script>
    $('.date-picker').datepicker({
    });
  </script>
@endsection

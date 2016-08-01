@extends('layouts.admin')

@section('css')
  <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.0/css/bootstrap-datepicker.css" rel="stylesheet">
@endsection

@section('header')
<div class="col-md-6">
<section class="panel panel-default">

    <header class="panel-heading">
        <h5><i class="glyphicon glyphicon-edit"></i> Capillas / Editar #{{$capilla->id}}</h5>
    </header>

@endsection

@section('content')
    @include('error')

    <div class="panel-body">
        <div class="row">
            <div class="col-md-12">

                <form action="{{ route('capillas.update', $capilla->id) }}" method="POST">
                    <input type="hidden" name="_method" value="PUT">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">

                    <div class="form-group @if($errors->has('cap_tip')) has-error @endif">
                       <label for="cap_tip-field">Cap_tip</label>
                    <input type="text" id="cap_tip-field" name="cap_tip" class="form-control" value="{{ $capilla->cap_tip }}" required/>
                       @if($errors->has("cap_tip"))
                        <span class="help-block">{{ $errors->first("cap_tip") }}</span>
                       @endif
                    </div>
                    <div class="form-group @if($errors->has('cap_mod')) has-error @endif">
                       <label for="cap_mod-field">Cap_mod</label>
                    <input type="text" id="cap_mod-field" name="cap_mod" class="form-control" value="{{ $capilla->cap_mod }}" required/>
                       @if($errors->has("cap_mod"))
                        <span class="help-block">{{ $errors->first("cap_mod") }}</span>
                       @endif
                    </div>
                    <div class="form-group @if($errors->has('cap_txx')) has-error @endif">
                       <label for="cap_txx-field">Cap_txx</label>
                    <input type="text" id="cap_txx-field" name="cap_txx" class="form-control" value="{{ $capilla->cap_txx }}" required/>
                       @if($errors->has("cap_txx"))
                        <span class="help-block">{{ $errors->first("cap_txx") }}</span>
                       @endif
                    </div>
                    <div class="form-group @if($errors->has('cap_ccf')) has-error @endif">
                       <label for="cap_ccf-field">Cap_ccf</label>
                    <input type="text" id="cap_ccf-field" name="cap_ccf" class="form-control" value="{{ $capilla->cap_ccf }}" required/>
                       @if($errors->has("cap_ccf"))
                        <span class="help-block">{{ $errors->first("cap_ccf") }}</span>
                       @endif
                    </div>
                    <div class="form-group @if($errors->has('cap_fla')) has-error @endif">
                       <label for="cap_fla-field">Cap_fla</label>
                    <input type="text" id="cap_fla-field" name="cap_fla" class="form-control" value="{{ $capilla->cap_fla }}" required/>
                       @if($errors->has("cap_fla"))
                        <span class="help-block">{{ $errors->first("cap_fla") }}</span>
                       @endif
                    </div>
                    <div class="form-group @if($errors->has('cap_man')) has-error @endif">
                       <label for="cap_man-field">Cap_man</label>
                    <input type="text" id="cap_man-field" name="cap_man" class="form-control" value="{{ $capilla->cap_man }}" required/>
                       @if($errors->has("cap_man"))
                        <span class="help-block">{{ $errors->first("cap_man") }}</span>
                       @endif
                    </div>
                    <div class="form-group @if($errors->has('cap_alf')) has-error @endif">
                       <label for="cap_alf-field">Cap_alf</label>
                    <input type="text" id="cap_alf-field" name="cap_alf" class="form-control" value="{{ $capilla->cap_alf }}" required/>
                       @if($errors->has("cap_alf"))
                        <span class="help-block">{{ $errors->first("cap_alf") }}</span>
                       @endif
                    </div>
                    <div class="form-group @if($errors->has('cap_cab')) has-error @endif">
                       <label for="cap_cab-field">Cap_cab</label>
                    <input type="text" id="cap_cab-field" name="cap_cab" class="form-control" value="{{ $capilla->cap_cab }}" required/>
                       @if($errors->has("cap_cab"))
                        <span class="help-block">{{ $errors->first("cap_cab") }}</span>
                       @endif
                    </div>
                    <div class="form-group @if($errors->has('cap_cri')) has-error @endif">
                       <label for="cap_cri-field">Cap_cri</label>
                    <input type="text" id="cap_cri-field" name="cap_cri" class="form-control" value="{{ $capilla->cap_cri }}" required/>
                       @if($errors->has("cap_cri"))
                        <span class="help-block">{{ $errors->first("cap_cri") }}</span>
                       @endif
                    </div>
                    <div class="form-group @if($errors->has('cap_tar')) has-error @endif">
                       <label for="cap_tar-field">Cap_tar</label>
                    <input type="text" id="cap_tar-field" name="cap_tar" class="form-control" value="{{ $capilla->cap_tar }}" required/>
                       @if($errors->has("cap_tar"))
                        <span class="help-block">{{ $errors->first("cap_tar") }}</span>
                       @endif
                    </div>
                    <div class="form-group @if($errors->has('cap_rec')) has-error @endif">
                       <label for="cap_rec-field">Cap_rec</label>
                    <input type="text" id="cap_rec-field" name="cap_rec" class="form-control" value="{{ $capilla->cap_rec }}" required/>
                       @if($errors->has("cap_rec"))
                        <span class="help-block">{{ $errors->first("cap_rec") }}</span>
                       @endif
                    </div>
                    <div class="form-group @if($errors->has('cap_plt')) has-error @endif">
                       <label for="cap_plt-field">Cap_plt</label>
                    <input type="text" id="cap_plt-field" name="cap_plt" class="form-control" value="{{ $capilla->cap_plt }}" required/>
                       @if($errors->has("cap_plt"))
                        <span class="help-block">{{ $errors->first("cap_plt") }}</span>
                       @endif
                    </div>
                    <div class="form-group @if($errors->has('cap_mul')) has-error @endif">
                       <label for="cap_mul-field">Cap_mul</label>
                    <input type="text" id="cap_mul-field" name="cap_mul" class="form-control" value="{{ $capilla->cap_mul }}" required/>
                       @if($errors->has("cap_mul"))
                        <span class="help-block">{{ $errors->first("cap_mul") }}</span>
                       @endif
                    </div>
                    <div class="form-group @if($errors->has('proveedor_id')) has-error @endif">
                       <label for="proveedor_id-field">Proveedor_id</label>
                    <input type="text" id="proveedor_id-field" name="proveedor_id" class="form-control" value="{{ $capilla->proveedor_id }}" required/>
                       @if($errors->has("proveedor_id"))
                        <span class="help-block">{{ $errors->first("proveedor_id") }}</span>
                       @endif
                    </div>
                    <div class="form-group @if($errors->has('candelabro_id')) has-error @endif">
                       <label for="candelabro_id-field">Candelabro_id</label>
                    <input type="text" id="candelabro_id-field" name="candelabro_id" class="form-control" value="{{ $capilla->candelabro_id }}" required/>
                       @if($errors->has("candelabro_id"))
                        <span class="help-block">{{ $errors->first("candelabro_id") }}</span>
                       @endif
                    </div>
                    <div class="well well-sm">
                        <button type="submit" class="btn btn-primary">Guardar</button>
                        <a class="btn btn-link pull-right" href="{{ route('capillas.index') }}"><i class="glyphicon glyphicon-backward"></i>  Atrás</a>
                    </div>
                </form>

            </div>
        </div>
    </div>
</section>
</div>
@endsection

@section('scripts')
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.0/js/bootstrap-datepicker.min.js"></script>
  <script>
    $('.date-picker').datepicker({
    });
  </script>
@endsection

@extends('layouts.layout')
@section('content')
    <div class="row">
        <section class="content">
            <div class="col-md-8 col-md-offset-2">
                @if (count($errors) > 0)
                    <div class="alert alert-danger">
                        <strong>Error!</strong> Revise los campos obligatorios.<br><br>
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                @if(Session::has('success'))
                    <div class="alert alert-info">
                        {{Session::get('success')}}
                    </div>
                @endif

                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Editar empleado</h3>
                    </div>
                    <div class="panel-body">
                        <div class="table-container">
                            <form method="POST" action="{{ route('empleado.update',$empleado->id) }}"  role="form">
                                {{ method_field('PUT') }}
                                {{ csrf_field() }}
                                <div class="row">
                                    <div class="col-xs-6 col-sm-6 col-md-6">
                                        <div class="form-group">
                                            <label>Nombre del empleado</label>
                                            <input type="text" name="nombre" id="nombre" class="form-control input-sm" value="{{$empleado->nombre}}">
                                        </div>
                                    </div>
                                    <div class="col-xs-6 col-sm-6 col-md-6">
                                        <div class="form-group">
                                            <label>Puesto</label>
                                            <input type="text" name="puesto" id="puesto" class="form-control input-sm" value="{{$empleado->puesto}}">
                                        </div>
                                    </div>
                                    <div class="col-xs-6 col-sm-6 col-md-6">
                                        <div class="form-group">
                                            <label>Correo</label>
                                            <input type="email" name="email" id="email" class="form-control input-sm" value="{{$empleado->email}}">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xs-6 col-sm-6 col-md-6">
                                        <div class="form-group">
                                            <label>Edad</label>
                                            <input type="number" name="edad" id="edad" class="form-control input-sm" value="{{$empleado->edad}}">
                                        </div>
                                    </div>
                                    <div class="col-xs-6 col-sm-6 col-md-6">
                                        <div class="form-group">
                                            <label>Antigüedad del empleado</label>
                                            <input type="text" name="antiguedad" id="antiguedad" class="form-control input-sm" value="{{$empleado->antiguedad}}">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xs-6 col-sm-6 col-md-6">
                                        <div class="form-group">
                                            <label> Sueldo </label>
                                            <input type="number" name="sueldo" id="sueldo" class="form-control input-sm" value="{{$empleado->sueldo}}">
                                        </div>
                                    </div>
                                    <div class="col-xs-6 col-sm-6 col-md-6">
                                        <div class="form-group">
                                            <label> Selecciona el tipo de moneda</label>
                                            <select class="form-control" name="moneda_sueldo" id="moneda_sueldo" placeholder="Moneda Sueldo">
                                                @foreach ($list as $options)
                                                @if ($empleado->moneda_sueldo == $options)
                                                <option selected>{{ $options }}</option>        
                                                @else
                                                <option>{{ $options }}</option>    
                                                @endif
                                                    @endforeach
                                                  </select>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">

                                    <div class="col-xs-12 col-sm-12 col-md-12">
                                        <input type="submit"  value="Actualizar" class="btn btn-success btn-block">
                                        <a href="{{ route('empleado.index') }}" class="btn btn-info btn-block" >Atrás</a>
                                    </div>

                                </div>
                            </form>
                        </div>
                    </div>

                </div>
            </div>
        </section>
@endsection
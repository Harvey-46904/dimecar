@extends('dashboards.index')
@section('registro_clientes')

<section class="content">
        <div class="container-fluid">
            <div class="row clearfix">
                @if (\Session::has('error'))
                    <h6 class="text-dark bg-danger"> ERROR:{!! \Session::get('error') !!}</h6>
                @endif
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                               Consultar Vehículo
                            </h2>
                            <ul class="header-dropdown m-r--5">
                                <li class="dropdown">
                                    <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown"
                                        role="button" aria-haspopup="true" aria-expanded="false">
                                        <i class="material-icons">more_vert</i>
                                    </a>
                                    <ul class="dropdown-menu pull-right">
                                        <li><a href="javascript:void(0);">Action</a></li>
                                        <li><a href="javascript:void(0);">Another action</a></li>
                                        <li><a href="javascript:void(0);">Something else here</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div class="body">
                            <form action="{{ route('consulta_contable') }}" method="POST">
                                @csrf
                                <div class="row">
                                    <div class="col-md-4">
                                        <label for="direccion">Placa Vehiculo</label>
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="text" id="placa" name="placa" class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                    <label for="nombre_vehiculo">Desde</label>
                                            <div class="form-group">
                                                <input class="form-control" type="date" id="desde" name="desde">
                                            </div>
                                    </div>
                                    <div class="col-md-4">
                                    <label for="nombre_vehiculo">hasta</label>
                                            <div class="form-group">
                                                <input class="form-control" type="date" id="hastas" name="hastas">
                                            </div>
                                    </div>
                                </div>


                                <br>
                                <button type="submit" class="btn btn-primary m-t-15 waves-effect">Consultar</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
   


    
@endsection

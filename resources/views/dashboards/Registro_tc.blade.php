@extends('dashboards.index')
@section('registro_clientes')
<section class="content">
    <div class="container-fluid">
        <div class="row clearfix">
          
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2>
                            CREAR ENTRADA / SALIDA
                        </h2>
                        <ul class="header-dropdown m-r--5">
                            <li class="dropdown">
                                <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
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
                        <form action="{{route('crear_tipo')}}" method="POST" >
                            @csrf
                            
                            <label for="tipo_documento">Tipo Contable</label>
                            <div class="form-group">
                            <select class="form-control show-tick" id="tipo_contable" name="tipo_contable">
                                <option value="">Seleccione...</option>
                                <option value="Entrada" >Entrada</option>
                                <option value="Salida" >Salida</option>
                            </select>
                            </div>
                            <label for="nombres">Nombre</label>
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="text" id="nombre" name="nombre" class="form-control">
                                </div>
                            </div>
                            <label for="apellidos">Descripcion</label>
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="text" id="Descripcion" name="Descripcion" class="form-control">
                                </div>
                            </div>
                            <br>
                            <button type="submit" class="btn btn-primary m-t-15 waves-effect">GUARDAR</button>
                        </form>
                        <h3 class="text-center">Lista de entradas y salidas</h3>
                        <div class="container">
                            <div class="row">
                                <div class="col-md-6">
                                <div class="body table-responsive">
                                <table class="table table-striped text-center">
                                    <thead>
                                        <tr class="bg-success">
                                            <th>ENTRADAS</th>
                                            <th>DESCRIPCION</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    @foreach ($entradas as $entrada)
                                        <tr>
                                            <td>{{$entrada->nombre_tipo_contable}}</td>
                                            <td>{{$entrada->descripcion_tipo_contable}}</td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                    </table>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                <div class="body table-responsive">
                                <table class="table table-striped text-center">
                                    <thead>
                                        <tr class="bg-danger">
                                            <th>SALIDAS</th>
                                            <th>DESCRIPCION</th>
                                            
                                        </tr>
                                    </thead>
                                    <tbody>
                                    @foreach ($salidas as $salida)
                                        <tr>
                                            <td>{{$salida->nombre_tipo_contable}}</td>
                                            <td>{{$salida->descripcion_tipo_contable}}</td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                    </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
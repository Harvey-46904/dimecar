@extends('dashboards.index')
@section('registro_clientes')
    <section class="content">
        <div class="container-fluid">
            <div class="row clearfix">
                @if (Session::get('correcto'))
                    <div class="alert alert-success">
                        <button type="button" aria-hidden="true" class="close" data-dismiss="alert"
                            aria-label="Close">
                            <i class="tim-icons icon-simple-remove"></i>
                        </button>
                        <span><b>la reserva se creo correctamente</span>
                    </div>
                @endif
                @if (Session::get('correcto1'))
                    <div class="alert alert-success">
                        <button type="button" aria-hidden="true" class="close" data-dismiss="alert"
                            aria-label="Close">
                            <i class="tim-icons icon-simple-remove"></i>
                        </button>
                        <span><b>El cliente se actualizo correctamente</span>
                    </div>
                @endif
                @if (Session::get('error'))
                <div class="alert alert-success">
                    <button type="button" aria-hidden="true" class="close" data-dismiss="alert"
                        aria-label="Close">
                        <i class="tim-icons icon-simple-remove"></i>
                    </button>
                    <span><b>Reserva Eliminada</span>
                </div>
            @endif
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                Lista de VEHICULOS
                            </h2>
                            
                           
                            <div class="body table-responsive">
                                <table class="table table-striped" id="tabla_contable" >
                                    <thead>
                                       
                                        <tr>
                                            
                                            <th>PlACA</th>
                                            <th>VEHICULO</th>
                                            <th class="no_salto">ENTRADA</th>
                                            <th class="no_salto">SALIDA</th>
                                            <th class="no_salto">Contabilidad</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    @foreach ($carros as $carro)
                                    <tr>
                                        
                                            <th>{{$carro->placa}}</th>
                                            <th>{{$carro->nombre_vehiculo}}</th>
                                            <th >   <button type="button" class="btn btn-success" data-toggle="modal" data-target="#entrada" onclick="datos({{json_encode($carro,TRUE)}})">
                            ENTRADA
                        </button></th>
                                            <th > <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#salida" onclick="datos({{json_encode($carro,TRUE)}})">
                            SALIDA
                        </button></th>
                        <th > <button type="button" class="btn btn-primary" onclick="mirar_contabilidad({{$carro->id_vehiculo}})" >
                            Contabilidad
                        </button></th>
                                         
                                        </tr>
                                    @endforeach
                                            
                                        
                                       
                                    </tbody>
                                </table>
                              
                            </div>
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
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


     <!-- Modal -->
     <div class="modal fade" id="salida" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Registro Salida</h5>
                    <button type="button" class="close" data-dismiss="salida" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <h1 class="text-center">Salida</h1>
                    <form action="{{ route('registrar_libro') }}" method="POST">
                        @csrf
                        <div class="row">
                            <div class="col-md-6">
                                <label for="nombres">Vehiculo</label>
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="text"  name="placa" class="form-control placa"
                                            placeholder="Digite Placa vehiculo" value="">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <label for="nombres">Vehiculo</label>
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="text"  name="Vehiculo" class="form-control vehiculo"
                                            value="">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <label for="tipo_documento">Tipo de salida</label>
                        <div class="form-group">
                            <select class="form-control show-tick" id="tipo_entrada" name="tipo_entrada">
                                <option value="">Seleccione tipo de entrada</option>
                                @foreach ($tipos_salidas as $tipos_salida)
                                    <option value="{{ $tipos_salida->id_tipo_contable }}">
                                        {{ $tipos_salida->nombre_tipo_contable }}</option>
                                @endforeach
                            </select>
                        </div>
                        <label for="nombres">Valor</label>
                        <div class="form-group">
                            <div class="form-line">
                                <input type="text" id="Valor" name="Valor" class="form-control"
                                    placeholder="digite valor sin puntos">
                            </div>
                        </div>
                        <label for="tipo_documento">tipo de dinero</label>
                        <div class="form-group">
                            <select class="form-control show-tick" id="dinero" name="dinero">
                                <option value="">Seleccione tipo de dinero</option>
                                <option value="Efectivo">Efectivo</option>
                                <option value="Banco">Banco</option>
                            </select>
                        </div>
                        <label for="apellidos">fecha</label>
                        <div class="form-group">
                            <div class="form-line">
                                <input type="date" id="fecha" name="fecha" class="form-control">
                            </div>
                        </div>
                        <br>
                        <button type="submit" class="btn btn-primary m-t-15 waves-effect">GUARDAR</button>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="salida">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>


    
    <!-- Modal -->
    <div class="modal fade" id="entrada" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Registro Entrada</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <h1 class="text-center">Entrada</h1>
                    <form action="{{ route('registrar_libro') }}" method="POST">
                        @csrf
                        <div class="row">
                            <div class="col-md-6">
                                <label for="nombres">Vehiculo</label>
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="text"  name="placa" class="form-control placa"
                                            placeholder="Digite Placa vehiculo" value="">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <label for="nombres">Vehiculo</label>
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="text"  name="Vehiculo" class="form-control vehiculo"
                                            value="">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <label for="tipo_documento">Tipo de entrada</label>
                        <div class="form-group">
                            <select class="form-control show-tick" id="tipo_entrada" name="tipo_entrada">
                                <option value="">Seleccione tipo de entrada</option>
                                @foreach ($tipos_entradas as $tipos_entrada)
                                    <option value="{{ $tipos_entrada->id_tipo_contable }}">
                                        {{ $tipos_entrada->nombre_tipo_contable }}</option>
                                @endforeach
                            </select>
                        </div>
                        <label for="nombres">Valor</label>
                        <div class="form-group">
                            <div class="form-line">
                                <input type="text" id="Valor" name="Valor" class="form-control"
                                    placeholder="digite valor sin puntos">
                            </div>
                        </div>
                        <label for="tipo_documento">tipo de dinero</label>
                        <div class="form-group">
                            <select class="form-control show-tick" id="dinero" name="dinero">
                                <option value="">Seleccione tipo de dinero</option>
                                <option value="Efectivo">Efectivo</option>
                                <option value="Banco">Banco</option>
                            </select>
                        </div>
                        <label for="apellidos">fecha</label>
                        <div class="form-group">
                            <div class="form-line">
                                <input type="date" id="fecha" name="fecha" class="form-control">
                            </div>
                        </div>
                        <br>
                        <button type="submit" class="btn btn-primary m-t-15 waves-effect">GUARDAR</button>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>
@endsection

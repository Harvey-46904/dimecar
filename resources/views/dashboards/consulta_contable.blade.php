
@extends('dashboards.index')
<script>
  $(document).ready(
       graficar()
    )
</script>
   
@section('registro_clientes')

    <section class="content">
        <div class="container-fluid ">

            <!-- Hover Zoom Effect -->
            <div class="block-header">
                <h1 class="text-dark text-center">{{ $vehiculi->nombre_vehiculo }}-{{ $vehiculi->placa }}</h1>
            </div>

        </div>
    </section>


    <section class="content">
        <div class="container-fluid">
            <div class="row clearfix">
                @if (\Session::has('error'))
                    <h6 class="text-dark bg-danger"> ERROR:{!! \Session::get('error') !!}</h6>
                @endif
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                        <form method="POST" action="{{ route('filtro_fecha', $vehiculi->id_vehiculo) }}" >
                        @csrf
                        <div class="row justify-content-center">
                                       
                                        <div class="col-md-3 ">
                                            <label for="nombre_vehiculo">Desde</label>
                                            <div class="form-group">
                                                <input class="form-control" type="date" id="d" name="desde">
                                            </div>
                                        </div>
                                        <div class="col-md-3 "> <label for="nombre_vehiculo">Hasta</label>
                                            <div class="form-group">
                                                <input class="form-control" type="date" id="h" name="hasta">
                                            </div>
                                        </div>
                                        <div class="col-md-2 text-center"> <br>
                                            <div class="form-group">
                                                <input class="btn btn-primary " type="submit" id="h" value="Filtrar">
                                            </div>
                                        </div>
                                     
                                    </div>

                                    </form>
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
                            <div class="row">
                                <div class="col-md-4">
                                    <img src="{{ url('/storage/vehiculo/', $vehiculi->foto_vehiculo) }}"
                                        class=" img-thumbnail" width="300px" height="300px">
                                </div>
                                
                               
                                <div class="col-md-8">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="info-box-4 hover-zoom-effect">
                                                <div class="icon">
                                                    
                                                </div>
                                                <div class="content">
                                                    <div class="text text-success">Ingresos</div>
                                                    <div class="number"> {{$valores[0]["ventrada"]}}</div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="info-box-4 hover-zoom-effect">
                                                <div class="icon">
                                                
                                                </div>
                                                <div class="content">
                                                    <div class="text text-danger">Egresos</div>
                                                    <div class="number">{{$valores[0]["vsalida"]}}</div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="info-box-4 hover-zoom-effect">
                                                <div class="icon">
                                                  
                                                </div>
                                                <div class="content">
                                                    <div class="text text-primary">Utilidad</div>
                                                    <div class="number">{{$valores[0]["utilidad"]}}</div>
                                                </div>
                                            </div>
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

<!--
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
                                Estadistica de {{ $vehiculi->nombre_vehiculo }}==={{ $vehiculi->placa }}
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
                            <div class="row">
                               <div class="col-md-6"> 
                               
    <canvas id="barChart" width="400" height="400" onload="graficar()"></canvas>
                                </div>
                               <div class="col-md-6">grafico 2</div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>-->
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
                                Libro contable de {{ $vehiculi->nombre_vehiculo }}==={{ $vehiculi->placa }}
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
                            <div class="row">
                                <div class="col-md-6">
                                    <h3 class="text-center">Entradas</h3>
                                <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th scope="col">Fecha</th>

                                            <th scope="col">Nombre</th>
                                            <th scope="col">Concepto</th>
                                            <th scope="col">valor</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($entradas as $entrada)
                                        <tr>
                                            <th scope="col">{{ date('Y-m-d', strtotime($entrada->fecha))}}</th>

                                            <th scope="col">{{$entrada->nombre_tipo_contable}}</th>
                                            <th scope="col">{{$entrada->conceptos}}</th>
                                            <th scope="col">{{$entrada->valor}}</th>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                                </div>
                                <div class="col-md-6">
                                <h3 class="text-center">Salidas</h3>
                                <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th scope="col">Fecha</th>

                                            <th scope="col">Nombre</th>
                                            <th scope="col">Concepto</th>
                                            <th scope="col">valor</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($salidas as $salida)
                                        <tr>
                                            <th scope="col">{{ date('Y-m-d', strtotime($salida->fecha))}}</th>
                                            
                                            <th scope="col">{{$salida->nombre_tipo_contable}}</th>
                                            <th scope="col">{{$salida->conceptos}}</th>
                                            <th scope="col">{{$salida->valor}}</th>
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
    </section>

 
@endsection

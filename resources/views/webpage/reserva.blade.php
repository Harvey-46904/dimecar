@extends('webpage.index')
@section('content')
<!-- Breadcromb Area Start -->

<main id="main">
    <section id="book-a-table" class="book-a-table">
      <div class="container " data-aos="fade-up">
        <div class="row pt-5">
            <div class="col-md-12"><h1>RESERVAS DISPONIBLES</h1></div>
        </div>
        <div class="section-title">
          <h2>Lista de vehículos</h2>
         
        </div>
        <div class="row justify-content-center mb-5">
            <div class="col-md-3 col-6 bg-light text-dark mx-1 mt-1"><h5>Lugar de entrega: {{$todo["lugar_entrega"]}}</h5></div>
            <div class="col-md-2 col-4 bg-light text-dark mx-1 mt-1"><h5>{{$todo["desdes"]}}</h5></div>
            <div class="col-md-3 col-6 bg-light text-dark mx-1 mt-1"><h5>Lugar de recogida: {{$todo["lugar_recogida"]}}</h5></div>
            <div class="col-md-2 col-4 bg-light text-dark mx-1 mt-1"><h5>{{$todo["hastas"]}}</h5></div>
         </div>
        <!--INICIO CICLO-->
        @foreach ($disponibles as $disponible)
        <div class="row py-4 px-4 justify-content-between sombrainterna mb-2">
          <div class="col-md-3 text-center">
            <img   class="" src="{{ url('/storage/vehiculo/', $disponible->foto_vehiculo) }}" width="100%">
            <br>
            {{number_format($disponible->precio_alquiler, 0)}} Dia
          </div>
          <div class="col-md-8">
            <div class="row">
                <div class="col-md-8 text-center bg-light text-dark">
                   <h2>{{$disponible->nombre_vehiculo}} </h2> 
                </div>
                <div class="col-md-4 text-center bg-secondary">
                    <?php 
                                $valor=$dia*$disponible->precio_alquiler; 
                                $valor=  number_format($valor, 0);
                                ?>
                  <h2><b>  ${{$valor}}</b></h2>
                </div>
            </div>
            <?php
            $palabra=$dia==1?"dia":"dias";
            ?>
            <div class="row py-4">
                <div class="col-md-12 text-center font-weight-light"><h5>Por {{$dia}} {{$palabra}} puedes disfrutar de la comodidad de manejar un {{$disponible->nombre_vehiculo}} ideal para salir con tu familia y tener una nueva aventura </h5></div>
            </div>
            <div class="row">
                <div class="col-md-2 col-2"><h5><i class="fas fa-door-closed"></i>4</h5></div>
                <div class="col-md-2 col-2"><h5><i class="fas fa-male"></i>{{$disponible->pasajeros}}</h5></div>
                <div class="col-md-4 col-5"><h5><i class="fas fa-cash-register"></i>{{$disponible->caja}}</h5></div>
                <div class="col-md-2 col-2"><h5><i class="fas fa-temperature-low"></i>si</h5></div>
                <div class="col-md-2 col-12 text-center "> <?php 
                    $fecha_prueba=strtotime($todo["desdes"]);
                    $desde=date('Y-m-d',$fecha_prueba);
                    $desde=$desde." ".$todo["hora_entrega"];
                
                    $fecha_prueba1=strtotime($todo["hastas"]);
                    $hasta=date('Y-m-d',$fecha_prueba1);
                    $hasta=$hasta." ".$todo["hora_recogida"];

                    //$date1 = new DateTime($desde);
                    //$date2 = new DateTime($hasta);
                    
                   
                    
                    ?>
                <button type="button" class="btn btn-danger " ><a class="text-light" href="{{ route('reserva_cliente',['data'=>$disponible->id_vehiculo,'fecha1'=>$desde,'fecha2'=>$hasta,'transporte'=>$transporte ])}}">Reservar Ahora</a></button></div></div>
            </div>
        </div>
        
        @endforeach
    </div>
       <!-- FIN CICLO -->
      </div>
    </section><!-- End Book A Table Section -->
  </main><!-- End #main -->

    
@endsection
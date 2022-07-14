@extends('webpage.index')
@section('content')
<!-- Breadcromb Area Start -->

    <!-- Breadcromb Area End -->
    <!-- Contact Area Start -->

    <?php 
        $clientes = Session::get('clientes'); 
        $vehiculo = Session::get('vehiculo'); 
        $reservas = Session::get('reservas'); 
       $nombre_completo= $clientes->nombres." ".$clientes->apellidos;
       $nombre_vehiculo=$vehiculo->nombre_vehiculo;
       $correo=$clientes->email;
       
     
    ?>
    <section class="gauto-contact-area section_70">
        <div class="container pt-5">
            
        <h2 class="text-secondary text-center">Información Importante</h2>
        <p class="lead text-light  text-justify">
            ¡HOLA!<br><br>
            <b class="text-secondary">{{$nombre_completo}} </b><br><br>
           gracias por reservar con <b class="text-secondary">DIMECARS</b> hemos enviado los detalles de la reserva al correo <b class="text-secondary">{{$correo}}</b>.
           El ultimo paso es validar tu reserva con uno de nuestros funcionarios y todo quedará en orden para el arrendamiento del vehículo <b class="text-secondary">{{$nombre_vehiculo}}</b>
        </p>
        <br>
        <div class="text-center">
            <input type="button" class="btn btn-success text-center" onclick="confirmar_reserva('{{$nombre_completo}}','{{$reservas}}')" value="Validar Reserva">
        </div>
       
        </div>
    </section><!-- Contact Area End -->
@endsection
<!DOCTYPE html>
<html lang="es">
<style>
    @page {
		margin-left: 0.7cm;

		margin-right: 0.7cm;
        margin-top: 0.5cm;
        margin-bottom: 0.8cm;
	}
     @font-face {
            font-family: "source_sans_proregular";           
            src: local("Source Sans Pro"), url("fonts/sourcesans/sourcesanspro-regular-webfont.ttf") format("truetype");
            font-weight: normal;
            font-style: normal;

        }        
        body{
            font-family: "source_sans_proregular", Calibri,Candara,Segoe,Segoe UI,Optima,Arial,sans-serif;            
        }
        .texto-justificado{
text-align: justify;
}
        table, th, td {
  border: 1px solid black;
  border-collapse: collapse;
}
img{
display:block;
margin:auto;
}
footer {
                position: fixed; 
                bottom: -60px; 
                left: 0px; 
                right: 0px;
                height: 50px; 

                /** Extra personal styles **/
                background-color: #BF252F;
                color: white;
                text-align: center;
                line-height: 35px;
            }
</style>
<head>
    <meta charset="utf-8">
    <title>Plantilla Contrato Dimecar</title>
</head>

<body>

   
    
   
    <div align="center">
        <img src="{{url('dash/images/Bcontrato.png')}}"
        alt="Logo" width="110%" height="200">
    </div>

    

    <div align="center">
        
        <p><b>
            CONTRATO DE ALQUILER No:</b> <u>{{$contratos->id}}</u> <br>
            <b>FECHA:<?php echo date("d-m-Y");?> <br>
            VEHICULO<br>
            {{$contratos->nombre_vehiculo}} || Marca: {{$contratos->marca}}  || Color: {{$contratos->color}}<br><br>
            ARRENDATARIO Y/O USUARIO<br>
            </b>
        </p>
        
        
    </div>
    <p>una vez que el ARRENDATARIO reciba el vehículo es responsable por el manejo y conservación del mismo.</p>
    <p class="texto-justificado">El ARRENDATARIO se obliga a no conducir el vehículo objeto de este contrato contraviniendo ninguna de las disposiciones contempladas en 
        el código de tránsito y policía vigentes.
        </p>
    <p class="texto-justificado">Está totalmente prohibido utilizar el vehículo en cualquier tipo de competencia pruebas y o cualquier tipo de enseñanzas o similares.</p>
    <p class="texto-justificado">El ARRENDATARIO es responsable de todas las consecuencias civiles y penales ante terceros que no cubra la póliza de seguros del vehículo.</p>
    <p class="texto-justificado">Después de regresar el vehículo en forma deﬁnitiva el ARRENDATARIO es responsable de todas las multas por cualquier causa que se ocasiones durante la vigencia de este contrato.</p>
    <p class="texto-justificado">el ARRENDATARIO debe avisar al arrendador de cualquier accidente de tránsito o similar que suceda con el vehículo y no aceptar pagos parciales o totales de daños ocurridos sin autorización del arrendador</p>
    <p class="texto-justificado">El ARRENDATARIO (persona jurídica) autoriza a la persona que recibe el vehículo motivo de este contrato a ﬁrmar este documento en su representación dando por aceptadas todas y cada una de las cláusulas aquí estipuladas.
    </p>
    <p class="texto-justificado">Las partes aquí contratantes maniﬁestan que este contrato presta merito ejecutivo en los términos del articulo 488 del código de procedimiento civil sin necesidad de requerimiento previo alguno.</p>
    <p class="texto-justificado">el ARRENDATARIO autoriza a dimecars cali a realizar cobro no presencial en la tarjeta de crédito.</p>
    <p class="texto-justificado">Está prohibido fumar dentro del vehículo; en caso de incumplir el ARRENDATARIO debe cancelar el valor de un día de renta más el costo de lavado interno del vehículo.</p>
    <p class="texto-justificado">El ARRENDATARIO se compromete a suministrar información del destino al cual se desplazará en el vehículo rentado el cual quedará estipulado en el presente contrato si el cliente cambia su destino debe informarlo previamente al número y se autoriza por parte de dimecars cali de lo contrario el ARRENDATARIO acepta el cobro adicional por kilometraje o costos adicionales.</p>
    <p class="texto-justificado">Dimecars cali se reserva el derecho de inmovilizar y retirar el vehículo rentado al ARRENDATARIO cuando lo estime conveniente y sin previo aviso y en el lugar donde se encuentre.</p>
    <p class="texto-justificado" >El ARRENDATARIO acepta el cobro no presencial en la tarjeta de crédito que respalda este contrato por infracciones de tránsito cometidas durante la permanencia de este contrato en un 100% del valor o los costos que se deriven del mismo.</p>
    <p class="texto-justificado">
        El ARRENDATARIO acepta el cobro no presencial en la tarjeta de crédito que respalda este contrato por deducibles que no están amparados por el seguro estipulados en este contrato.
        
        </p>
    <p class="texto-justificado">Prohibido fumar dentro del vehículo se sancionara con un día de renta</p>
    <p class="texto-justificado">En caso de accidente

       <br> 1.	Informar de inmediato a dimecars cali.
       <br> 2.	Solicitar la intervención de autoridades de circulación de tránsito.
       <br>3.	No mueva el vehículo y déjelo bajo de vida custodia.
       <br>4.	No realice convenio alguno ya que no tendrán validez ante dimecars cali.
        </p>
    
    <br>
    <div align=center>
        <table cellspacing="0" cellpadding="0" align="center" border="1" width="80%">
            <tr align=center>
                <td align=center>
                <img src="{{url('storage/firmas/'.$contratos->recibido_por)}}" width="100px" height="100px"/>
                    <b>_______________________</b>
                        <br>ARRENDATARIO Y/O Usuario
                        <br>No. C.C
                </td>
                

                <td align=center>
                <img src="{{url('storage/firmas/'.$contratos->entregado_por)}}" width="100px" height="100px"/>
                    
                    <b>_______________________</b>
                    <br>Arrendador
                    <br>Asesor Comercial
                </td>
            </tr>
          </table>
    </div>
    <br>
<p>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>



<br><br><br>


</p>
    <h2 align="center">INVENTARIO VEHÍCULO EN ALQUILER ANEXO AL CONTRATO No. </h2>
    <table  cellspacing="0" cellpadding="0" align="center" border="1" width="50%">
        <thead>
            <tr>
              <th class="tg-0pky" colspan="4"> <img src="{{url('dash/images/logo.png')}}"
        alt="Logo" width="40%" height="80"></th>
              <th class="tg-0pky" colspan="4">INVENTARIO VEHICULO-CONTRATO No. : {{$contratos->id}}
                &nbsp;&nbsp;&nbsp;</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td class="tg-0pky" colspan="3">Ciudad {{$contratos->destino}}</td>
              <td class="tg-0pky" colspan="5"><?php echo date("d-m-Y");?> </td>
            </tr>
            <tr>
              <td class="tg-c3ow" colspan="8" align="center">DATOS ARRENDATARIO</td>
            </tr>
            <tr>
              <td class="tg-0pky">Nombre:  </td>
              <td class="tg-0pky" colspan="7">{{$contratos->nombres}} {{$contratos->apellidos}}</td>
            </tr>
            <tr>
              <td class="tg-0pky">Tipo Doc:</td>
              <td class="tg-0pky">CC</td>
              <td class="tg-0pky">CE</td>
              <td class="tg-0pky">PA</td>
              <td class="tg-0pky">CD</td>
              <td class="tg-0pky">No Doc: {{$contratos->numero_documento}}</td>
              <td class="tg-0pky">Lugar Exp:</td>
              <td class="tg-0pky">Fecha Exp:</td>
            </tr>
            <tr>
              <td class="tg-0pky">Licencia No:</td>
              <td class="tg-0pky" colspan="4">0</td>
              <td class="tg-0pky">Fecha Vencimineto</td>
              <td class="tg-0pky" colspan="2">Lugar Exp</td>
            </tr>
            <tr>
              <td class="tg-0pky">Direccion</td>
              <td class="tg-0pky" colspan="2">{{$contratos->direccion}}</td>
              <td class="tg-0pky" colspan="2">Tel:{{$contratos->telefono}}
            </td>
              <td class="tg-0pky" colspan="3">Correo:{{$contratos->email}}
            </td>
            </tr>
            <tr>
              <td class="tg-0pky">Contacto</td>
              <td class="tg-0pky" colspan="4"></td>
              <td class="tg-0pky">Parentesco:Arrendatario</td>
              <td class="tg-0pky" colspan="2">Tel:{{$contratos->telefono}}</td>
            </tr>
            <tr>
              <td class="tg-c3ow" colspan="8" align="center">CONDUCTOR ADICIONAL&nbsp;&nbsp;</td>
            </tr>
            <tr>
              <td class="tg-0pky" colspan="3">NOMBRE COMPLETO</td>
              <td class="tg-0pky" colspan="2">IDENTIFICACION</td>
              <td class="tg-0pky">LICENCIA NO:</td>
              <td class="tg-0pky" colspan="2">FECHA VENCIMIENTO</td>
            </tr>
            <tr>
              <td class="tg-0pky" colspan="3">{{$contratos->conductor_adicional}}</td>
              <td class="tg-0pky" colspan="2">0</td>
              <td class="tg-0pky">0</td>
              <td class="tg-0pky" colspan="2">0</td>
            </tr>
            <tr>
              <td class="tg-0pky" colspan="3">0</td>
              <td class="tg-0pky" colspan="2">0</td>
              <td class="tg-0pky">0</td>
              <td class="tg-0pky" colspan="2">0</td>
            </tr>
            <tr>
              <td class="tg-c3ow" colspan="8" align="center">INVENTARIO VEHICULO</td>
            </tr>
            <tr>
              <td class="tg-0pky" colspan="2">CLASE</td>
              <td class="tg-0pky" colspan="2">MARCA</td>
              <td class="tg-0pky">TIPO</td>
              <td class="tg-0pky">MODELO</td>
              <td class="tg-0pky">PLACAS</td>
              <td class="tg-0pky">COLOR</td>
            </tr>
            <tr>
              <td class="tg-0pky" colspan="2">{{$contratos->nombre_vehiculo}}</td>
              <td class="tg-0pky" colspan="2">{{$contratos->nombre_vehiculo}}</td>
              <td class="tg-0pky">{{$contratos->caja}}</td>
              <td class="tg-0pky">{{$contratos->modelo}}</td>
              <td class="tg-0pky">{{$contratos->placa}}</td>
              <td class="tg-0pky">{{$contratos->color}}</td>
            </tr>
            <tr>
              <td class="tg-0pky">DOCUMENTOS AL DÍA</td>
              <td class="tg-0pky">{{$finalizado["documento_dia"]}}</td>
              <td class="tg-0pky">LUCES EXTERIORES</td>
              <td class="tg-0pky">{{$finalizado["Luces_exteriores"]}}</td>
              <td class="tg-0pky" colspan="4" rowspan="7"> <img src="{{url('storage/firmas/'.$contratos->inventario_entrada)}}" width="" height=""/></td>
            </tr>
            <tr>
              <td class="tg-0pky">LUZ INTERIOR</td>
              <td class="tg-0pky">{{$finalizado["Luz_interior"]}}</td>
              <td class="tg-0pky">LIMPIAPARABRISAS</td>
              <td class="tg-0pky">{{$finalizado["Limpia_brisas"]}}</td>
            </tr>
            <tr>
              <td class="tg-0pky">PITO</td>
              <td class="tg-0pky">{{$finalizado["Pito"]}}</td>
              <td class="tg-0pky">ESPEJOS INTERNOS Y EXTERNOS</td>
              <td class="tg-0pky">{{$finalizado["Espejos_externos_internos"]}}</td>
            </tr>
            <tr>
              <td class="tg-0pky">RADIO</td>
              <td class="tg-0pky">{{$finalizado["Radio"]}}</td>
              <td class="tg-0pky">LLANTA DE REPUESTO</td>
              <td class="tg-0pky">{{$finalizado["Llanta_repuesto"]}}</td>
            </tr>
            <tr>
              <td class="tg-0pky">GATO</td>
              <td class="tg-0pky">{{$finalizado["Gato"]}}</td>
              <td class="tg-0pky">CRUCETA</td>
              <td class="tg-0pky">{{$finalizado["Cruceta"]}}</td>
            </tr>
            <tr>
              <td class="tg-0pky">EQUIPO DE CARRETERA</td>
              <td class="tg-0pky">{{$finalizado["Equipo_carretera"]}}</td>
              <td class="tg-0pky">EMBLEMAS</td>
              <td class="tg-0pky">{{$finalizado["Emblemas"]}}</td>
            </tr>
            <tr>
              <td class="tg-0pky">ANTENA</td>
              <td class="tg-0pky">{{$finalizado["Antena"]}}</td>
              <td class="tg-0pky">COPAS</td>
              <td class="tg-0pky">{{$finalizado["Copas"]}}</td>
            </tr>
            <tr>
              <td class="tg-c3ow" colspan="4" align="center">INICIO SERVICIO</td>
              <td class="tg-c3ow" colspan="4" align="center">FINALIZACION SERVICIO</td>
            </tr>
            <tr>
              <td class="tg-0pky" colspan="2">FECHA {{ date('d-m-Y',
                strtotime($contratos->fecha_salida))}}</td>
              <td class="tg-0pky">HORA</td>
              <td class="tg-0pky">{{$contratos->hora_salida}}</td>
              <td class="tg-0pky" colspan="2">FECHA {{ date('d-m-Y',
                strtotime($contratos->fecha_entrada))}}
                </td>
              <td class="tg-0pky">HORA</td>
              <td class="tg-0pky">0</td>
            </tr>
            <tr>
              <td class="tg-0pky" colspan="2">KM {{$contratos->km_salida}}
                </td>
              <td class="tg-0pky">NIVEL COMB</td>
              <td class="tg-0pky">{{$contratos->combustible_salida}}
                </td>
              <td class="tg-0pky" colspan="2">KM {{$contratos->km_entrada}}
                </td>
              <td class="tg-0pky">NIVEL COMB</td>
              <td class="tg-0pky">{{$contratos->combustible_salida}}</td>
            </tr>
            <tr>
              <td class="tg-0pky" colspan="2">ENTREGA VEHICULO</td>
              <td class="tg-0pky" colspan="2">RECIBE VEHICULO</td>
              <td class="tg-0pky" colspan="2">ENTREGA VEHICULO</td>
              <td class="tg-0pky" colspan="2">RECIBE VEHICULO</td>
            </tr>
            <tr>
              <td class="tg-0pky" colspan="2">
                <img src="{{url('storage/firmas/'.$contratos->entregado_por)}}" width="" height=""/>
              </td>
              <td class="tg-0pky" colspan="2">
                <img src="{{url('storage/firmas/'.$contratos->entregado_por)}}" width="" height=""/>
              </td>
              <td class="tg-0pky" colspan="2">
                <img src="{{url('storage/firmas/'.$contratos->entregado_por)}}" width="" height=""/>
              </td>
              <td class="tg-0pky" colspan="2">
                <img src="{{url('storage/firmas/'.$contratos->entregado_por)}}" width="" height=""/>
              </td>
            </tr>
            <tr>
              <td class="tg-c3ow" colspan="8" align="center">SEGUROS</td>
            </tr>
            <tr>
              <td class="tg-c3ow" colspan="4" align="center">BASICO (LDW) $0</td>
              <td class="tg-c3ow" colspan="4" align="center">FULL COVER(LDW)$_________(OPCIONAL)</td>
            </tr>
            <tr>
              <td class="tg-0lax" colspan="4">El seguro básico tiene una cobertura del 80% sobre el valor comercial del vehiculo, quedando a su cargo el 20% con un minimo deducible de $___________, el seguro no cubre trato inadecuado al
                vehiculo, robo de accesorios ni tiempo de inutilidad por mal uso.<br>
            ACEPTO:___________________ </td>
              <td class="tg-0lax" colspan="4">El seguro basico tiene una cobertura TOTAL del 100% por robo colision o choque , el seguro no cubre daños al vehiculo por trato inadecuado ni tiempo de inutilidad por mal uso. 
             <br> el valor diario es de :$___________________<br>

            ACEPTO:___________________ </td>
            </tr>
            <tr>
              <td class="tg-baqh" colspan="8" align="center">TARJETA DE CREDITO Y/O AUTORIZACION</td>
            </tr>
            <tr>
              <td class="tg-0lax" colspan="2">CLASE</td>
              <td class="tg-0lax" colspan="2">MARCA</td>
              <td class="tg-0lax">TIPO</td>
              <td class="tg-0lax">MODELO</td>
              <td class="tg-0lax">PLACAS</td>
              <td class="tg-0lax">COLOR</td>
            </tr>
            <tr>
              <td class="tg-0lax" colspan="8">Autorizo a la empresa DIMERCARS CALI CON NIT 1110451193-8 ubicada en la ciudad de Cali, para realizar el cobro no presencial en mi tarjeta de crédito que a continuación se describe SIN PREVIO AVISO, por conceptos de deducibles no cubiertos por el seguro segun sea el caso y por compaerndos emitidos durante la duracion de este contorato en todo el Territorio Nacional</td>
            </tr>
            <tr>
              <td class="tg-0lax">FRANQUICIA</td>
              <td class="tg-0lax" colspan="3">0</td>
              <td class="tg-0lax">NO TAREJTA</td>
              <td class="tg-0lax" colspan="3">0</td>
            </tr>
            <tr>
              <td class="tg-0lax">NOMBRE EN TC</td>
              <td class="tg-0lax" colspan="7">0</td>
            </tr>
            <tr>
              <td class="tg-0lax">SEGURIDAD</td>
              <td class="tg-0lax" colspan="3">0</td>
              <td class="tg-0lax">VENCE</td>
              <td class="tg-0lax">0</td>
              <td class="tg-0lax">BANCO</td>
              <td class="tg-0lax">0</td>
            </tr>
            <tr>
              <td class="tg-0lax">VALOR</td>
              <td class="tg-0lax" colspan="3">0</td>
              <td class="tg-0lax">AUTORIZACION</td>
              <td class="tg-0lax">0</td>
              <td class="tg-0lax">OPERADOR</td>
              <td class="tg-0lax">0</td>
            </tr>
            <tr>
              <td class="tg-0lax">ACEPTO</td>
              <td class="tg-0lax" colspan="7"></td>
            </tr>
            <tr>
              <td class="tg-0lax">FIRMA</td>
              <td class="tg-0lax" colspan="2"> <img src="{{url('storage/firmas/'.$contratos->entregado_por)}}" width="" height=""/></td>
              <td class="tg-0lax">NOMBRE</td>
              <td class="tg-0lax">{{$contratos->nombres}} {{$contratos->apellidos}}</td>
              <td class="tg-0lax">DOCUMENTO</td>
              <td class="tg-0lax" colspan="2">	{{$contratos->numero_documento}} </td>
            </tr>
            <tr>
              <td class="tg-0lax" colspan="8" align="center">AVENIDA 2 BN 28 N - 21 B/ SAN VICENTE CONTACTOS: 310 545 6455 www.dimecarscali.com
                Instagram: Dimecars Cali Facebook: Dimecars Alquiler de Vehiculos Correo: dimecarscali@gmail.com</td>
            </tr>
          </tbody>
    </table>

    <br><br>
<br>
  

  


        <table cellspacing="0" cellpadding="0" align="center" border="1" width="80%">
            <tr align=center>
                <td>
                    ENTREGADO POR<br><br>
                   <img src="{{url('storage/firmas/'.$contratos->entregado_por)}}" width="" height=""/>
                  <b>_______________________</b>
                       OBSERVACIONES:<br>
                        {{$contratos->observaciones_entregado}}
                        <br><br><br>
                </td>

                <td>
                    RECIBIDO POR
                    <br><br>
                    <img src="{{url('storage/firmas/'.$contratos->recibido_por)}}" width="" height=""/><b>_______________________</b>
                        OBSERVACIONES:
                        <br>
                        {{$contratos->observaciones_recibido}}
                        <br><br><br>
                </td>
            </tr>
        </table>
    </div>


    <div align=center>
        <br>
        <p style="color:#949493"><b>ENTRADA</b></p>
        
        <table cellspacing="0" cellpadding="0" align="center" border="1" width="80%">
            <tr align=center>
                <td>
                    ENTREGADO POR<br>
                    <img src="{{url('storage/firmas/'.$contratos->entregado_por_entrada)}}" width="" height=""/>
                   <b>_______________________</b>
                        <br>OBSERVACIONES:<br>
                        {{$contratos->observaciones_entregado_entrada}}
                        <br><br><br>
                </td>

                <td>
                    RECIBIDO POR<br>
                    <img src="{{url('storage/firmas/'.$contratos->recibido_por_entrada)}}" width="" height=""/>
                   <b>_______________________</b>
                        <br>OBSERVACIONES:<br>
                        {{$contratos->observaciones_recibido_entrada}}
                        <br><br><br>
                </td>
            </tr>
          </table>
    </div>
    
    

</body>

</html>
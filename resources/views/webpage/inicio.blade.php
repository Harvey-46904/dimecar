@extends('webpage.index')
@section('content')

  <style>
 option{
  height: 50px;
  overflow: auto;
}
</style>
<section id="hero" class="d-flex align-items-center">
    <div class="container position-relative text-center text-lg-start" data-aos="zoom-in" data-aos-delay="100">
      <div class="row">
        <div class="col-lg-8">
          <h1>Bienvenidos a <span>DIMECARS<br> Rent A Car</span></h1>
          <h2>Siempre habrá un nuevo lugar por RECORRER , Estamos a tu servicio</h2>

          <div class="btns">
            <a href="#menu" class="btn-menu animated fadeInUp scrollto mb-1">LISTA DE CARROS</a>
            <a href="#book-a-table" class="btn-book animated fadeInUp scrollto">RESERVAR AHORA</a>
          </div>
        </div>
        <div class="col-lg-4 d-flex align-items-center justify-content-center position-relative" data-aos="zoom-in"
          data-aos-delay="200">
          <a href="https://video.xx.fbcdn.net/v/t42.9040-2/120525262_3110252832434437_2502251502089696628_n.mp4?_nc_cat=108&ccb=1-7&_nc_sid=985c63&efg=eyJ2ZW5jb2RlX3RhZyI6InN2ZV9zZCJ9&_nc_eui2=AeE5mZ47C-k_L8WDlJYPsU-cPSGJ3dwJm3w9IYnd3AmbfELLr0Ksw-wDF0t7Nvxlp0QoudbFRqtOHIilyoiqWqL5&_nc_ohc=4VShAXhfXMAAX_oDvfr&_nc_oc=AQnblPNszDhGeJawBJ1juGjm31Rb53rcTbiFTHR-aybGCIj35yAT3xa8cI42K14VTIk&_nc_rml=0&_nc_ht=video.fclo7-1.fna&oh=00_AT_gNsNNOZfpya96UGJKylzHa8O6kPqn7XzP75Tk3Zuk6w&oe=6297F7FE" class="glightbox play-btn"></a>
        </div>

      </div>
    </div>
  </section><!-- End Hero -->
<main id="main">
<section id="book-a-table" class="book-a-table">
    <div class="container " data-aos="fade-up">

      <div class="section-title">
        <h2>RESERVACIÓN</h2>
        <p>RESERVE AHORA</p>
      </div>

      <form action="{{ route('post_reserva_usuario') }}" method="POST" role="" class="php-email-form" data-aos="fade-up"
        data-aos-delay="100"  id="consulta_carros">
        @csrf
        <div class="row  justify-content-center">
          <div class="col-lg-4 col-md-6 form-group ">
            <label for="exampleFormControlSelect1">RECOGER</label>
            <select class="form-control" id="lugar-entrega" name="lugar_entrega">
              <option disabled selected>Lugar de entrega</option>
              <option value="Pasto">Pasto</option>
              <option value="Aeropuerto-Pasto">Pasto - Aeropuerto Antonio Nariño</option>
              <option value="Aeropuerto-Ipiales">Ipiales - Aeropuerto San Luis</option>
            </select>
          </div>
          <div class="col-lg-4 col-md-6 form-group mt-3 mt-md-0">
            <label for="exampleFormControlSelect1">FECHA DE RECOGIDA</label>
            <input class="form-control" type="date" id="desdes" name="desdes" min="2022-05-26">
          </div>
          <div class="col-lg-4 col-md-6 form-group mt-3 mt-md-0">
            <label for="exampleFormControlSelect1">HORA DE RECOGIDA</label><br>
            <input type="time" id="hora_entrega" name="hora_entrega" min="09:00" max="18:00" required>
          </div>
          <div class="col-lg-4 col-md-6 form-group mt-3">
            <label for="exampleFormControlSelect1">DEVOLUCIÓN</label>
            <select class="form-control" id="lugar-recogida" name="lugar_recogida">>
              <option disabled selected>Lugar de recogida</option>
                  <option value="Pasto">Pasto</option>
                  <option value="Aeropuerto-Pasto">Pasto - Aeropuerto Antonio Nariño</option>
                  <option value="Aeropuerto-Ipiales">Ipiales - Aeropuerto San Luis</option>
            </select>
          </div>
          <div class="col-lg-4 col-md-6 form-group mt-3">
            <label for="exampleFormControlSelect1">LUGAR DE DEVOLUCIÓN</label>
            <input class="form-control" type="date" id="hastas" name="hastas" min="2022-05-26">
          </div>
          <div class="col-lg-4 col-md-6 form-group mt-3">
            <label for="exampleFormControlSelect1">HORA DE DEVOLUCIÓN</label><br>
            <input type="time" id="hora_recogida" name="hora_recogida" min="09:00" max="18:00" required>
          </div>
        </div>
       
        <div class="text-center"><button type="submit">CONSULTAR RESERVACIÓN</button></div>
      </form>

    </div>
  </section><!-- End Book A Table Section -->
  <section id="events" class="events">
    <div class="container" data-aos="fade-up">

      <div class="section-title">
        <h2>ALQUILER DE AUTOS EN CALI</h2>
        <p>RESERVE AHORA Y OBTENGA LA MEJOR OFERTA</p>
      </div>

      <div class="events-slider swiper-container" data-aos="fade-up" data-aos-delay="100">
        <div class="swiper-wrapper">

          <div class="swiper-slide">
            <div class="row event-item justify-content-center">
              <div class="col-lg-2 pt-4 pt-lg-0 content">
                <h2>KIA RIO</h2>
                <div class="price">
                  <p><span>$220.000/dia</span></p>
                </div>
                <p class="fst-italic">
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore
                  et dolore
                  magna aliqua.
                </p>
                <p>
                  <a href="#book-a-table" class="book-a-table-btn scrollto d-none d-lg-flex">RESERVAR AHORA</a>
                </p>
              </div>
              <div class="col-lg-6">
                <img src="{!! asset('webpagedimecar/assets/img/car.png') !!}" class="img-fluid" alt="">
              </div>
              <div class="col-lg-3 pt-3 pt-lg-0 content">
                <div class="row">
                  <p> <i class="bi bi-geo-alt"></i><b> PUERTAS:</b> 4</p>
                  <p> <i class="bi bi-geo-alt"></i><b> PASAJEROS:</b> 5</p>
                  <p> <i class="bi bi-geo-alt"></i><b> EQUIPAJE:</b> 2 MALETAS</p>
                  <p> <i class="bi bi-geo-alt"></i><b> AIRE ACONDICIONADO:</b> SI</p>
                  <p> <i class="bi bi-geo-alt"></i><b> EDAD MÍNIMA:</b> dfasdkj</p>
                  <p> <i class="bi bi-geo-alt"></i><b> TRANSMISIÓN:</b> 23</p>
                  <p> <i class="bi bi-geo-alt"></i><b> TIPO DE COMBUSTIBLE:</b> GASOLINA</p>

                </div>

              </div>
            </div>
          </div><!-- End testimonial item -->


        </div>
        <div class="swiper-pagination"></div>
      </div>

    </div>
  </section><!-- End Events Section -->
  <!-- ======= About Section ======= -->
  <section id="about" class="about">
    <div class="container" data-aos="fade-up">

      <div class="row">
        <div class="col-lg-6 order-1 order-lg-2" data-aos="zoom-in" data-aos-delay="100">
          <div class="about-img">
            <img src="{!! asset('webpagedimecar/assets/img/about.jpg') !!}" alt="">
          </div>
        </div>
        <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content">
          <h3>Voluptatem dignissimos provident quasi corporis voluptates sit assumenda.</h3>
          <p class="fst-italic">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
            dolore
            magna aliqua.
          </p>
          <ul>
            <li><i class="bi bi-check-circle"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat.</li>
            <li><i class="bi bi-check-circle"></i> Duis aute irure dolor in reprehenderit in voluptate velit.</li>
            <li><i class="bi bi-check-circle"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute
              irure dolor in reprehenderit in voluptate trideta storacalaperda mastiro dolore eu fugiat nulla
              pariatur.</li>
          </ul>
          <p>
            Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in
            voluptate
            velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
            culpa qui officia deserunt mollit anim id est laborum
          </p>
        </div>
      </div>

    </div>
  </section><!-- End About Section -->
  <!-- ======= Events Section ======= -->
  <!-- ======= Book A Table Section ======= -->
  <!-- ======= Gallery Section ======= -->
  <section id="gallery" class="gallery">

    <div class="container" data-aos="fade-up">
      <div class="section-title">
        <h2>Galeria</h2>
        <p>NUESTROS RECUERDOS</p>
      </div>
    </div>

    <div class="container-fluid" data-aos="fade-up" data-aos-delay="100">

      <div class="row g-0">

        <div class="col-lg-3 col-md-4">
          <div class="gallery-item">
            <a href="{!! asset('webpagedimecar/assets/img/gallery/gallery-1.jpg') !!}" class="gallery-lightbox" data-gall="gallery-item">
              <img src="assets/img/gallery/gallery-1.jpg" alt="" class="img-fluid">
            </a>
          </div>
        </div>

        <div class="col-lg-3 col-md-4">
          <div class="gallery-item">
            <a href="{!! asset('webpagedimecar/assets/img/gallery/gallery-2.jpg') !!}" class="gallery-lightbox" data-gall="gallery-item">
              <img src="assets/img/gallery/gallery-2.jpg" alt="" class="img-fluid">
            </a>
          </div>
        </div>

        <div class="col-lg-3 col-md-4">
          <div class="gallery-item">
            <a href="{!! asset('webpagedimecar/assets/img/gallery/gallery-3.jpg') !!}" class="gallery-lightbox" data-gall="gallery-item">
              <img src="assets/img/gallery/gallery-3.jpg" alt="" class="img-fluid">
            </a>
          </div>
        </div>

        <div class="col-lg-3 col-md-4">
          <div class="gallery-item">
            <a href="{!! asset('webpagedimecar/assets/img/gallery/gallery-4.jpg') !!}" class="gallery-lightbox" data-gall="gallery-item">
              <img src="assets/img/gallery/gallery-4.jpg" alt="" class="img-fluid">
            </a>
          </div>
        </div>

        <div class="col-lg-3 col-md-4">
          <div class="gallery-item">
            <a href="{!! asset('webpagedimecar/assets/img/gallery/gallery-5.jpg') !!}" class="gallery-lightbox" data-gall="gallery-item">
              <img src="assets/img/gallery/gallery-5.jpg" alt="" class="img-fluid">
            </a>
          </div>
        </div>

        <div class="col-lg-3 col-md-4">
          <div class="gallery-item">
            <a href="{!! asset('webpagedimecar/assets/img/gallery/gallery-6.jpg') !!}" class="gallery-lightbox" data-gall="gallery-item">
              <img src="assets/img/gallery/gallery-6.jpg" alt="" class="img-fluid">
            </a>
          </div>
        </div>

        <div class="col-lg-3 col-md-4">
          <div class="gallery-item">
            <a href="{!! asset('webpagedimecar/assets/img/gallery/gallery-7.jpg') !!}" class="gallery-lightbox" data-gall="gallery-item">
              <img src="assets/img/gallery/gallery-7.jpg" alt="" class="img-fluid">
            </a>
          </div>
        </div>

        <div class="col-lg-3 col-md-4">
          <div class="gallery-item">
            <a href="{!! asset('webpagedimecar/assets/img/gallery/gallery-8.jpg') !!}" class="gallery-lightbox" data-gall="gallery-item">
              <img src="assets/img/gallery/gallery-8.jpg" alt="" class="img-fluid">
            </a>
          </div>
        </div>

      </div>

    </div>
  </section><!-- End Gallery Section -->
  <!-- ======= Why Us Section ======= -->
  <section id="why-us" class="why-us">
    <div class="container" data-aos="fade-up">

      <div class="section-title">
        <h2>CONTACTOS</h2>
        <p>Contactanos facilmente</p>
      </div>

      <div class="row">



        <div class="col-lg-3">
          <div class="box" data-aos="zoom-in" data-aos-delay="100">
            <span> <i class="bi bi-geo-alt"></i></span>
            <h4> Localización:</h4>
            <p>Av 2BN #28N-21 Cali, Colombia</p>
          </div>
        </div>

        <div class="col-lg-3 mt-3 mt-lg-0">
          <div class="box" data-aos="zoom-in" data-aos-delay="200">
            <span><i class="bi bi-clock"></i></span>
            <h4>Horario:</h4>
            <p> Lunes-Viernes:
              09:00AM - 17:00PM</p>
          </div>
        </div>

        <div class="col-lg-3 mt-3 mt-lg-0">
          <div class="box" data-aos="zoom-in" data-aos-delay="300">
            <span><i class="bi bi-envelope"></i></span>
            <h4> Correo:</h4>
            <p>dimecarscali@gmail.com</p>
          </div>
        </div>

        <div class="col-lg-3 mt-3 mt-lg-0">
          <div class="box" data-aos="zoom-in" data-aos-delay="300">
            <span><i class="bi bi-phone"></i></span>
            <h4> Celular:</h4>
            <p>+57 310 545 6455</p>
          </div>
        </div>
      </div>

    </div>
  </section><!-- End Why Us Section -->
  <!-- ======= Contact Section ======= -->
  <section id="contact" class="contact">




    <div class="container" data-aos="fade-up">

      <div class="row mt-5">

        <div class="col-lg-6">
          <div data-aos="fade-up">
            <iframe style="border:0; width: 100%; height: 350px;"
              src="https://maps.google.com/maps?width=100%25&amp;height=600&amp;hl=es&amp;q=Fatima,%20Cali,%20Valle%20del%20Cauca+(Mi%20nombre%20de%20egocios)&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"
              frameborder="0" allowfullscreen></iframe>
          </div>

        </div>

        <div class="col-lg-6 mt-5 mt-lg-0">

          <form action="forms/contact.php" method="post" role="form" class="php-email-form">
            <div class="row">
              <div class="col-md-6 form-group">
                <input type="text" name="name" class="form-control" id="name" placeholder="Nombre" required>
              </div>
              <div class="col-md-6 form-group mt-3 mt-md-0">
                <input type="email" class="form-control" name="email" id="email" placeholder="Correo" required>
              </div>
            </div>
            <div class="form-group mt-3">
              <input type="text" class="form-control" name="subject" id="subject" placeholder="Asunto" required>
            </div>
            <div class="form-group mt-3">
              <textarea class="form-control" name="message" rows="8" placeholder="Mensaje" required></textarea>
            </div>
            <div class="my-3">
              <div class="loading">Loading</div>
              <div class="error-message"></div>
              <div class="sent-message">Your message has been sent. Thank you!</div>
            </div>
            <div class="text-center"><button type="submit">Enviar Mensaje</button></div>
          </form>

        </div>

      </div>

    </div>
  </section><!-- End Contact Section -->

</div>
@endsection
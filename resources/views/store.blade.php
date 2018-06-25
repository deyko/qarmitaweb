<!DOCTYPE html>
<html lang="en">

  @include('layouts.header')

  <body>

    @include('layouts.navbar')

    <section class="page-section cta">
      <div class="container">
        <div class="row">
          <div class="col-xl-9 mx-auto">
            <div class="cta-inner text-center rounded">
              <h2 class="section-heading mb-5">
                <span class="section-heading-upper">Ven a visitarnos</span>
                <span class="section-heading-lower">Horario</span>
              </h2>
              <ul class="list-unstyled list-hours mb-5 text-left mx-auto">
                <li class="list-unstyled-item list-hours-item d-flex">
                  Lunes
                  <span class="ml-auto">9:00 - 13:00 / 16:00 - 21:00</span>
                </li>
                <li class="list-unstyled-item list-hours-item d-flex">
                  Martes
                  <span class="ml-auto">Cerrado, especiando especias</span>
                </li>
                <li class="list-unstyled-item list-hours-item d-flex">
                  Miercoles
                  <span class="ml-auto">9:00 - 13:00 / 16:00 - 21:00</span>
                </li>
                <li class="list-unstyled-item list-hours-item d-flex">
                  Jueves
                  <span class="ml-auto">9:00 - 13:00 / 16:00 - 23:00</span>
                </li>
                <li class="list-unstyled-item list-hours-item d-flex">
                  Viernes
                  <span class="ml-auto">9:00 - 13:00 / 16:00 - 23:00</span>
                </li>
                <li class="list-unstyled-item list-hours-item d-flex">
                  Sábado
                  <span class="ml-auto">10:00 - 13:00 / 16:00 - 21:00</span>
                </li>
                <li class="list-unstyled-item list-hours-item d-flex">
                  Domingo
                  <span class="ml-auto">10:00 - 13:00 / 16:00 - 21:00</span>
                </li>
              </ul>
<!--
              <h2 class="section-heading mb-5">
                <span class="section-heading-upper">*</span>
              </h2>
            -->
              <p class="address mb-5">
                <em>
                  <strong>Calle Águila, 20</strong>
                  <br>
                  Granada, España
                </em>
              </p>
              <p class="mb-0">
                <small>
                  <em>Contacto:</em>
                </small>
                <br>
                +34 958 07 34 22
                <br>

                <small>
                  <em> Correo: </em>
                </small>
                  <br>
                  laqarmita@gmail.com 
              </p>

            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="page-section about-heading">
      <div class="container">
        <img class="img-fluid rounded about-heading-img mb-3 mb-lg-0" src="img/lol5.jpg" alt="">
        <div class="about-heading-content">
          <div class="row">
            <div class="col-xl-9 col-lg-10 mx-auto">
              <div class="bg-faded rounded p-5">
                <h2 class="section-heading mb-4">
                  <span class="section-heading-upper">En un callejón, con una pequeña luz.</span>
                  <span class="section-heading-lower">Donde estamos</span>
                </h2>

                  <p><center><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3179.148384372051!2d-3.604704085040887!3d37.17294447987351!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd71fc960b01b68f%3A0x6415c216ec02b33c!2sLa+Qarmita!5e0!3m2!1ses!2ses!4v1528728175838" width="600" height="450" frameborder="0" style="border:2" allowfullscreen></iframe>
                  </p></center>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    @include('layouts.footer')

  </body>

  <!-- La horita -->
  <script>
    $('.list-hours li').eq(new Date().getDay()-1).addClass('today');
    
  </script>

</html>

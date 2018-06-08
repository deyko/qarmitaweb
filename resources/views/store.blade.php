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
                  <span class="ml-auto">10:00 - 13:00 / 17:00 - 21:00</span>
                </li>
                <li class="list-unstyled-item list-hours-item d-flex">
                  Martes
                  <span class="ml-auto">Cerrado</span>
                </li>
                <li class="list-unstyled-item list-hours-item d-flex">
                  Miercoles
                  <span class="ml-auto">10:00 - 13:00 / 17:00 - 21:00</span>
                </li>
                <li class="list-unstyled-item list-hours-item d-flex">
                  Jueves
                  <span class="ml-auto">10:00 - 13:00 / 17:00 - 23:00</span>
                </li>
                <li class="list-unstyled-item list-hours-item d-flex">
                  Viernes
                  <span class="ml-auto">10:00 - 13:00 / 17:00 - 23:00</span>
                </li>
                <li class="list-unstyled-item list-hours-item d-flex">
                  Sábado
                  <span class="ml-auto">16:00 - 23:00</span>
                </li>
                <li class="list-unstyled-item list-hours-item d-flex">
                  Domingo
                  <span class="ml-auto">16:00 - 23:00</span>
                </li>
              </ul>

              <h2 class="section-heading mb-5">
                <span class="section-heading-upper">*Sábados y Domingos por la mañana cerrado</span>
              </h2>

              <p class="address mb-5">
                <em>
                  <strong>Calle Aguila, 20</strong>
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
        <img class="img-fluid rounded about-heading-img mb-3 mb-lg-0" src="img/about.jpg" alt="">
        <div class="about-heading-content">
          <div class="row">
            <div class="col-xl-9 col-lg-10 mx-auto">
              <div class="bg-faded rounded p-5">
                <h2 class="section-heading mb-4">
                  <span class="section-heading-upper">Strong Coffee, Strong Roots</span>
                  <span class="section-heading-lower">About Our Cafe</span>
                </h2>
                <p>Founded in 1987 by the Hernandez brothers, our establishment has been serving up rich coffee sourced from artisan farmers in various regions of South and Central America. We are dedicated to travelling the world, finding the best coffee, and bringing back to you here in our cafe.</p>
                <p class="mb-0">We guarantee that you will fall in
                  <em>lust</em>
                  with our decadent blends the moment you walk inside until you finish your last sip. Join us for your daily routine, an outing with friends, or simply just to enjoy some alone time.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    @include('layouts.footer')

  </body>

  <!-- Script to highlight the active date in the hours list -->
  <script>
    $('.list-hours li').eq(new Date().getDay()).addClass('today');
  </script>

</html>

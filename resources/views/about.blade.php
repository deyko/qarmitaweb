<!DOCTYPE html>
<html lang="en">

  @include('layouts.header')

  <body>

    @include('layouts.navbar')

    <section class="page-section about-heading">
      <div class="container">
        <img class="img-fluid rounded about-heading-img mb-3 mb-lg-0" src="img/lol7.jpg" alt="">
        <div class="about-heading-content">
          <div class="row">
            <div class="col-xl-9 col-lg-10 mx-auto">
              <div class="bg-faded rounded p-5">
                <h2 class="section-heading mb-4">
                  <span class="section-heading-upper">Nosotras.</span>
                  <span class="section-heading-lower">María & Sara</span>
                </h2>
                <p>Somos las manos que mueven los hilos en La Qarmita. Desde <i>septiembre de 2017</i> estamos al frente de la gestión de este rincón en el barrio de la Magdalena, en Granada, para ofrecer un espacio alternativo a todos aquellos que busquen la cultura a pie de calle, sin colorantes ni conservantes. Pretendemos construir un lugar que podamos crear entre todos, por lo que necesitamos vuestra colaboración.
                  </p>
               <center> <p class="mb-0">&hearts;</p></center>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <br>

    <section class="page-section about-heading">
      <div class="about-heading-content">
        <div class="row">
          <div class="col-xl-5 col-lg-10 mx-auto">
            <div class="bg-faded rounded p-5">
              <h2 class="section-heading mb-14">
                <span class="section-heading-upper">Si quieres más información:</span>
              </h2>
              <p>Puedes ver las opiniones sobre nuestro pequeño rincón.</p>
              <a href="https://www.tripadvisor.es/Attraction_Review-g187441-d5848806-Reviews-La_Qarmita_Bookshop_Cafe-Granada_Province_of_Granada_Andalucia.html">
                LA QARMITA - En TripAdvisor
              </a>  
            </div>
          </div>
        </div>
      </div>
    </section>

    @include('layouts.footer')

  </body>

</html>

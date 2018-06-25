<!DOCTYPE html>
<html lang="es">

  @include('layouts.header')

  <body>

    @include('layouts.navbar')

    <section class="page-section clearfix">
      <div class="container">
        <div class="intro">
          <img class="intro-img img-fluid mb-3 mb-lg-0 rounded" src="img/IMGP4511.jpg" alt="Imagen interior de la Qarmita">
          <div class="intro-text left-0 text-center bg-faded p-5 rounded">
            <h2 class="section-heading mb-4">
              <span class="section-heading-upper">LA QARMITA</span>
              <span class="section-heading-lower">Libros y café.</span>
            </h2>
            <p class="mb-3">Nuestro objetivo es que te sientas como en casa.
            </p>
            <div class="intro-button mx-auto">
              <a class="btn btn-primary btn-xl" href="store">Visítanos hoy</a>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="page-section cta">
      <div class="container">
        <div class="row">
          <div class="col-xl-9 mx-auto">
            <div class="cta-inner text-center rounded">
              <h2 class="section-heading mb-4">
                <span class="section-heading-upper">La Qarmita</span>
                <span class="section-heading-lower">¿Qué encontrarás?</span>
              </h2>
              <p class="mb-0">La Qarmita es un espacio pensado para darle rienda suelta a nuestra pasión por la cultura, los libros y el buen café. Por eso hemos creado un ambiente cálido y acogedor para que las prisas se queden en la puerta y puedas relajarte y disfrutar de todo lo que te proponemos.
                </p>
            </div>
          </div>
        </div>
      </div>
    </section>

    @include('layouts.footer')

  </body>

</html>

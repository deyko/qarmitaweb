<!DOCTYPE html>
<html lang="en">

  @include('layouts.header')

  <body>

    @include('layouts.navbar')

    <section class="page-section about-heading">
      <div class="container">
        <img class="img-fluid rounded about-heading-img mb-3 mb-lg-0" src="img/IMGP4507.jpg" alt="">
        <div class="about-heading-content">
          <div class="row">
            <div class="col-xl-9 col-lg-10 mx-auto">
              <div class="bg-faded rounded p-5">
                <h2 class="section-heading mb-4">
                  <span class="section-heading-upper">Strong Coffee, Strong Roots</span>
                  <span class="section-heading-lower">About Our Cafe</span>
                </h2>
                <p>Founded in 1987 by the Hernandez brothers, our establishment has been serving up rich coffee sourced from artisan farmers in various regions of South and Central America. We are dedicated to travelling the world, finding the best coffee, and bringing back to you here in our cafe.</p>
                <p class="mb-0">We guarantee that you will fall in <em>lust</em> with our decadent blends the moment you walk inside until you finish your last sip. Join us for your daily routine, an outing with friends, or simply just to enjoy some alone time.</p>
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
                <span class="section-heading-upper">Si quieres más información, visita nuestro blog:</span>
              </h2>
              <p>Puedes visitarnos también aquí y conocer más sobre nosotros.</p>
              <a href="http://laqarmita.blogspot.com.es">
                LA QARMITA - LIBROS Y CAFÉ BLOG
              </a>  
            </div>
          </div>
        </div>
      </div>
    </section>

    @include('layouts.footer')

  </body>

</html>

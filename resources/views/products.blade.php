<!DOCTYPE html>
<html lang="en">

  @include('layouts.header')

  <body>

    @include('layouts.navbar')

    <section class="page-section">
      <div class="container">
        <div class="product-item">
          <div class="product-item-title d-flex">
            <div class="bg-faded p-5 d-flex ml-auto rounded">
              <h2 class="section-heading mb-0">
                <span class="section-heading-upper">Café y letras</span>
                <span class="section-heading-lower">Cafés &amp; Tés</span>
              </h2>
            </div>
          </div>
          <img class="product-item-img mx-auto d-flex rounded img-fluid mb-3 mb-lg-0" src="img/coffe1.jpg" alt="">
          <div class="product-item-description d-flex mr-auto">
            <div class="bg-faded p-5 rounded">
              <p class="mb-0">Contamos con una extensa carta de tés, proporcionada por un proveedor local, ya que pensamos que es importante apoyar al pequeño comercio. Además, nuestra formación como baristas nos permite ofrecerte lo mejor de nuestro café.
                </p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="page-section">
      <div class="container">
        <div class="product-item">
          <div class="product-item-title d-flex">
            <div class="bg-faded p-5 d-flex mr-auto rounded">
              <h2 class="section-heading mb-0">
                <span class="section-heading-upper">Deliciosas y dulces.</span>
                <span class="section-heading-lower">Tartas</span>
              </h2>
            </div>
          </div>
          <img class="product-item-img mx-auto d-flex rounded img-fluid mb-3 mb-lg-0" src="img/photo1.jpg" alt="">
          <div class="product-item-description d-flex ml-auto">
            <div class="bg-faded p-5 rounded">
              <p class="mb-0">Nuestras deliciosas y llamativas tartas vienen directas del obrador de Tartas Cristina, empresa granadina que es uno de los referentes pasteleros de la ciudad. La Red Velvet, la Tarta de Zanahoria, la Tarta de Queso y el Brownie son nuestros fijos, pero de vez en cuando añadimos alguna dulce sorpresa.
                </p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="page-section">
      <div class="container">
        <div class="product-item">
          <div class="product-item-title d-flex">
            <div class="bg-faded p-5 d-flex ml-auto rounded">
              <h2 class="section-heading mb-0">
                <span class="section-heading-upper">Con lo que quieras</span>
                <span class="section-heading-lower">Tostadas</span>
              </h2>
            </div>
          </div>
          <img class="product-item-img mx-auto d-flex rounded img-fluid mb-3 mb-lg-0" src="img/lol10.jpg" alt="">
          <div class="product-item-description d-flex mr-auto">
            <div class="bg-faded p-5 rounded">
              <p class="mb-0">Os ofrecemos tostadas XXL para empezar bien el día con lo de siempre, pero también podéis echarle un vistazo a las variedades especiales. La tostada estrella: crema de queso, manzana, miel y canela.<b> Ñam</b>.
                </p>
            </div>
          </div>
        </div>
      </div>
    </section>

    @include('layouts.footer')

  </body>

</html>

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
                <span class="section-heading-lower">Eventos</span>
                <span class="section-heading-upper">Ven a verlos todos</span>
              </h2>

              <!-- INICIO DE EVENTOS -->
              <table class="table table-striped table-bordered table-hover dataTable no-footer dtr-inline" id="dataTables-example" role="grid" style="width: 100%;" width="100%">
                <thead>
                  <tr role="row">
                    <th>Evento</th>
                    <th>Fecha</th>
                    <th>Descripción</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($events as $even)
                      <tr class="gradeA odd" role="row">
                        <td> {{ $even->Nombre }}</td>
                        <td> {{ $even->FechaInicio }}</td>
                        <td> {{ $even->Descripcion }}</td>
                      </tr>
                  @endforeach
                </tbody>
              </table>
              <!-- FIN DE EVENTOS --> 

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

    @include('layouts.footer')

  </body>

  <!-- Script to highlight the active date in the hours list -->
  <script>
    $('.list-hours li').eq(new Date().getDay()).addClass('today');
  </script>

</html>

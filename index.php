<?php include_once "includes/templates/header.php" ?>

    <a class="flotante boton" href="tel:3434555555" ><i class="fab fa-whatsapp"></i></a>

    <!-- carrusel -->
    <div id="miCarrusel" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#miCarrusel" data-slide-to="0" class="small-dot active"><i class="fas fa-circle"></i></li>
        <li data-target="#miCarrusel" data-slide-to="1"><i class="fas fa-circle"></i>&nbsp;<a href="#">Deco</a></li>
        <li data-target="#miCarrusel" data-slide-to="2" class="small-dot"><i class="fas fa-circle"></i></li>
        <li data-target="#miCarrusel" data-slide-to="3"><i class="fas fa-circle"></i>&nbsp;<a href="#">1930</a></li>
      </ol>

      <div class="carousel-inner" role="listbox">
        <div class="carousel-item active">
          <img class="d-block w-100" src="mis_imagenes/pic1.jpg" alt="First slide">
          <div class="carousel-caption portada">
            <p class="texto">Aliquam et lorem massa. Fusce venenatis elit in tristique gravida.
               Duis vulputate diam sit amet justo viverra, ut pulvinar dolor ultricies.
               Aenean vel congue elit. Praesent non eleifend est, quis porttitor nisl.
               Morbi mauris libero, eleifend eu ultrices nec, accumsan in ante.
               Fusce congue, ex et ultrices viverra, ligula dolor consequat quam, et vehicula ipsum sem et nisl.
               Pellentesque rutrum ac eros id porta. Curabitur id tristique purus.</p>
          </div>
        </div>
        <div class="carousel-item">
          <img class="d-block w-100" src="mis_imagenes/pic2.jpg" alt="2 slide">
          <div class="carousel-caption entry">
            <h2>Suscribite al plan online</h2>
            <!-- <img alt="foto" src="images/logo.png"> -->
            <p class="h4">Aliquam et lorem massa. Fusce venenatis elit in tristique gravida.
               Duis vulputate diam sit amet justo viverra, ut pulvinar dolor ultricies.</p>
            <a href="#" class="btn btn-secondary">Ver mas +</a>
          </div>
        </div>
        <div class="carousel-item">
          <img class="d-block w-100" src="mis_imagenes/pic3.jpg" alt="4 slide">
          <div class="carousel-caption entry">
            <h2>Pedi un turno personal</h2>
            <!-- <img alt="foto" src="images/logo.png"> -->
            <p class="h4">Aliquam et lorem massa. Fusce venenatis elit in tristique gravida.
               Duis vulputate diam sit amet justo viverra, ut pulvinar dolor ultricies.</p>
            <a href="#" class="btn btn-secondary">Ver mas +</a>
          </div>
        </div>
        <div class="carousel-item">
          <img class="d-block w-100" src="mis_imagenes/pic4.jpg" alt="6 slide">
          <div class="carousel-caption entry">
            <h2>Unite a la comunidad</h2>
            <!-- <img alt="foto" src="images/logo.png"> -->
            <p class="h4">Aliquam et lorem massa. Fusce venenatis elit in tristique gravida.
               Duis vulputate diam sit amet justo viverra, ut pulvinar dolor ultricies.</p>
            <a href="#" class="btn btn-secondary">Ver mas +</a>
          </div>
        </div>



      </div>
      <a class="carousel-control-prev" href="#miCarrusel" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#miCarrusel" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>

    <section class="servicios">
      <div class="container">
        <div class="separador">
            <h2>Mis <span>Servicios</span><i class="fas fa-seedling"></i></h2>
        </div>
        <!-- <h2 id="productos">Otros de nuestros servicios</h2> -->
        <ul class="lista-servicios clearfix">
          <li>
            <div class="servicio">
              <img src="mis_imagenes/1.jpg" alt="imagen servicio">
              <p>Planes personales</p>
            </div>
            <p class="textoServicio">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
          </li>
          <li>
            <div class="servicio">
              <img src="mis_imagenes/2.jpg" alt="imagen servicio">
              <p>Consultas online</p>
            </div>
            <p class="textoServicio">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
          </li>
          <li>
            <div class="servicio">
              <img src="mis_imagenes/3.jpg" alt="imagen servicio">
              <p>Dieta online</p>
            </div>
            <p class="textoServicio">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
          </li>
          <li>
            <div class="servicio">
              <img src="mis_imagenes/4.jpg" alt="imagen servicio">
              <p>Recetas</p>
            </div>
            <p class="textoServicio">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
          </li>
        </ul>
      </div>
    </section><!--servicios-->







<!-- contador -->
    <div class="contador parallax">
      <div class="contenedor">
        <ul class="resumen-evento clearfix">
          <li><p class="numero">0</p>Recetas</li>
          <li><p class="numero">0</p>Planes</li>
          <li><img alt="isologo" src="mis_imagenes/logo.png"><br>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</li>
          <!-- <li><p class="numero">0</p>Compromiso</li> -->
          <li><img alt="isologo" src="mis_imagenes/isologo.png"><br>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</li>
        </ul>

      </div>
    </div> <!--parallax-->

    <!-- hero -->
        <div class="hero">
          <div class="informacion">
            <div class="isologo tada">
              <img alt="isologo" src="mis_imagenes/isologo.png">
            </div>
            <div class="textoPortada">
                <!-- <p><span>Stencil</span> pensado para afisionados que se permiten ponerse manos a la obra y darle un toque <span>único</span> a su hogar.</p> -->
                <p>Lorem <span>ipsum</span> dolor sit amet, consectetur <span>adipisicing</span> elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                <a href="#" class="btn btn-secondary">Contactame</a>

            </div>
          </div>
        </div>

        <!-- CALCULADORA IMC -->
        <div id="calculadora_imc" class="container">
          <div class="row">
            <div id="datos_calc" class="col-6">
              <h3>Calcula tu IMC (Indice Masa Corporal) <i class="fas fa-carrot"></i></h3>
              <form method="post" action="">
                <div class="field half first">
                  <input type="text" name="name" id="name" placeholder="Peso" />
                </div>
                <div class="field half">
                  <input type="email" name="email" id="email" placeholder="Estatura" />
                </div>
                <input class="btn btn-secondary btn-lg" type="submit" value="Enviar" class="special" />
              </form>
            </div>

            <div id="resultado_calc" class="col-6">
              <progress max="100" value="80" class="html5">
                <div class="w3-light-grey">
                  <div id="myBar" class="w3-container w3-green" style="height:50px;width:1%"></div>
                </div>
              </progress>
              <table><tbody><tr><th>Índice de masa corporal</th><th>Clasificación</th></tr><tr><td>&lt; 16.00</td><td>Infrapeso (Delgadez severa)</td></tr><tr><td>16.00 - 16.99</td><td>Infrapeso (Delgadez moderada)</td></tr><tr><td>17.00 - 18.49</td><td>Infrapeso (Delgadez aceptable)</td></tr><tr><td>18.50 - 24.99</td><td>Peso normal</td></tr><tr class="active"><td>25.00 - 29.99</td><td>Sobrepeso</td></tr><tr><td>30.00 - 34.99</td><td>Obeso (Tipo I)</td></tr><tr><td>35.00 - 40.00</td><td>Obeso (Tipo II)</td></tr><tr><td>&gt; 40.00</td><td>Obeso (Tipo III)</td></tr></tbody></table>
            </div>
          </div>
        </div>

    <!-- <main>
      <div class="container contenedor_ramas">
          <div class="rama">
              <div class="imagen_producto">
                <a href="deco.php"><img src="mis_imagenes/recipe.jpg" alt="imagen servicio"></a>
              </div>
              <h2>Recetas <br><span>online</span></h2>
              <p class="texto-producto">Tu proxima comida favorita</p>
          </div>
          <div class="rama">
              <div class="imagen_producto">
                <a href="repo.php"><img src="mis_imagenes/calc.jpg" alt="imagen servicio"></a>
              </div>
              <h2>Calculadora<br><span>online</span></h2>
              <p class="texto-producto">Calcula tu IMC</p>
          </div>
      </div>
    </main> -->
    <!-- BORRAR EL CSS -->


<?php include_once "includes/templates/footer.php" ?>

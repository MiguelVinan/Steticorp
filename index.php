<?php get_header(); ?>

<?php include(locate_template('layouts/cover-home.php')) ?>
<?php include(locate_template('layouts/barnner.php')) ?>

<section class="welcome container">
  <div class="welcome-flor">
    <img class="logo" src="<?= get_template_directory_uri() . '/assets/images/florLoto.svg' ?>" alt="" />
  </div>
  <div class="welcome-sectionTitle col-xs-12 col-sm-10">
    <h2>
      Bienvenidos a StetiCorp
    </h2>
    <p>
      Centro cosmetologico especializado
    </p>
  </div>
  <div class="welcome-content  col-xs-12 col-sm-10 col-md-8">
    <p>
      Nuestro deber es ayudar a quienes quieren mejorar su imagen personal para que puedan moldear su figura y así nuestro cliente se sienta más seguro de sí mismo, lo que nos diferencia es que lo hacemos con tratamientos no invasivos y eficaces.
      Lo realizamos incluso si has intentado otros métodos poco efectivos. Hacemos esto mediante masajes corporales, tratamientos faciales y el uso de dispositivos modernos.
      Si quieres mejorar tu imagen física y personal! Sólo tienes que comunicarte con
      nosotros! Y te daremos una consulta totalmente gratuita.
    </p>
  </div>
</section>

<section class="servicios u-paddingSection  container-fluid">
  <div class="serviciosContainer row">
    <div class="">
      <a href="#" class="serviciosCorporales col-xs-12 col-sm-6" style="background-image:url('<?= get_template_directory_uri() . "/assets/images/practica.jpg" ?>');" >
        <h3>
          Tratamientos Corporales
        </h3>
      </a>
      <a href="#" class="serviciosFaciales serviciosSegundario col-xs-12 col-sm-6" style="background-image:url('<?= get_template_directory_uri() . "/assets/images/practica1.jpg" ?>');">
        <h3>
          Tratamientos Faciales
        </h3>
      </a>
    </div>
  </div>
  <div class="col-xs-12 btn-servicesContainer">
    <a href="#" class="btn-more"><span>Ver mas de nuestros servicios </span><i class="icon-chevron-right"></i> </a>
  </div>
</section>

<section class="blog container u-paddingSection">
  <div class="blogData  col-xs-12">
    <h2>Ultimos articulos de nuestro blog</h2>
    <p>Todos los beneficios que traen nuestros tratamientos  además de algunos tips que te serán utiles en el momento del cuidado de tu cuerpo y de la piel.</p>
  </div>
  <div class="blogArticles span12">
    <div class="blogPrimario ">
      <?php include(locate_template('layouts/article.php')) ?>
    </div>
    <div class="blogSegundario">
      <?php include(locate_template('layouts/article.php')) ?>
    </div>
    <div class="blogTercero">
        <?php include(locate_template('layouts/article.php')) ?>
    </div>
  </div>
  <div class="btnBlog col-xs-12">
    <a href="#" class="btn-more"><span>Ver mas de nuestros servicios </span><i class="icon-chevron-right"></i> </a>
  </div>
</section>

<section class="cotizador u-paddingSection ">
  <div class="cotizadorContainer row">
    <div class="cotizadorCard col-sm-6 col-md-5">
        <div class="circulo" style="background-image:url('<?= get_template_directory_uri() . "/assets/images/circulo.svg" ?>');">
          <div class="cardDos" style="background-image:url('<?= get_template_directory_uri() . "/assets/images/card2.svg" ?>');">
            <div class="cardUno" style="background-image:url('<?= get_template_directory_uri() . "/assets/images/card1.svg" ?>');">
            </div>
          </div>
        </div>
    </div>
    <div class="cotizadorData col-xs-12 col-sm-6 col-md-5">
      <h2>Cotizador Online</h2>
      <p>
        Hemos visto la necesidad de que nuestros clientes conozcan cuanto se ahorran en nuestros paquetes de acuerdo al objetivo que tienen planteado.
        Por eso les proporcionamos un cotizador que les permitirá tener un aproximado de su ahorro.
      </p>
      <div class="col-xs-12 cotizadorBoton">
        <a href="#" class="btn-contact"><span>Cotiza online</span><i class="icon-gift"></i ></a>
      </div>
    </div>
  </div>
</section>


<section class="clientes container u-paddingSection">
  <div class="clientesTitulo">
    <h2>Lo que dicen nuestros clientes</h2>
  </div>
  <div class="clientesdiv row">
    <?php include(locate_template('layouts/client.php')) ?>
    <?php include(locate_template('layouts/client.php')) ?>
    <?php include(locate_template('layouts/client.php')) ?>
  </div>
</section>



<section class="google-maps">
    <?php include(locate_template('layouts/google-maps.php')) ?>
</section>






<?php get_footer(); ?>

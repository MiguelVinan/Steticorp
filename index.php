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

  <div class="serviciosButton row">
    <button type="button" name="button" class="btnServicios"><span>Ver mas de nuestros servicios </span><i class="icon-chevron-right"></i> </button>
  </div>


</section>


<?php get_footer(); ?>

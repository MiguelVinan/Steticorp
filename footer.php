<?php include(locate_template('layouts/subscripcion.php')) ?>

<footer class="footer">
  <section class="footerSection u-paddingSection container ">
    <div class="footerContainer col-sm-12 col-sm-12 row">
      <div class="footerData text-center col-xs-12 col-sm-12 col-md-10">
        <figure class="footerData-logo">
          <img class="" src="<?= get_template_directory_uri() . '/assets/images/logo.svg' ?>" alt="" />
        </figure>
        <p class="">
          Nuestro deber es ayudar a quienes quieren mejorar su imagen personal para que puedan moldear su figura y así nuestro cliente se sienta más seguro de sí mismo, lo que nos diferencia es que lo hacemos con tratamientos no invasivos y eficaces. Hacemos esto mediante masajes corporales, tratamientos faciales y el uso de dispositivos modernos.
          Si quieres mejorar tu imagen física y personal! Sólo tienes que comunicarte con
          nosotros! Y te daremos una consulta <span>totalmente gratuita.</span>
        </p>
      </div>
      <div class="footerBoton col-xs-12 col-sm-12">
        <a href="<?= get_page_link(4) ?>" class="btn-contact"><span>Contáctanos</span><i class="icon-heart"></i></a>
        <a href="<?= get_page_link(43) ?>" class="btn-more"><span>quienes somos?</span></a>
      </div>
      <div class="footerLinea col-xs-12 col-sm-12">
        <hr>
      </div>
        <?php include(locate_template('layouts/redesSociales-Steticorp.php')) ?></div>
  </section>
  <div class="autor col-xs-12">
    <p>
      <span>© 2015 , StetiCorp all rights reserved</span>
      <span>developed & designed by <a href="http://miguelvinan.com/" target="_blank">miguelvinan.com</a></span>
    </p>
  </div>
</footer>
<?php wp_footer(); ?>
</body>
</html>

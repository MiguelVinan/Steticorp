<?php include(locate_template('layouts/subscripcion.php')) ?>

<?php query_posts('p=161') ?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<footer class="footer">
  <section class="footerSection u-paddingSection container ">
    <div class="footerContainer col-sm-12 col-sm-12 row">
      <div class="footerData text-center col-xs-12 col-sm-12 col-md-10">
        <figure class="footerData-logo">
          <img class="" src="<?= get_template_directory_uri() . '/assets/images/logo.svg' ?>" alt="" />
        </figure>
        <p class="">
          <?php the_field('elevator_pitch') ?>
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
<?php endwhile; else : ?>
  <p><?php _e( 'Lo sentimos, no tenemos imagen por el momento :(' ); ?></p>
<?php endif; ?>
</footer>

<?php wp_footer(); ?>
</body>
</html>

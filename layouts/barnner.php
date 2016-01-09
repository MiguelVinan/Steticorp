<?php
/*
 * Banner de Ofertas
 */ ?>
<?php rewind_posts(); ?>
<?php query_posts('post=149') ?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<section class="barnner">
  <div class="container">
    <div class="barnnerContainer col-xs-12 col-sm-8 col-md-6">
      <div class="barnnerCircle col-xs-2 col-sm-3">
          <span>-<?php the_field('porcentaje_descuento') ?>%</span>
      </div>

      <p class="barnnerText">
        <?php the_field('descripcion_oferta') ?>
      </p>
    </div>
  </div>
</section>

<?php endwhile; else : ?>
  <p><?php _e( 'Lo sentimos, no tenemos imagen por el momento :(' ); ?></p>
<?php endif; ?>
<?php wp_reset_query(); ?>

<?php get_header(); ?>

  <?php include(locate_template('layouts/cover.php')) ?>
  <section class="u-paddingSection container services-treatment">

    <?php rewind_posts(); ?>
    <?php query_posts(array ('posts_per_page' => -1, 'post_type'=> 'otrosCuidados' )) ?>
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
      <?php
        $thumb = wp_get_attachment_image_src( get_post_thumbnail_id( $post -> ID ), 'medium' );
        $url = $thumb['0'];
      ?>

      <?php include(locate_template('layouts/single-service.php')) ?>


    <?php endwhile; else : ?>
      <p><?php _e( 'Lo sentimos, aun no hemos colocado un tratamiento' ); ?></p>
    <?php endif; ?>

  </section>

<?php get_footer(); ?>

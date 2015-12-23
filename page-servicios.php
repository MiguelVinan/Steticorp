<?php get_header(); ?>

<?php include(locate_template('layouts/cover.php')) ?>
<section class="allServices u-paddingSection container-fluid">
  <div class="row">
    <?php 
    /*
     *   Tratamientos Corporales
     */
    ?>
    <?php rewind_posts(); ?>
    <?php query_posts('page_id=69') ?>
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
      <?php
        $thumb = wp_get_attachment_image_src( get_post_thumbnail_id( $post -> ID ), 'large' );
        $url = $thumb['0'];
      ?>
    <a href="<?php the_permalink(); ?>">
      <article class="corporalCare col-xs-12 col-sm-4" style="background-image:url('<?= $url ?>');">
        <h3 class="text-center"><?php the_title() ?></h3>
      </article>
    </a>
    <?php endwhile; else : ?>
      <p><?php _e( 'Lo sentimos, no tenemos imagen por el momento :(' ); ?></p>
    <?php endif; ?>
    
    <?php 
    /*
     *   Tratamientos Faciales 
     */
    ?>

    <?php rewind_posts(); ?>
    <?php query_posts('page_id=71') ?>
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
      <?php
        $thumb = wp_get_attachment_image_src( get_post_thumbnail_id( $post -> ID ), 'large' );
        $url = $thumb['0'];
      ?>
    <a href="<?php the_permalink(); ?>">
      <article class="skinCare col-xs-12 col-sm-4" style="background-image:url('<?= $url ?>');">
        <h3 class="text-center"><?php the_title(); ?></h3>
      </article>
    </a>
    <?php endwhile; else : ?>
      <p><?php _e( 'Lo sentimos, no tenemos imagen por el momento :(' ); ?></p>
    <?php endif; ?>

    <?php 
    /*
     *   Otros Cuidados
     */
    ?>
    <?php rewind_posts(); ?>
    <?php query_posts('page_id=74') ?>
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
      <?php
        $thumb = wp_get_attachment_image_src( get_post_thumbnail_id( $post -> ID ), 'large' );
        $url = $thumb['0'];
      ?>
    <a href="<?php the_permalink(); ?>">      
      <article class="servicesAdded col-xs-12 col-sm-4" style="background-image:url('<?= $url ?>');">
        <h3 class="text-center"><?php the_title(); ?></h3>
      </article>    
    </a>
    <?php endwhile; else : ?>
      <p><?php _e( 'Lo sentimos, no tenemos imagen por el momento :(' ); ?></p>
    <?php endif; ?>
  </div>
</section>


<?php get_footer(); ?>

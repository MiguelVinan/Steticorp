<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
  <?php
    $thumb = wp_get_attachment_image_src( get_post_thumbnail_id( $post -> ID ), 'full' );
    $url = $thumb['0'];
  ?>

<section class="cover cover--single u-before"  style="background-image:url( <?= $url ?> );" >
  <article class="container">
    <img src="<?= get_template_directory_uri() . '/assets/images/florLoto.svg' ?>" alt="">
    <h1 class="specialTitle col-xs-12 col-md-8"> <?= the_title(); ?></h1>
    <div class=" cover-content col-xs-12 col-md-6">
      <p><?php the_content(); ?> </p>
    </div>
  </article>


<?php endwhile; else : ?>
  <p><?php _e( 'Lo sentimos, no tenemos imagen por el momento :(' ); ?></p>
<?php endif; ?>

</section>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
  <?php
    $thumb = wp_get_attachment_image_src( get_post_thumbnail_id( $post -> ID ), 'large' );
    $url = $thumb['0'];
  ?>

<section class="cover cover--single u-before"  style="background-image:url( <?= $url ?> );" >
  <article class="container">
    <h1 class="col-xs-12 col-sm-10 col-md-7"> <?= the_title(); ?></h1>
    <div rel="author" class="author">
      <figure class="author-image">
        <img src="<?= the_author_image_url($author_id = null); ?>" alt="" />
      </figure>
      <div class="author-info">      
        //pendiente <<<<<<<-----
        <h3><?php the_author_posts_link(); ?></h3>
        <time><?php the_time('j \d\e F, Y'); ?></time>
      </div>
    </div>
    <img class="lotoFlower" src="<?= get_template_directory_uri() . '/assets/images/florLoto.svg' ?>" alt="">

  </article>
<?php endwhile; else : ?>
  <p><?php _e( 'Lo sentimos, no tenemos imagen por el momento :(' ); ?></p>
<?php endif; ?>

</section>
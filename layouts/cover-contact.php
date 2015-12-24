<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
  <?php
    $thumb = wp_get_attachment_image_src( get_post_thumbnail_id( $post -> ID ), 'full' );
    $url = $thumb['0'];
  ?>

<section class="cover cover--contact u-before u-paddingSection"  style="background-image:url( <?= $url ?> );" >
  <article class="container">
  <div class="row">
    <img src="<?= get_template_directory_uri() . '/assets/images/florLoto.svg' ?>" alt="">
  </div>
   <div class="row">
     <h1 class="specialTitle col-xs-12 col-md-8"> <?= the_title(); ?></h1>
     <div class=" cover-content col-xs-12 col-md-6">
       <p> <?php the_field('contact_description') ?> </p>
     </div>
   </div>
   
    <div class="row contactForm col-xs-12">
      <?php the_content(); ?>
    </div>
  </article>


<?php endwhile; else : ?>
  <p><?php _e( 'Lo sentimos, no tenemos imagen por el momento :(' ); ?></p>
<?php endif; ?>

</section>
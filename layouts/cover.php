<div class="cover u-before"  style="background-image:url('<?= get_template_directory_uri() . "/assets/images/wellness-skinCare.jpg" ?>');">
  <article class="container">
    <img src="<?= get_template_directory_uri() . '/assets/images/florLoto.svg' ?>" alt="">
    <h1 class="specialTitle col-xs-12 col-md-6"> <?= the_title(); ?></h1>
    <div class=" cover-content col-xs-12 col-md-6">
      <p><?php the_content(); ?> </p>
    </div>
  </article>


<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<?php endwhile; else : ?>
  <p><?php _e( 'Lo sentimos, no tenemos imagen por el momento :(' ); ?></p>
<?php endif; ?>

</div>
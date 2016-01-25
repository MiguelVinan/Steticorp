<?php get_header() ?>

<?php include(locate_template('layouts/cover-single.php')) ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<section class="single-article u-paddingSection">
  <div class="container">
    <article class="col-xs-12 col-sm-9">
    <?php the_content(); ?>
    </article>
    <span class="signature"><img src="<?=  get_template_directory_uri() . '/assets/images/silvania-hidalgo.svg' ?>" alt=""></span>
  </div>
</section>
<?php endwhile; else : ?>
  <p><?php _e( 'Lo sentimos, no tenemos imagen por el momento :(' ); ?></p>
<?php endif; ?>

<?php get_footer() ?>

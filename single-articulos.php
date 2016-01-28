<?php get_header() ?>

<?php include(locate_template('layouts/cover-single.php')) ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<section class="single-article u-paddingSection">
  <div class="container">
    <article>
    <?php the_content(); ?>
    </article>
    <span class="signature"><img style="width:200px;" src="<?=  get_template_directory_uri() . '/assets/images/signature.png' ?>" alt=""></span>
  </div>
  <div class="share-article">
    <div class="share-container container">
      <div class="nav-bottom col-xs-12 col-sm-11 col-md-9">
        <figure class="brand-share">
          <img src="<?= get_template_directory_uri() . '/assets/images/logo.svg' ?>" alt="logo steticorp" />
          <h6>Blog</h6>
        </figure>
        <div class="share-links">
          <h4 class="share-like" style="margin-right:15px;">Si te gusto, comparte</h4>
          <a class="icon icon-twitter-with-circle" href="//twitter.com/share?text=<?= the_title(); ?>&amp;url=<?= the_permalink(); ?>"
          onclick="window.open(this.href, 'twitter-share', 'width=550,height=235');return false;">
            <span class="hidden">Twitter</span>
          </a>
          <a class="icon icon-facebook-with-circle" href="https://www.facebook.com/sharer/sharer.php?u=<?= the_permalink(); ?>"
          onclick="window.open(this.href, 'facebook-share','width=580,height=296');return false;">
            <span class="hidden">Facebook</span>
          </a>
        </div>
      </div>
    </div>
  </div>
</section>
<?php endwhile; else : ?>
  <p><?php _e( 'Lo sentimos, no tenemos imagen por el momento :(' ); ?></p>
<?php endif; ?>
<?php wp_reset_query(); ?>

<section class="related-posts">
  <div class="container">
    <?php include(locate_template('layouts/related-posts.php')); ?>
  </div>
</section>
<?php get_footer() ?>

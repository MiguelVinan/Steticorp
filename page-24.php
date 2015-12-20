<?php get_header(); ?>

  <?php include(locate_template('layouts/cover.php')) ?>
  <?php include(locate_template('layouts/search-box.php')) ?>
  <section class="container u-paddingSection" style="height:800px;">
    
    <?php rewind_posts(); ?>
    <?php query_posts(array ('paged' => $paged,'posts_per_page' => 9, 'post_type'=> 'articulos' )) ?>
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
      <?php
        $thumb = wp_get_attachment_image_src( get_post_thumbnail_id( $post -> ID ), 'medium' );
        $url = $thumb['0'];
      ?>

    <article class="article col-xs-12 col-md-4">
      <time><?= the_date('j \d\e F, Y') ?></time>
      <a href="<?php the_permalink(); ?>">
        <div class="article-image" style="background-image:url( <?= $url ?> );">
          <h3><?php the_title(); ?></h3>
        </div>
      </a>
    </article>

    <?php endwhile; else : ?>
      <p><?php _e( 'Lo sentimos, no tenemos imagen por el momento :(' ); ?></p>
    <?php endif; ?>

  </section>
  
<?php get_footer(); ?>
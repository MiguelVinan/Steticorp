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

    <?php include(locate_template('layouts/article.php')) ?>

    <?php endwhile; ?>
    <div class="pagination-links col-xs-12 text-center">
      <?php $argsPaginations = array(
        'prev_text' => 'Articulos nuevos',
        'next_text' => 'Articulos anteriores'
      ) ?>
      <?= paginate_links($argsPaginations) ?>
    </div>
    <?php else : ?>
      <p><?php _e( 'Lo sentimos, no tenemos imagen por el momento :(' ); ?></p>
    <?php endif; ?>
    <?php wp_reset_query(); ?>


  </section>
  
<?php get_footer(); ?>
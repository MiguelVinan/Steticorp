<div class="relatedposts row">
<h3 class="text-center relatedposts-title">TAMBÍEN PODRÍA GUSTARTE…</h3>
<?php
    $orig_post = $post;
    global $post;
    $tags = wp_get_post_tags($post->ID);

    if ($tags) {
    $tag_ids = array();
    foreach($tags as $individual_tag) $tag_ids[] = $individual_tag->term_id;
    $args=array(
    'post_type' => 'articulos',
    'tag__in' => $tag_ids,
    'post__not_in' => array($post->ID),
    'posts_per_page'=>3,
    'caller_get_posts'=>1,
    'order' => 'ASC',
    'orderby' => 'rand'
    );

    $my_query = new wp_query( $args );

    while( $my_query->have_posts() ) {
    $my_query->the_post();
    ?>

    <?php
      $thumb = wp_get_attachment_image_src( get_post_thumbnail_id( $post -> ID ), 'medium' );
      $url = $thumb['0'];
    ?>

    <article class="article col-xs-12 col-sm-6 col-md-4">
      <a href="<?php the_permalink(); ?>">
        <div class="article-image" style="background-image:url( <?= $url ?> );">
          <h3><?php the_title(); ?></h3>
        </div>
      </a>
    </article>

    <? }
    }
    $post = $orig_post;
    wp_reset_query();
    ?>
</div>

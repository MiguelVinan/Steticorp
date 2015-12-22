<article class="article col-xs-12 col-sm-6 col-md-4">
  <time><?php the_time('j \d\e F, Y') ?></time>
  <a href="<?php the_permalink(); ?>">
    <div class="article-image" style="background-image:url( <?= $url ?> );">
      <h3><?php the_title(); ?></h3>
    </div>
  </a>
</article>

<div class="footerSociales col-xs-12 col-sm-12  ">
  <?php if( have_rows('social_channels') ):
      while ( have_rows('social_channels') ) : the_row(); ?>
  <div class="footerInst">
    <a href="<?= the_sub_field('social_url') ?>" target="_blank" class="icon icon-<?php the_sub_field('social_icon') ?>"></a>
  </div>
    <?php endwhile;
    else : ?>
    <?php endif; ?>
</div>

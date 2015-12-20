<div class="searchBox">
  <div class="container">
    <form class="col-xs-12 col-md-6" method="get" id="searchform" action="<?php bloginfo('home'); ?>/">
      <input type="text" placeholder="Busca algo que sea de tu interes…" size="18" value="<?php echo wp_specialchars($s, 1); ?>" name="s" id="s" class="inputText col-xs-9"/>
      <i class="col-xs-1 icon-search <?php if( is_search() ): ?> otherColor <?php endif; ?>"></i>
      <input type="submit" id="searchsubmit" value="" class="hidden" />
    </form>
  </div>
</div>

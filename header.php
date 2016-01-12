<?php  ?>
<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="UTF-8">
    <title> <?php bloginfo('name'); if (is_page()) {
      wp_title('-');
    } elseif (is_single()) {
      ?> - <?php wp_title('');
    }elseif (is_search()) {
       wp_title('-');
    }else {
      ?> - Inicio <?php
    }?> </title>

    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <!-- description -->
    <meta name="author" content="Miguel Viñan">
  	<?php if (is_single() || is_page() ) : if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
  	<meta name="description" content="<?php the_excerpt_rss(); ?>" />
  	<?php endwhile; endif; elseif(is_home()) : ?>
  	<meta name="description" content="<?php bloginfo('description'); ?>" />
  	<?php endif; ?>

    <?php wp_head(); ?>
  </head>
  <body>
    <?php if (is_search()): ?>
      <header class="menu container searchpage">
    <?php else : ?>
      <header class="menu container">
    <?php endif; ?>


      <a href="<?php bloginfo('url') ?>">
        <figure class="brand">
          <img class="brand-steticorp " src="<?= get_template_directory_uri() . '/assets/images/logo.svg' ?>" alt="" />
        </figure>
      </a>

      <?php wp_nav_menu(
        array(
          'theme_location' => 'nav-header',
          'menu_class' => 'navBar-list',
          'container' => 'nav',
          'container_class' => 'navBar'
        )
      ); ?>

      <button type="button" name="button" class="btn-menu"><i class="icon-th-menu"></i>
      </button>
    </header>

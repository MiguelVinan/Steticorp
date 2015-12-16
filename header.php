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
  	<?php if (is_single() || is_page() ) : if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
  	<meta name="description" content="<?php the_excerpt_rss(); ?>" />
  	<?php endwhile; endif; elseif(is_home()) : ?>
  	<meta name="description" content="<?php bloginfo('description'); ?>" />
  	<?php endif; ?>

    <?php wp_head(); ?>
  </head>
  <body>
    <header class="menu row">

      <a href="#"><figure class="brand">
          <img class="brand-steticorp " src="<?= get_template_directory_uri() . '/assets/images/logo.svg' ?>" alt="" />
      </figure></a>

      <nav class="navBar">
        <ul class="navBar-list">
          <li><a href="#">HOME</a></li>
          <li><a href="#">SERVICIOS</a></li>
          <li><a href="#">BLOG</a></li>
          <li><a href="#">SOBRE NOSOTROS</a></li>
          <li><a href="#">CONTÁCTANOS</a></li>
        </ul>
      </nav>

      <button type="button" name="button" class="btn-menu"><i class="icon-th-menu"></i>
      </button>
    </header>

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
    <!-- DESPONSIVE -->

    <header class="cover row">
      <div class="coverContainer col-xs-12">
        <button type="button" name="button" class="coverContainer_boton"><i class="icon-bamboo2"></i></button>
      </div>
      <nav class="coverMenu">
        <ul>
          <li><a href="#">HOME</a></li>
          <li><a href="#">SERVICIOS</a></li>
          <li><a href="#">BLOG</a></li>
          <li><a href="#">SOBRE NOSOTROS</a></li>
          <li><a href="#">CONTÁCTANOS</a></li>
        </ul>
      </nav>
      <figure class="coverImagen">
        <img src="" alt="" />
      </figure>
        <figure class="coverLogo col-xs-12">
          <img src="<?= get_template_directory_uri() . '/assets/images/logo.png' ?>" />
        </figure>
        <div class="coverDatos">
          <h1>Tratamientos Corporales</h1>
          <p>“ Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. “</p>
        </div>

    </header>

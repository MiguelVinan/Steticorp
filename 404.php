<?php get_header(); ?>

<section class="error_404" style="background-image:url('<?= get_template_directory_uri().'/assets/images/404.svg'?>');">
  <h1>404</h1>
  <p>Parece que estas perdid@ ?</p>
  <a href="<?= bloginfo('url') ?>" class="btn-more">Resgresa a nuestro home</a>
</section>

<?php get_footer(); ?>

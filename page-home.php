<?php get_header(); ?>

<?php include(locate_template('layouts/cover-home.php')) ?>
<?php include(locate_template('layouts/barnner.php')) ?>

<section class="welcome container">
  <div class="welcome-flor">
    <img class="logo" src="<?= get_template_directory_uri() . '/assets/images/florLoto.svg' ?>" alt="" />
  </div>
  <div class="welcome-sectionTitle col-xs-12 col-sm-10">
    <h2>
      <?php the_field('home_title') ?>
    </h2>
    <strong>
      <?php the_field('home_subtitle') ?>
    </strong>
  </div>
  <div class="welcome-content  col-xs-12 col-sm-10 col-md-8" style="margin-top:40px;">
    <p>
      <?php the_field('home_bienvenida') ?>
    </p>
  </div>
</section>

<section class="servicios u-paddingSection  container-fluid">
  <div class="serviciosContainer row">
    <div class="">
      <?php
      /*
       * Tratamientos Corporales
       */ ?>
      <?php rewind_posts(); ?>
      <?php query_posts('page_id=69') ?>
      <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <?php
          $thumb = wp_get_attachment_image_src( get_post_thumbnail_id( $post -> ID ), 'large' );
          $url = $thumb['0'];
        ?>
      <a href="<?php the_permalink(); ?>" class="serviciosCorporales col-xs-12 col-sm-6" style="background-image:url('<?= $url ?>');" >
        <h3 class="text-center"><?php the_title() ?></h3>
      </a>
    <?php endwhile; else : ?>
      <p><?php _e( 'Lo sentimos, no tenemos imagen por el momento :(' ); ?></p>
    <?php endif; ?>
    <?php wp_reset_query(); ?>

    <?php
    /*
     * Tratamientos Faciales
     */ ?>
    <?php rewind_posts(); ?>
    <?php query_posts('page_id=71') ?>
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
      <?php
        $thumb = wp_get_attachment_image_src( get_post_thumbnail_id( $post -> ID ), 'large' );
        $url = $thumb['0'];
      ?>

      <a href="<?php the_permalink(); ?>" class="serviciosFaciales serviciosSegundario col-xs-12 col-sm-6" style="background-image:url('<?= $url ?>');">
        <h3><?php the_title(); ?> </h3>
      </a>
    <?php endwhile; else : ?>
      <p><?php _e( 'Lo sentimos, no tenemos imagen por el momento :(' ); ?></p>
    <?php endif; ?>
    <?php wp_reset_query(); ?>

    </div>
  </div>
  <div class="col-xs-12 btn-servicesContainer">
    <a href="<?= get_page_link(6) ?>" class="btn-more"><span><?php the_field('home_button_more_services') ?></span><i class="icon-chevron-right"></i> </a>
  </div>
</section>

<section class="blog container u-paddingSection">
  <div class="blogData col-xs-12">
    <h2><?php the_field('home_blogTitle') ?></h2>
    <p><?php the_field('home_description_blog') ?></p>
  </div>
  <div class="blogArticles">
    <?php
    /*
     * Ultimos Blogs
     */ ?>
    <?php rewind_posts(); ?>
    <?php query_posts(array ('paged' => $paged,'posts_per_page' => 3, 'post_type'=> 'articulos' )) ?>
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
      <?php
        $thumb = wp_get_attachment_image_src( get_post_thumbnail_id( $post -> ID ), 'medium' );
        $url = $thumb['0'];
      ?>

      <?php include(locate_template('layouts/article.php')) ?>

    <?php endwhile; else : ?>
      <p><?php _e( 'Lo sentimos, no tenemos imagen por el momento :(' ); ?></p>
    <?php endif; ?>
    <?php wp_reset_query(); ?>

  </div>
  <div class="btnBlog col-xs-12">
    <a href="<?= get_page_link(24) ?>" class="btn-more"><span><?php the_field('home_button_more_articles') ?></span><i class="icon-chevron-right"></i> </a>
  </div>
</section>

<section class="clientes u-sectionGrey u-paddingSection">
  <div class="container">
    <div class="clientesTitulo">
      <h2><?php the_field('home_clientTitles') ?></h2>
    </div>
    <div class="clientesdiv row">
      <?php
      if( have_rows('home_testimonials') ):
          while ( have_rows('home_testimonials') ) : the_row(); ?>

            <?php include(locate_template('layouts/client.php')) ?>

          <?php endwhile;
      else : ?>

      <?php endif; ?>
    </div>
  </div>
</section>

<section class="googleMap">
  <?php include(locate_template('layouts/google-maps.php')) ?>
</section>

<?php get_footer(); ?>

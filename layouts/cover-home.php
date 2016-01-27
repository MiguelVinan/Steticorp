<div id="carousel-generic" class="cover carousel slide" data-ride="carousel" data-pause="">
  <?php if( have_rows('home_carousel') ): ?>
    <ol class="carousel-indicators">
      <?php $counter = 0; ?>
      <?php while ( have_rows('home_carousel') ) : the_row(); ?>
        <li data-target="#carousel-generic" data-slide-to="<?= $counter;  ?>" class="<?php if($counter == 0): ?>active<?php else :?> <?php endif; ?>"></li>
        <?php $counter++; ?>
      <?php endwhile; ?>
    </ol>
  <?php else : ?>
  <?php endif; ?>
    <!-- Wrapper for slides -->

    <div class="carousel-inner" role="listbox">
      <div class="coverLogo hidden">
          <figure>
            <img class="logo" src="<?= get_template_directory_uri() . '/assets/images/logo.svg' ?>" alt="" />
          </figure>
          <p class="u-textWhite">
            Centro Cosmetologico Especializado
          </p>
      </div>
      <?php if( have_rows('home_carousel') ): ?>
          <?php while ( have_rows('home_carousel') ) : the_row(); ?>

      <div class="item" style="background-image:url('<?php the_sub_field('carousel_imagen')
      ?>')">
        <div class="carousel-caption">
          <div class="coverDatos u-textWhite">
            <h1><?php the_sub_field('carousel_title') ?></h1>
            <p><?php the_sub_field('carousel_description') ?></p>
          </div>
        </div>
      </div>

          <?php endwhile;
      else : ?>

      <?php endif; ?>
    </div>

</div>

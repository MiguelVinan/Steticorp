<?php get_header() ?>
  <?php include(locate_template('layouts/cover.php')) ?>
  <section class="aboutUs u-paddingSection">
    <article class="container">

      <section class="aboutUs-section row">
        <div class="image col-xs-12" style="background-image:url('<?= the_field('first_image') ?>');">
        </div>
        <article class="infoBox infoBox--right col-xs-12 col-sm-12 col-md-12">
          <h4><?php the_field('title_inicio') ?></h4>
          <p><?php the_field('description_inicio') ?></p>
        </article>
      </section>
      <section class="aboutUs-section row">
        <div class="image col-xs-12" style="background-image:url('<?= the_field('second_image') ?>');">
        </div>
        <article class="infoBox infoBox--left col-xs-12 col-sm-12 col-md-12">
          <h4><?php the_field('title_second_section') ?></h4>
          <p><?php the_field('description_second_section') ?></p>
        </article>
      </section>
      <section class="aboutUs-section row">
        <div class="image col-xs-12" style="background-image:url('<?= the_field('third_image') ?>');">
        </div>
        <article class="infoBox infoBox--right col-xs-12 col-sm-12 col-md-12">
          <h4>N<?php the_field('title_third_section') ?></h4>
          <p><?php the_field('description_third_section') ?></p>
        </article>
      </section>
      <section class="aboutUs-section row">
        <div class="image col-xs-12" style="background-image:url('<?= the_field('quarter_image') ?>');">
        </div>
        <article class="infoBox infoBox--left col-xs-12 col-sm-12 col-md-12">
          <h4><?php the_field('title_quarter_section') ?></h4>
          <p><?php the_field('description_quarter_section') ?></p>
        </article>
      </section>

    </article>
  </section>
<?php get_footer() ?>

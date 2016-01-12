<?php get_header(); ?>
  <?php include(locate_template('layouts/cover-author.php')) ?>


    <?php
    $curauth = (isset($_GET['author_name'])) ? get_user_by('slug', $author_name) : get_userdata(intval($author));
    ?>

<section class="authorBibliografia container u-paddingSection">
  <div class="authorData row">
    <div class="authorInfo ">

      <div class="authorFoto col-xs-12 col-sm-10 col-md-9">
        <div  class="authorSilvana" style="background-image:url('<?= get_template_directory_uri() . "/assets/images/Silvana.jpg" ?>');">
        </div>
      </div>

      <div class="authorParrafo col-xs-12 col-sm-9 col-sm-push-3 col-md-9">
        <div class="authorDerecha">
          <p>
            <?= $curauth->description; ?>
          </p>
        </div>
        <div class="authorBtn col-xs-12 col-sm-12">
          <div class="authorClik">
            <a href="#" class="btn-more">Visita nuestro blog</a>
          </div>
        </div>
      </div>
    </div>

    <div class="authorVisita">
      <div class="authorTitle col-xs-12">
        <h2>Te invito a que visites nuestro blog</h2>
      </div>
      <div class="authorDireccion hidden-xs ">
          <img src="<?= get_template_directory_uri() . "/assets/images/arrow-line.svg" ?>" />
      </div>
    </div>
  </div>
</section>

<?php include(locate_template('layouts/suscripcion.php')) ?>
<?php get_footer(); ?>
<!-- hidden-xs -->

<?php get_header(); ?>
  <?php include(locate_template('layouts/cover-author.php')) ?>


    <?php
    $curauth = (isset($_GET['author_name'])) ? get_user_by('slug', $author_name) : get_userdata(intval($author));
    ?>

  <section class="author container u-paddingSection">
    <div class="authorContainer row">


      <div class="authorInfo">
        <div class="authorData col-xs-12 col-sm-10 col-sm-pull-2 col-md-8">
          <div class="authorFoto" style="background-image:url('<?= get_template_directory_uri() . "/assets/images/Silvana.jpg" ?>');" >
          </div>
        </div>

        <div class="authorParrafo col-xs-12 col-sm-8 col-sm-push-4 col-md-8">
          <div class="authorParrafo-Container">
            <div class="authorBibliografia">
              <p><?= $curauth->description; ?>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
              <p><?= $curauth->description; ?>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            </div>
            <div class="authorBtn">
              <div class="authorClik">
                <a href="#" class="btn-more">Visita nuestro blog</a>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="authorVisita">
        <div class="authorTitle">
          <h2>Te invito a que visites nuestro blog </h2>
        </div>
        <figure class="authorDireccion">
          <img src="<?= get_template_directory_uri() . "/assets/images/arrow-line.svg" ?>" alt="" />
        </figure>
      </div>
    </div>
  </section>





<?php include(locate_template('layouts/suscripcion.php')) ?>
<?php get_footer(); ?>

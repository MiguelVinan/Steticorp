<?php get_header(); ?>
  <?php include(locate_template('layouts/cover-author.php')) ?>

  <section class="authorBibliografia container u-paddingSection">
    <div class="authorData row">
      <div class="authorFoto col-xs-10 col-sm-10" style="background-image:url('<?= get_template_directory_uri() . "/assets/images/Silvana.jpg" ?>');" >
        <div class="authorSilvana" >
        </div>
      </div>
    </div>
    <div class="authorParrafo col-xs-12 col-sm-9 col-md-9">
      <div class="authorDerecha">
        <p>
          Nam dapibus nisl vitae elit fringilla rutrum. Aenean sollicitudin, erat a elementum rutrum, neque sem pretium metus, quis mollis nisl nunc et massa. Vestibulum sed metus in lorem tristique ullamcorper id vitae erat. Nulla mollis sapien sollicitudin lacinia lacinia. Vivamus facilisis dolor et massa placerat, at vestibulum nisl egestas. Nullam rhoncus lacus non odio luctus, eu condimentum mauris ultrices. Praesent blandit, augue a posuere aliquam, arcu tortor feugiat turpis, quis lacinia augue sapien at tellus. Cras ut erat magna. Morbi nibh ante, condimentum vestibulum tempus a, tristique et velit. Sed semper aliquet ante. Quisque tempus arcu sapien, id convallis turpis dictum quis. Nunc commodo vitae risus sit amet sollicitudin. Sed id facilisis sem.
        </p>
        <p class="hidden-xs hidden-sm">
          Nam dapibus nisl vitae elit fringilla rutrum. Aenean sollicitudin, erat a elementum rutrum, neque sem pretium metus, quis mollis nisl nunc et massa. Vestibulum sed metus in lorem tristique ullamcorper id vitae erat. Nulla mollis sapien sollicitudin lacinia lacinia. Vivamus facilisis dolor et massa placerat, at vestibulum nisl egestas. Nullam rhoncus lacus non odio luctus, eu condimentum mauris ultrices. Praesent blandit, augue a posuere aliquam, arcu tortor feugiat turpis, quis lacinia augue sapien at tellus. Cras ut erat magna. Morbi nibh ante, condimentum vestibulum tempus a, tristique et velit. Sed semper aliquet ante. Quisque tempus arcu sapien, id convallis turpis dictum quis. Nunc commodo vitae risus sit amet sollicitudin. Sed id facilisis sem.
        </p>
      </div>
      <div class="authorBtn col-xs-12 col-sm-12">
        <div class="authorClik">
          <a href="#" class="btn-more">Visita nuestro blog</a>
        </div>
      </div>
    </div>
  </section>
  <section class="authorVisita container u-paddingSection">
    <div class="authorDireccion hidden-xs hidden-sm" style="background-image:url('<?= get_template_directory_uri() . "/assets/images/arrow-line.svg" ?>');" >
    </div>
    <div class="authorTitle text-center col-xs-12">
      <h2>Te invito a que visites nuestro blog</h2>
    </div>
  </section>

<?php include(locate_template('layouts/suscripcion.php')) ?>
<?php get_footer(); ?>
